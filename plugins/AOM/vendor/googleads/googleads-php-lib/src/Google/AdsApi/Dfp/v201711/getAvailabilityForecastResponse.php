<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAvailabilityForecastResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\AvailabilityForecast $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\AvailabilityForecast $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\AvailabilityForecast
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\AvailabilityForecast $rval
     * @return \Google\AdsApi\Dfp\v201711\getAvailabilityForecastResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
