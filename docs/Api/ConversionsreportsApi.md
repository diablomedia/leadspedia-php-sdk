# LeadspediaApi\ConversionsreportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionsReportsgetConversionsByAdvertisersReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbyadvertisersreportdo) | **GET** /conversionsReports/getConversionsByAdvertisersReport.do | Get Conversions By Advertisers Report
[**conversionsReportsgetConversionsByAffiliatesReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbyaffiliatesreportdo) | **GET** /conversionsReports/getConversionsByAffiliatesReport.do | Get Conversions By Affiliates Report
[**conversionsReportsgetConversionsByCampaignsReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbycampaignsreportdo) | **GET** /conversionsReports/getConversionsByCampaignsReport.do | Get Conversions By Campaigns Report
[**conversionsReportsgetConversionsByOffersReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbyoffersreportdo) | **GET** /conversionsReports/getConversionsByOffersReport.do | Get Conversions By Offers Report
[**conversionsReportsgetConversionsBySourceReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbysourcereportdo) | **GET** /conversionsReports/getConversionsBySourceReport.do | Get Conversions By Source Report
[**conversionsReportsgetConversionsBySubAffiliatesReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbysubaffiliatesreportdo) | **GET** /conversionsReports/getConversionsBySubAffiliatesReport.do | Get Conversions By Sub Affiliates Report
[**conversionsReportsgetConversionsByVerticalsReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsbyverticalsreportdo) | **GET** /conversionsReports/getConversionsByVerticalsReport.do | Get Conversions By Verticals Report
[**conversionsReportsgetConversionsDailyReportdo**](ConversionsreportsApi.md#conversionsreportsgetconversionsdailyreportdo) | **GET** /conversionsReports/getConversionsDailyReport.do | Get Conversions Daily Report

# **conversionsReportsgetConversionsByAdvertisersReportdo**
> conversionsReportsgetConversionsByAdvertisersReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $advertiser_account_manager_id, $to_date)

Get Conversions By Advertisers Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$offer_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsByAdvertisersReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **advertiser_account_manager_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsByAffiliatesReportdo**
> conversionsReportsgetConversionsByAffiliatesReportdo($from_date, $vertical_id, $vertical_group_id, $affiliate_account_manager_id, $to_date)

Get Conversions By Affiliates Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsByAffiliatesReportdo($from_date, $vertical_id, $vertical_group_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **affiliate_account_manager_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsByCampaignsReportdo**
> conversionsReportsgetConversionsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Conversions By Campaigns Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$offer_id = 56; // int | 
$payout_model = "payout_model_example"; // string | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **payout_model** | **string**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **affiliate_account_manager_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsByOffersReportdo**
> conversionsReportsgetConversionsByOffersReportdo($from_date, $vertical_id, $vertical_group_id, $payout_model, $to_date)

Get Conversions By Offers Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$payout_model = "payout_model_example"; // string | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsByOffersReportdo($from_date, $vertical_id, $vertical_group_id, $payout_model, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **payout_model** | **string**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsBySourceReportdo**
> conversionsReportsgetConversionsBySourceReportdo($from_date, $vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Conversions By Source Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsBySourceReportdo($from_date, $vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsBySourceReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **advertiser_account_manager_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsBySubAffiliatesReportdo**
> conversionsReportsgetConversionsBySubAffiliatesReportdo($from_date, $campaign_id, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Conversions By Sub Affiliates Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsBySubAffiliatesReportdo($from_date, $campaign_id, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **affiliate_account_manager_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsByVerticalsReportdo**
> conversionsReportsgetConversionsByVerticalsReportdo($from_date, $vertical_group_id, $to_date)

Get Conversions By Verticals Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_group_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->conversionsReportsgetConversionsByVerticalsReportdo($from_date, $vertical_group_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_group_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversionsReportsgetConversionsDailyReportdo**
> conversionsReportsgetConversionsDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id)

Get Conversions Daily Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = "month_example"; // string | 
$year = "year_example"; // string | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$offer_id = 56; // int | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 

try {
    $apiInstance->conversionsReportsgetConversionsDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsreportsApi->conversionsReportsgetConversionsDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**|  |
 **year** | **string**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **affiliate_account_manager_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

