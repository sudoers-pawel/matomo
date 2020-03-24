<?php
/**
 * Copyright 2018, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\AdWords\Query\v201802;

use Google\AdsApi\AdWords\v201802\cm\CriterionBidLandscapePage;
use Google\AdsApi\AdWords\v201802\cm\AdGroupBidLandscapePage;
use Google\AdsApi\AdWords\v201802\cm\Page;
use InvalidArgumentException;
use OutOfBoundsException;

/**
 * A service query that embodies an AWQL string for making SOAP requests.
 */
final class ServiceQuery
{
    const PATTERN_LIMIT_CLAUSE = '/limit\s+\d+,\d+/i';
    const PATTERN_LITERAL_STRING = '/[\'"][^\'"]*[\'""]/i';
    const REDACTED_LITERAL_STRING = 'redacted_literal_string';

    /**
     * @var string a partial AWQL string without the LIMIT clause
     */
    private $awqlString;
    private $startIndex;
    private $pageSize;
    private $totalNumEntries;

    /**
     * Creates a service query object from an AWQL string without the LIMIT
     * clause.
     *
     * Do not use this constructor, instances should be created by using the
     * `ServiceQueryBuilder` instead.
     *
     * @param string $awqlString the AWQL string without the LIMIT clause
     * @param int|null $startIndex optional, the start index of the first page
     * @param int|null $pageSize optional, the count of entries to be fetched in
     *     each page
     */
    public function __construct(
        $awqlString,
        $startIndex = null,
        $pageSize = null
    ) {
        self::validate($awqlString, $startIndex, $pageSize);

        $this->awqlString = $awqlString;
        $this->startIndex = $startIndex;
        $this->pageSize = $pageSize;
    }

    /**
     * Detects the LIMIT clause in an AWQL string.
     *
     * @param string $awqlString an AWQL string
     * @return bool true if the AWQL string contains a LIMIT clause;
     *     Otherwise, returns false
     */
    private static function containsLimitClause($awqlString)
    {
        if (empty($awqlString)) {
            return false;
        }

        // The AWQL string may contain the LIMIT keyword in a literal string.
        // For example:
        //     SELECT Id
        //     WHERE Name = 'THE LIMIT INC'
        //
        // This function concerns about the LIMIT keyword outside of all literal
        // strings. Hence, it is necessary to redact all literal strings before
        // scanning for the LIMIT keyword.

        $awqlStringWithoutLiteralStrings = preg_replace(
            self::PATTERN_LITERAL_STRING,
            self::REDACTED_LITERAL_STRING,
            $awqlString
        );

        return 1 === preg_match(
            self::PATTERN_LIMIT_CLAUSE,
            $awqlStringWithoutLiteralStrings
        );
    }

    /**
     * Validates the arguments for constructing a service query object.
     *
     * @param string $awqlString the AWQL string without the LIMIT clause
     * @param int $startIndex the start index of the first page
     * @param int $pageSize the count of entries to be fetched in each page
     *
     * @throws InvalidArgumentException when the AWQL string is null or empty,
     *     or contains a LIMIT clause
     * @throws OutOfBoundsException when the start index is a negative number,
     *     or when the page size is 0 or a negative number
     */
    private static function validate($awqlString, $startIndex, $pageSize)
    {
        if (empty($awqlString)) {
            throw new InvalidArgumentException('The AWQL string must not be' .
                ' null or empty');
        }

        if (self::containsLimitClause($awqlString)) {
            throw new InvalidArgumentException('The AWQL string must not' .
                ' contain the LIMIT clause');
        }

        // The `startIndex` and `pageSize` arguments are optional for
        // constructing a `ServiceQuery` object. They must either be both null,
        // or both not null.

        if (is_null($startIndex) !== is_null($pageSize)) {
            throw new InvalidArgumentException('Start index and page size' .
                ' must be both null, or both not null.');
        }

        if (!is_null($startIndex)) {
            if (!is_int($startIndex)) {
                throw new InvalidArgumentException('The start index must be' .
                    ' an integer.');
            }

            if ($startIndex < 0) {
                throw new OutOfBoundsException('The start index must be 0 or' .
                    ' a positive number.');
            }
        }

        if (!is_null($pageSize)) {
            if (!is_int($pageSize)) {
                throw new InvalidArgumentException('The page size must be' .
                    ' an integer.');
            }

            if ($pageSize < 1) {
                throw new OutOfBoundsException('The page size must be a' .
                    ' positive number.');
            }
        }
    }

