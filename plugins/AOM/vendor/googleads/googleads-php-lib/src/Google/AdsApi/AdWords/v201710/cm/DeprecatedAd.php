<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeprecatedAd extends \Google\AdsApi\AdWords\v201710\cm\Ad
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $deprecatedAdType
     */
    protected $deprecatedAdType = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201710\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201710\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $name
     * @param string $deprecatedAdType
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $AdType = null, $name = null, $deprecatedAdType = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $AdType);
      $this->name = $name;
      $this->deprecatedAdType = $deprecatedAdType;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201710\cm\DeprecatedAd
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeprecatedAdType()
    {
      return $this->deprecatedAdType;
    }

    /**
     * @param string $deprecatedAdType
     * @return \Google\AdsApi\AdWords\v201710\cm\DeprecatedAd
     */
    public function setDeprecatedAdType($deprecatedAdType)
    {
      $this->deprecatedAdType = $deprecatedAdType;
      return $this;
    }

}
