<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201711\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\Dfp\\v201711\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201711\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201711\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201711\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201711\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201711\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201711\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\Dfp\\v201711\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201711\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201711\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201711\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201711\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201711\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201711\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\Dfp\\v201711\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/LineItemCreativeAssociationService?wsdl')
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
     * Creates new {@link LineItemCreativeAssociation} objects
     *
     * create
     * in
     *
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function createLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('createLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

    /**
     * Gets a {@link LineItemCreativeAssociationPage} of
     * {@link LineItemCreativeAssociation} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code creativeId}</td>
     * <td>{@link LineItemCreativeAssociation#creativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code manualCreativeRotationWeight}</td>
     * <td>{@link LineItemCreativeAssociation#manualCreativeRotationWeight}</td>
     * </tr>
     * <tr>
     * <td>{@code destinationUrl}</td>
     * <td>{@link LineItemCreativeAssociation#destinationUrl}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemId}</td>
     * <td>{@link LineItemCreativeAssociation#lineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link LineItemCreativeAssociation#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link LineItemCreativeAssociation#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of line item creative associations
     *
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemCreativeAssociationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Returns an insite preview URL that references the specified site URL with
     * the specified creative from the association served to it. For Creative Set
     * previewing you may specify the master creative Id.
     *
     * creative served to it
     *
     * @param int $lineItemId
     * @param int $creativeId
     * @param string $siteUrl
     * @return string
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getPreviewUrl($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrl', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Returns a list of URLs that reference the specified site URL with the specified creative from
     * the association served to it. For Creative Set previewing you may specify the master creative
     * Id. Each URL corresponds to one available native style for previewing the specified creative.
     *
     * creative
     * specified creative with the available native styles
     *
     * @param int $lineItemId
     * @param int $creativeId
     * @param string $siteUrl
     * @return \Google\AdsApi\Dfp\v201711\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getPreviewUrlsForNativeStyles($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrlsForNativeStyles', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match
     * the given {@link Statement#query}.
     *
     * a set of line item creative associations
     *
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
