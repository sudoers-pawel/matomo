<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativeWrappersByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\CreativeWrapperPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\CreativeWrapperPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\CreativeWrapperPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\CreativeWrapperPage $rval
     * @return \Google\AdsApi\Dfp\v201711\getCreativeWrappersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
