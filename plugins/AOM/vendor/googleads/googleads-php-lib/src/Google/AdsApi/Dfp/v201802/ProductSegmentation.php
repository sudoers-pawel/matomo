<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductSegmentation
{

    /**
     * @var \Google\AdsApi\Dfp\v201802\GeoTargeting $geoSegment
     */
    protected $geoSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\AdUnitTargeting[] $adUnitSegments
     */
    protected $adUnitSegments = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\PlacementTargeting $placementSegment
     */
    protected $placementSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\CustomCriteria[] $customTargetingSegment
     */
    protected $customTargetingSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\UserDomainTargeting $userDomainSegment
     */
    protected $userDomainSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\BandwidthGroupTargeting $bandwidthSegment
     */
    protected $bandwidthSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\BrowserTargeting $browserSegment
     */
    protected $browserSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\BrowserLanguageTargeting $browserLanguageSegment
     */
    protected $browserLanguageSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\OperatingSystemTargeting $operatingSystemSegment
     */
    protected $operatingSystemSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\OperatingSystemVersionTargeting $operatingSystemVersionSegment
     */
    protected $operatingSystemVersionSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\MobileCarrierTargeting $mobileCarrierSegment
     */
    protected $mobileCarrierSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DeviceCapabilityTargeting $deviceCapabilitySegment
     */
    protected $deviceCapabilitySegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DeviceCategoryTargeting $deviceCategorySegment
     */
    protected $deviceCategorySegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DeviceManufacturerTargeting $deviceManufacturerSegment
     */
    protected $deviceManufacturerSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\MobileDeviceTargeting $mobileDeviceSegment
     */
    protected $mobileDeviceSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     */
    protected $mobileDeviceSubmodelSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\CreativePlaceholder[] $sizeSegment
     */
    protected $sizeSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\MobileApplicationTargeting $mobileApplicationSegment
     */
    protected $mobileApplicationSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\VideoPositionTargeting $videoPositionSegment
     */
    protected $videoPositionSegment = null;

    /**
     * @param \Google\AdsApi\Dfp\v201802\GeoTargeting $geoSegment
     * @param \Google\AdsApi\Dfp\v201802\AdUnitTargeting[] $adUnitSegments
     * @param \Google\AdsApi\Dfp\v201802\PlacementTargeting $placementSegment
     * @param \Google\AdsApi\Dfp\v201802\CustomCriteria[] $customTargetingSegment
     * @param \Google\AdsApi\Dfp\v201802\UserDomainTargeting $userDomainSegment
     * @param \Google\AdsApi\Dfp\v201802\BandwidthGroupTargeting $bandwidthSegment
     * @param \Google\AdsApi\Dfp\v201802\BrowserTargeting $browserSegment
     * @param \Google\AdsApi\Dfp\v201802\BrowserLanguageTargeting $browserLanguageSegment
     * @param \Google\AdsApi\Dfp\v201802\OperatingSystemTargeting $operatingSystemSegment
     * @param \Google\AdsApi\Dfp\v201802\OperatingSystemVersionTargeting $operatingSystemVersionSegment
     * @param \Google\AdsApi\Dfp\v201802\MobileCarrierTargeting $mobileCarrierSegment
     * @param \Google\AdsApi\Dfp\v201802\DeviceCapabilityTargeting $deviceCapabilitySegment
     * @param \Google\AdsApi\Dfp\v201802\DeviceCategoryTargeting $deviceCategorySegment
     * @param \Google\AdsApi\Dfp\v201802\DeviceManufacturerTargeting $deviceManufacturerSegment
     * @param \Google\AdsApi\Dfp\v201802\MobileDeviceTargeting $mobileDeviceSegment
     * @param \Google\AdsApi\Dfp\v201802\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     * @param \Google\AdsApi\Dfp\v201802\CreativePlaceholder[] $sizeSegment
     * @param \Google\AdsApi\Dfp\v201802\MobileApplicationTargeting $mobileApplicationSegment
     * @param \Google\AdsApi\Dfp\v201802\VideoPositionTargeting $videoPositionSegment
     */
    public function __construct($geoSegment = null, array $adUnitSegments = null, $placementSegment = null, array $customTargetingSegment = null, $userDomainSegment = null, $bandwidthSegment = null, $browserSegment = null, $browserLanguageSegment = null, $operatingSystemSegment = null, $operatingSystemVersionSegment = null, $mobileCarrierSegment = null, $deviceCapabilitySegment = null, $deviceCategorySegment = null, $deviceManufacturerSegment = null, $mobileDeviceSegment = null, $mobileDeviceSubmodelSegment = null, array $sizeSegment = null, $mobileApplicationSegment = null, $videoPositionSegment = null)
    {
      $this->geoSegment = $geoSegment;
      $this->adUnitSegments = $adUnitSegments;
      $this->placementSegment = $placementSegment;
      $this->customTargetingSegment = $customTargetingSegment;
      $this->userDomainSegment = $userDomainSegment;
      $this->bandwidthSegment = $bandwidthSegment;
      $this->browserSegment = $browserSegment;
      $this->browserLanguageSegment = $browserLanguageSegment;
      $this->operatingSystemSegment = $operatingSystemSegment;
      $this->operatingSystemVersionSegment = $operatingSystemVersionSegment;
      $this->mobileCarrierSegment = $mobileCarrierSegment;
      $this->deviceCapabilitySegment = $deviceCapabilitySegment;
      $this->deviceCategorySegment = $deviceCategorySegment;
      $this->deviceManufacturerSegment = $deviceManufacturerSegment;
      $this->mobileDeviceSegment = $mobileDeviceSegment;
      $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      $this->sizeSegment = $sizeSegment;
      $this->mobileApplicationSegment = $mobileApplicationSegment;
      $this->videoPositionSegment = $videoPositionSegment;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\GeoTargeting
     */
    public function getGeoSegment()
    {
      return $this->geoSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\GeoTargeting $geoSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setGeoSegment($geoSegment)
    {
      $this->geoSegment = $geoSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\AdUnitTargeting[]
     */
    public function getAdUnitSegments()
    {
      return $this->adUnitSegments;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\AdUnitTargeting[] $adUnitSegments
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setAdUnitSegments(array $adUnitSegments)
    {
      $this->adUnitSegments = $adUnitSegments;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\PlacementTargeting
     */
    public function getPlacementSegment()
    {
      return $this->placementSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\PlacementTargeting $placementSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setPlacementSegment($placementSegment)
    {
      $this->placementSegment = $placementSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\CustomCriteria[]
     */
    public function getCustomTargetingSegment()
    {
      return $this->customTargetingSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\CustomCriteria[] $customTargetingSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setCustomTargetingSegment(array $customTargetingSegment)
    {
      $this->customTargetingSegment = $customTargetingSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\UserDomainTargeting
     */
    public function getUserDomainSegment()
    {
      return $this->userDomainSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\UserDomainTargeting $userDomainSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setUserDomainSegment($userDomainSegment)
    {
      $this->userDomainSegment = $userDomainSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\BandwidthGroupTargeting
     */
    public function getBandwidthSegment()
    {
      return $this->bandwidthSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\BandwidthGroupTargeting $bandwidthSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setBandwidthSegment($bandwidthSegment)
    {
      $this->bandwidthSegment = $bandwidthSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\BrowserTargeting
     */
    public function getBrowserSegment()
    {
      return $this->browserSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\BrowserTargeting $browserSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setBrowserSegment($browserSegment)
    {
      $this->browserSegment = $browserSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\BrowserLanguageTargeting
     */
    public function getBrowserLanguageSegment()
    {
      return $this->browserLanguageSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\BrowserLanguageTargeting $browserLanguageSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setBrowserLanguageSegment($browserLanguageSegment)
    {
      $this->browserLanguageSegment = $browserLanguageSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\OperatingSystemTargeting
     */
    public function getOperatingSystemSegment()
    {
      return $this->operatingSystemSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\OperatingSystemTargeting $operatingSystemSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setOperatingSystemSegment($operatingSystemSegment)
    {
      $this->operatingSystemSegment = $operatingSystemSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\OperatingSystemVersionTargeting
     */
    public function getOperatingSystemVersionSegment()
    {
      return $this->operatingSystemVersionSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\OperatingSystemVersionTargeting $operatingSystemVersionSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setOperatingSystemVersionSegment($operatingSystemVersionSegment)
    {
      $this->operatingSystemVersionSegment = $operatingSystemVersionSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\MobileCarrierTargeting
     */
    public function getMobileCarrierSegment()
    {
      return $this->mobileCarrierSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\MobileCarrierTargeting $mobileCarrierSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setMobileCarrierSegment($mobileCarrierSegment)
    {
      $this->mobileCarrierSegment = $mobileCarrierSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DeviceCapabilityTargeting
     */
    public function getDeviceCapabilitySegment()
    {
      return $this->deviceCapabilitySegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DeviceCapabilityTargeting $deviceCapabilitySegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setDeviceCapabilitySegment($deviceCapabilitySegment)
    {
      $this->deviceCapabilitySegment = $deviceCapabilitySegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DeviceCategoryTargeting
     */
    public function getDeviceCategorySegment()
    {
      return $this->deviceCategorySegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DeviceCategoryTargeting $deviceCategorySegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setDeviceCategorySegment($deviceCategorySegment)
    {
      $this->deviceCategorySegment = $deviceCategorySegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DeviceManufacturerTargeting
     */
    public function getDeviceManufacturerSegment()
    {
      return $this->deviceManufacturerSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DeviceManufacturerTargeting $deviceManufacturerSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setDeviceManufacturerSegment($deviceManufacturerSegment)
    {
      $this->deviceManufacturerSegment = $deviceManufacturerSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\MobileDeviceTargeting
     */
    public function getMobileDeviceSegment()
    {
      return $this->mobileDeviceSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\MobileDeviceTargeting $mobileDeviceSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setMobileDeviceSegment($mobileDeviceSegment)
    {
      $this->mobileDeviceSegment = $mobileDeviceSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\MobileDeviceSubmodelTargeting
     */
    public function getMobileDeviceSubmodelSegment()
    {
      return $this->mobileDeviceSubmodelSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setMobileDeviceSubmodelSegment($mobileDeviceSubmodelSegment)
    {
      $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\CreativePlaceholder[]
     */
    public function getSizeSegment()
    {
      return $this->sizeSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\CreativePlaceholder[] $sizeSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setSizeSegment(array $sizeSegment)
    {
      $this->sizeSegment = $sizeSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\MobileApplicationTargeting
     */
    public function getMobileApplicationSegment()
    {
      return $this->mobileApplicationSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\MobileApplicationTargeting $mobileApplicationSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setMobileApplicationSegment($mobileApplicationSegment)
    {
      $this->mobileApplicationSegment = $mobileApplicationSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\VideoPositionTargeting
     */
    public function getVideoPositionSegment()
    {
      return $this->videoPositionSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\VideoPositionTargeting $videoPositionSegment
     * @return \Google\AdsApi\Dfp\v201802\ProductSegmentation
     */
    public function setVideoPositionSegment($videoPositionSegment)
    {
      $this->videoPositionSegment = $videoPositionSegment;
      return $this;
    }

}
