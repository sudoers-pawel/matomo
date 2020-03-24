<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201711\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\Dfp\\v201711\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\Dfp\\v201711\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\Dfp\\v201711\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201711\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\Dfp\\v201711\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201711\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\Dfp\\v201711\\Asset',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201711\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\Dfp\\v201711\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\Dfp\\v201711\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\Dfp\\v201711\\Creative',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\Dfp\\v201711\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201711\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\Dfp\\v201711\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201711\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201711\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\Dfp\\v201711\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201711\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\Dfp\\v201711\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201711\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201711\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\Dfp\\v201711\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201711\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\Dfp\\v201711\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\Dfp\\v201711\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201711\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\Dfp\\v201711\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201711\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201711\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201711\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\Dfp\\v201711\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\Dfp\\v201711\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\Dfp\\v201711\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\Dfp\\v201711\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201711\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\Dfp\\v201711\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201711\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\Dfp\\v201711\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\Dfp\\v201711\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\Dfp\\v201711\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\VideoRedirectCreative',
      'VpaidLinearCreative' => 'Google\\AdsApi\\Dfp\\v201711\\VpaidLinearCreative',
      'VpaidLinearRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201711\\VpaidLinearRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/CreativeService?wsdl')
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
     * Creates new {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201711\Creative[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function createCreatives(array $creatives)
    {
      return $this->__soapCall('createCreatives', array(array('creatives' => $creatives)))->getRval();
    }

    /**
     * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Creative#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Creative#name}</td>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link Creative#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code width}</td>
     * <td>{@link Creative#size}</td>
     * </tr>
     * <tr>
     * <td>{@code height}</td>
     * <td>{@link Creative#size}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Creative#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of creatives
     *
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\CreativePage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201711\Creative[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
