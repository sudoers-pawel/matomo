<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201711\\AvailableBillingError',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201711\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'CreateProposalLineItemsFromPackages' => 'Google\\AdsApi\\Dfp\\v201711\\CreateProposalLineItemsFromPackages',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'PackageAction' => 'Google\\AdsApi\\Dfp\\v201711\\PackageAction',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201711\\PackageActionError',
      'Package' => 'Google\\AdsApi\\Dfp\\v201711\\Package',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201711\\PackageError',
      'PackagePage' => 'Google\\AdsApi\\Dfp\\v201711\\PackagePage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201711\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201711\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\ProposalLineItemError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201711\\ReservationDetailsError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201711\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201711\\TimeZoneError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201711\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'createPackagesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createPackagesResponse',
      'getPackagesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getPackagesByStatementResponse',
      'performPackageActionResponse' => 'Google\\AdsApi\\Dfp\\v201711\\performPackageActionResponse',
      'updatePackagesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updatePackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/PackageService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link Package} objects.
     *
     * For each package, the following fields are required:
     * <ul>
     * <li>{@link Package#proposalId}</li>
     * <li>{@link Package#productPackageId}</li>
     * <li>{@link Package#name}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201711\Package[] $packages
     * @return \Google\AdsApi\Dfp\v201711\Package[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function createPackages(array $packages)
    {
      return $this->__soapCall('createPackages', array(array('packages' => $packages)))->getRval();
    }

    /**
     * Gets a {@link PackagePage} of {@link Package} objects
     * that satisfy the given {@link Statement#query}.  The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Package#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Package#name}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link Package#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code productPackageId}</td>
     * <td>{@link Package#productPackageId}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link Package#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Package#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of packages
     *
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\PackagePage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getPackagesByStatement(\Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getPackagesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Package} objects that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\Dfp\v201711\PackageAction $packageAction
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function performPackageAction(\Google\AdsApi\Dfp\v201711\PackageAction $packageAction, \Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performPackageAction', array(array('packageAction' => $packageAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Package} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\Package[] $packages
     * @return \Google\AdsApi\Dfp\v201711\Package[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updatePackages(array $packages)
    {
      return $this->__soapCall('updatePackages', array(array('packages' => $packages)))->getRval();
    }

}
