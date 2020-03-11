# LeadspediaApi\CalltrackingreportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callTrackingReportsgetCallRoutingReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallroutingreportdo) | **GET** /callTrackingReports/getCallRoutingReport.do | Get Call Routing Report
[**callTrackingReportsgetCallsByAdvertisersDailyReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbyadvertisersdailyreportdo) | **GET** /callTrackingReports/getCallsByAdvertisersDailyReport.do | Get Calls By Advertisers Daily Report
[**callTrackingReportsgetCallsByAdvertisersReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbyadvertisersreportdo) | **GET** /callTrackingReports/getCallsByAdvertisersReport.do | Get Calls By Advertisers Report
[**callTrackingReportsgetCallsByAffiliatesDailyReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbyaffiliatesdailyreportdo) | **GET** /callTrackingReports/getCallsByAffiliatesDailyReport.do | Get Calls By Affiliates Daily Report
[**callTrackingReportsgetCallsByAffiliatesReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbyaffiliatesreportdo) | **GET** /callTrackingReports/getCallsByAffiliatesReport.do | Get Calls By Affiliates Report
[**callTrackingReportsgetCallsByCampaignsReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbycampaignsreportdo) | **GET** /callTrackingReports/getCallsByCampaignsReport.do | Get Calls By Campaigns Report
[**callTrackingReportsgetCallsByContractsReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbycontractsreportdo) | **GET** /callTrackingReports/getCallsByContractsReport.do | Get Calls By Contracts Report
[**callTrackingReportsgetCallsByOffersReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbyoffersreportdo) | **GET** /callTrackingReports/getCallsByOffersReport.do | Get Calls By Offers Report
[**callTrackingReportsgetCallsBySubAffiliatesReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbysubaffiliatesreportdo) | **GET** /callTrackingReports/getCallsBySubAffiliatesReport.do | Get Calls By Sub Affiliates Report
[**callTrackingReportsgetCallsByVerticalsReportdo**](CalltrackingreportsApi.md#calltrackingreportsgetcallsbyverticalsreportdo) | **GET** /callTrackingReports/getCallsByVerticalsReport.do | Get Calls By Verticals Report

# **callTrackingReportsgetCallRoutingReportdo**
> callTrackingReportsgetCallRoutingReportdo($from_date, $vertical_id, $vertical_group_id, $affiliate_id, $affiliate_account_manager_id, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Call Routing Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->callTrackingReportsgetCallRoutingReportdo($from_date, $vertical_id, $vertical_group_id, $affiliate_id, $affiliate_account_manager_id, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallRoutingReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **affiliate_account_manager_id** | **int**|  | [optional]
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

# **callTrackingReportsgetCallsByAdvertisersDailyReportdo**
> callTrackingReportsgetCallsByAdvertisersDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $contract_id, $advertiser_id, $advertiser_account_manager_id)

Get Calls By Advertisers Daily Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = "month_example"; // string | 
$year = "year_example"; // string | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$contract_id = 56; // int | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 

try {
    $apiInstance->callTrackingReportsgetCallsByAdvertisersDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $contract_id, $advertiser_id, $advertiser_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
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
 **contract_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **advertiser_account_manager_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callTrackingReportsgetCallsByAdvertisersReportdo**
> callTrackingReportsgetCallsByAdvertisersReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $advertiser_account_manager_id, $to_date)

Get Calls By Advertisers Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
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
    $apiInstance->callTrackingReportsgetCallsByAdvertisersReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
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

# **callTrackingReportsgetCallsByAffiliatesDailyReportdo**
> callTrackingReportsgetCallsByAffiliatesDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id)

Get Calls By Affiliates Daily Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
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
    $apiInstance->callTrackingReportsgetCallsByAffiliatesDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

# **callTrackingReportsgetCallsByAffiliatesReportdo**
> callTrackingReportsgetCallsByAffiliatesReportdo($from_date, $vertical_id, $vertical_group_id, $affiliate_account_manager_id, $to_date)

Get Calls By Affiliates Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
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
    $apiInstance->callTrackingReportsgetCallsByAffiliatesReportdo($from_date, $vertical_id, $vertical_group_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

# **callTrackingReportsgetCallsByCampaignsReportdo**
> callTrackingReportsgetCallsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Calls By Campaigns Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
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
    $apiInstance->callTrackingReportsgetCallsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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

# **callTrackingReportsgetCallsByContractsReportdo**
> callTrackingReportsgetCallsByContractsReportdo($from_date, $vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Calls By Contracts Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
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
    $apiInstance->callTrackingReportsgetCallsByContractsReportdo($from_date, $vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
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

# **callTrackingReportsgetCallsByOffersReportdo**
> callTrackingReportsgetCallsByOffersReportdo($from_date, $vertical_id, $vertical_group_id, $payout_model, $to_date)

Get Calls By Offers Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
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
    $apiInstance->callTrackingReportsgetCallsByOffersReportdo($from_date, $vertical_id, $vertical_group_id, $payout_model, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
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

# **callTrackingReportsgetCallsBySubAffiliatesReportdo**
> callTrackingReportsgetCallsBySubAffiliatesReportdo($from_date, $vertical_id, $vertical_group_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Calls By Sub Affiliates Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->callTrackingReportsgetCallsBySubAffiliatesReportdo($from_date, $vertical_id, $vertical_group_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
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

# **callTrackingReportsgetCallsByVerticalsReportdo**
> callTrackingReportsgetCallsByVerticalsReportdo($from_date, $vertical_group_id, $to_date)

Get Calls By Verticals Report

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

$apiInstance = new LeadspediaApi\Api\CalltrackingreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_group_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->callTrackingReportsgetCallsByVerticalsReportdo($from_date, $vertical_group_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CalltrackingreportsApi->callTrackingReportsgetCallsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
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

