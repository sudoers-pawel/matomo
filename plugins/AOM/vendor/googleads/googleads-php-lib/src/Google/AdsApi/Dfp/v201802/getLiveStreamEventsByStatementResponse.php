<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLiveStreamEventsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201802\LiveStreamEventPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201802\LiveStreamEventPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\LiveStreamEventPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\LiveStreamEventPage $rval
     * @return \Google\AdsApi\Dfp\v201802\getLiveStreamEventsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