    /**
     * Counts the number of landscape points in a `AdGroupBidLandscapePage` or
     * `AdGroupBidLandscapePage` page.
     *
     * @param Page $page the previously fetched page which must be an
     *     instance of either `AdGroupBidLandscapePage` or
     *     `AdGroupBidLandscapePage`
     * @return int the count of landscape points in a given page
     */
    private static function countLandscapePoints(Page $page)
    {
        $totalLandscapePointsInPage = 0;
        foreach ($page->getEntries() as $entry) {
            $totalLandscapePointsInPage +=
                count($entry->getLandscapePoints());
        }
        return $totalLandscapePointsInPage;
    }

    /**
     * @return string the complete AWQL string with the LIMIT clause
     */
    public function __toString()
    {
        if (!is_null($this->startIndex) && !is_null($this->pageSize)) {
            return sprintf(
                '%s LIMIT %d,%d',
                $this->awqlString,
                $this->startIndex,
                $this->pageSize
            );
        }

        return $this->awqlString;
    }

    /**
     * Increases the start index by the current page size.
     *
     * <p>When querying against the `DataService`, an instance of
     * `AdGroupBidLandscapePage` or `AdGroupBidLandscapePage` is required for
     * this function to compute the current page size. These special page
     * classes have their own paging mechanism which is different from other
     * services. For details, see
     * https://developers.google.com/adwords/api/docs/guides/bid-landscapes#paging_through_results
     *
     * @param Page|null $previousPage optional, the previously fetched page
     *     which must be an instance of either `AdGroupBidLandscapePage` or
     *     `AdGroupBidLandscapePage`
     * @return ServiceQuery the current `ServiceQuery` instance for chaining
     */
    public function nextPage(Page $previousPage = null)
    {
        if (is_null($previousPage)) {
            $this->startIndex = $this->startIndex + $this->pageSize;
            return $this;
        }

        if (!($previousPage instanceof AdGroupBidLandscapePage) &&
            !($previousPage instanceof CriterionBidLandscapePage)) {
            throw new InvalidArgumentException('The page object must be an' .
                ' instance of either `AdGroupBidLandscapePage` or' .
                ' `CriterionBidLandscapePage` type');
        }

        $this->startIndex = $this->startIndex +
            self::countLandscapePoints($previousPage);

        return $this;
    }

    /**
     * Checks if there are still entries to be fetched on the next page.
     *
     * <p>When querying against the `DataService`, an instance of
     * `AdGroupBidLandscapePage` or `AdGroupBidLandscapePage` could be
     * returned. These special page classes have their own paging mechanism
     * which is different from other services. For details, see
     * https://developers.google.com/adwords/api/docs/guides/bid-landscapes#paging_through_results
     *
     * @param Page $previousPage the previously fetched page
     * @return bool true if there are still entries to be fetched on
     *     next page; Otherwise, returns false
     */
    public function hasNext(Page $previousPage)
    {
        if ($previousPage instanceof AdGroupBidLandscapePage ||
            $previousPage instanceof CriterionBidLandscapePage) {
            return $this->pageSize <= self::countLandscapePoints($previousPage);
        }

        if (is_null($this->totalNumEntries)) {
            $this->totalNumEntries = $previousPage->getTotalNumEntries();
        }

        return $this->startIndex + $this->pageSize < $this->totalNumEntries;
    }
}
