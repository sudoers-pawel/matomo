<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItem extends \Google\AdsApi\Dfp\v201802\LineItemSummary
{

    /**
     * @var \Google\AdsApi\Dfp\v201802\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\CreativeTargeting[] $creativeTargetings
     */
    protected $creativeTargetings = null;

    /**
     * @param int $orderId
     * @param int $id
     * @param string $name
     * @param string $externalId
     * @param string $orderName
     * @param \Google\AdsApi\Dfp\v201802\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\Dfp\v201802\DateTime $endDateTime
     * @param int $autoExtensionDays
     * @param boolean $unlimitedEndDateTime
     * @param string $creativeRotationType
     * @param string $deliveryRateType
     * @param string $roadblockingType
     * @param \Google\AdsApi\Dfp\v201802\FrequencyCap[] $frequencyCaps
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\Dfp\v201802\Money $costPerUnit
     * @param \Google\AdsApi\Dfp\v201802\Money $valueCostPerUnit
     * @param string $costType
     * @param string $discountType
     * @param float $discount
     * @param int $contractedUnitsBought
     * @param \Google\AdsApi\Dfp\v201802\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\Dfp\v201802\LineItemActivityAssociation[] $activityAssociations
     * @param string $environmentType
     * @param string $companionDeliveryOption
     * @param boolean $allowOverbook
     * @param boolean $skipInventoryCheck
     * @param boolean $skipCrossSellingRuleWarningChecks
     * @param boolean $reserveAtCreation
     * @param \Google\AdsApi\Dfp\v201802\Stats $stats
     * @param \Google\AdsApi\Dfp\v201802\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\Dfp\v201802\DeliveryData $deliveryData
     * @param \Google\AdsApi\Dfp\v201802\Money $budget
     * @param string $status
     * @param string $reservationStatus
     * @param boolean $isArchived
     * @param string $webPropertyCode
     * @param \Google\AdsApi\Dfp\v201802\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201802\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param string $lastModifiedByApp
     * @param string $notes
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201802\DateTime $creationDateTime
     * @param boolean $isPrioritizedPreferredDealsEnabled
     * @param int $adExchangeAuctionOpeningPriority
     * @param \Google\AdsApi\Dfp\v201802\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $isSetTopBoxEnabled
     * @param boolean $isMissingCreatives
     * @param \Google\AdsApi\Dfp\v201802\SetTopBoxInfo $setTopBoxDisplayInfo
     * @param string $programmaticCreativeSource
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\Dfp\v201802\Goal $primaryGoal
     * @param \Google\AdsApi\Dfp\v201802\Goal[] $secondaryGoals
     * @param \Google\AdsApi\Dfp\v201802\GrpSettings $grpSettings
     * @param \Google\AdsApi\Dfp\v201802\Targeting $targeting
     * @param \Google\AdsApi\Dfp\v201802\CreativeTargeting[] $creativeTargetings
     */
    public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $roadblockingType = null, array $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, array $creativePlaceholders = null, array $activityAssociations = null, $environmentType = null, $companionDeliveryOption = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, array $customFieldValues = null, $isSetTopBoxEnabled = null, $isMissingCreatives = null, $setTopBoxDisplayInfo = null, $programmaticCreativeSource = null, $videoMaxDuration = null, $primaryGoal = null, array $secondaryGoals = null, $grpSettings = null, $targeting = null, array $creativeTargetings = null)
    {
      parent::__construct($orderId, $id, $name, $externalId, $orderName, $startDateTime, $startDateTimeType, $endDateTime, $autoExtensionDays, $unlimitedEndDateTime, $creativeRotationType, $deliveryRateType, $roadblockingType, $frequencyCaps, $lineItemType, $priority, $costPerUnit, $valueCostPerUnit, $costType, $discountType, $discount, $contractedUnitsBought, $creativePlaceholders, $activityAssociations, $environmentType, $companionDeliveryOption, $allowOverbook, $skipInventoryCheck, $skipCrossSellingRuleWarningChecks, $reserveAtCreation, $stats, $deliveryIndicator, $deliveryData, $budget, $status, $reservationStatus, $isArchived, $webPropertyCode, $appliedLabels, $effectiveAppliedLabels, $disableSameAdvertiserCompetitiveExclusion, $lastModifiedByApp, $notes, $lastModifiedDateTime, $creationDateTime, $isPrioritizedPreferredDealsEnabled, $adExchangeAuctionOpeningPriority, $customFieldValues, $isSetTopBoxEnabled, $isMissingCreatives, $setTopBoxDisplayInfo, $programmaticCreativeSource, $videoMaxDuration, $primaryGoal, $secondaryGoals, $grpSettings);
      $this->targeting = $targeting;
      $this->creativeTargetings = $creativeTargetings;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Targeting $targeting
     * @return \Google\AdsApi\Dfp\v201802\LineItem
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\CreativeTargeting[]
     */
    public function getCreativeTargetings()
    {
      return $this->creativeTargetings;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\CreativeTargeting[] $creativeTargetings
     * @return \Google\AdsApi\Dfp\v201802\LineItem
     */
    public function setCreativeTargetings(array $creativeTargetings)
    {
      $this->creativeTargetings = $creativeTargetings;
      return $this;
    }

}
