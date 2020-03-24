<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationOrderReportsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\ReconciliationOrderReportPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\ReconciliationOrderReportPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\ReconciliationOrderReportPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\ReconciliationOrderReportPage $rval
     * @return \Google\AdsApi\Dfp\v201711\getReconciliationOrderReportsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
