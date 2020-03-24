<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BaseRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201802\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201802\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201802\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201802\\AuthenticationError',
      'BaseRateAction' => 'Google\\AdsApi\\Dfp\\v201802\\BaseRateAction',
      'BaseRateActionError' => 'Google\\AdsApi\\Dfp\\v201802\\BaseRateActionError',
      'BaseRate' => 'Google\\AdsApi\\Dfp\\v201802\\BaseRate',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201802\\BaseRateError',
      'BaseRatePage' => 'Google\\AdsApi\\Dfp\\v201802\\BaseRatePage',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201802\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201802\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201802\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateValue',
      'DeleteBaseRates' => 'Google\\AdsApi\\Dfp\\v201802\\DeleteBaseRates',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201802\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201802\\InternalApiError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201802\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201802\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201802\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201802\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201802\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201802\\PermissionError',
      'ProductBaseRate' => 'Google\\AdsApi\\Dfp\\v201802\\ProductBaseRate',
      'ProductPackageItemBaseRate' => 'Google\\AdsApi\\Dfp\\v201802\\ProductPackageItemBaseRate',
      'ProductTemplateBaseRate' => 'Google\\AdsApi\\Dfp\\v201802\\ProductTemplateBaseRate',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201802\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201802\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201802\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201802\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201802\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201802\\TextValue',
      'UnknownBaseRate' => 'Google\\AdsApi\\Dfp\\v201802\\UnknownBaseRate',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201802\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201802\\Value',
      'createBaseRatesResponse' => 'Google\\AdsApi\\Dfp\\v201802\\createBaseRatesResponse',
      'getBaseRatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getBaseRatesByStatementResponse',
      'performBaseRateActionResponse' => 'Google\\AdsApi\\Dfp\\v201802\\performBaseRateActionResponse',
      'updateBaseRatesResponse' => 'Google\\AdsApi\\Dfp\\v201802\\updateBaseRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/BaseRateService?wsdl')
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
     * Creates a list of new {@link BaseRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201802\BaseRate[] $baseRates
     * @return \Google\AdsApi\Dfp\v201802\BaseRate[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function createBaseRates(array $baseRates)
    {
      return $this->__soapCall('createBaseRates', array(array('baseRates' => $baseRates)))->getRval();
    }

    /**
     * Gets a {@link BaseRatePage} of {@link BaseRate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link BaseRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link BaseRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code productTemplateId}</td>
     * <td>{@link ProductTemplateBaseRate#id}<br><b>Note:</b>&nbsp;Cannot be
     * combined with {@code productId}.
     * </tr>
     * <td>{@code productId}</td>
     * <td>{@link ProductBaseRate#id}<br><b>Note:</b>&nbsp;Cannot be combined with
     * {@code productTemplateId}.
     * </tr>
     *
     * a set of base rates.
     *
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\BaseRatePage
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getBaseRatesByStatement(\Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getBaseRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link BaseRate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of base rates.
     *
     * @param \Google\AdsApi\Dfp\v201802\BaseRateAction $baseRateAction
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function performBaseRateAction(\Google\AdsApi\Dfp\v201802\BaseRateAction $baseRateAction, \Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performBaseRateAction', array(array('baseRateAction' => $baseRateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link BaseRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201802\BaseRate[] $baseRates
     * @return \Google\AdsApi\Dfp\v201802\BaseRate[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function updateBaseRates(array $baseRates)
    {
      return $this->__soapCall('updateBaseRates', array(array('baseRates' => $baseRates)))->getRval();
    }

}
