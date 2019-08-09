# LeadspediaApi\ReportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsgetAdvertisersReportdo**](ReportsApi.md#reportsgetadvertisersreportdo) | **GET** /reports/getAdvertisersReport.do | Get Advertisers Report
[**reportsgetAffiliatesReportdo**](ReportsApi.md#reportsgetaffiliatesreportdo) | **GET** /reports/getAffiliatesReport.do | Get Affiliates Report
[**reportsgetCampaignsReportdo**](ReportsApi.md#reportsgetcampaignsreportdo) | **GET** /reports/getCampaignsReport.do | Get Campaigns Report
[**reportsgetOffersReportdo**](ReportsApi.md#reportsgetoffersreportdo) | **GET** /reports/getOffersReport.do | Get Offers Report
[**reportsgetVerticalsReportdo**](ReportsApi.md#reportsgetverticalsreportdo) | **GET** /reports/getVerticalsReport.do | Get Verticals Report

# **reportsgetAdvertisersReportdo**
> reportsgetAdvertisersReportdo($from_date, $advertiser_account_manager_id, $to_date)

Get Advertisers Report

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

$apiInstance = new LeadspediaApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->reportsgetAdvertisersReportdo($from_date, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
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

# **reportsgetAffiliatesReportdo**
> reportsgetAffiliatesReportdo($from_date, $affiliate_account_manager_id, $to_date)

Get Affiliates Report

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

$apiInstance = new LeadspediaApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->reportsgetAffiliatesReportdo($from_date, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
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

# **reportsgetCampaignsReportdo**
> reportsgetCampaignsReportdo($from_date, $affiliate_id, $vertical_id, $to_date)

Get Campaigns Report

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

$apiInstance = new LeadspediaApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->reportsgetCampaignsReportdo($from_date, $affiliate_id, $vertical_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsgetOffersReportdo**
> reportsgetOffersReportdo($from_date, $vertical_id, $to_date)

Get Offers Report

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

$apiInstance = new LeadspediaApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->reportsgetOffersReportdo($from_date, $vertical_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsgetVerticalsReportdo**
> reportsgetVerticalsReportdo($from_date, $to_date)

Get Verticals Report

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

$apiInstance = new LeadspediaApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->reportsgetVerticalsReportdo($from_date, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

