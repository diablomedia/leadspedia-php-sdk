# LeadspediaApi\GoalsreportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**goalsReportsgetGoalsByCampaignsReportdo**](GoalsreportsApi.md#goalsreportsgetgoalsbycampaignsreportdo) | **GET** /goalsReports/getGoalsByCampaignsReport.do | Get Goals By Campaigns Report
[**goalsReportsgetGoalsBySourceReportdo**](GoalsreportsApi.md#goalsreportsgetgoalsbysourcereportdo) | **GET** /goalsReports/getGoalsBySourceReport.do | Get Goals By Source Report
[**goalsReportsgetGoalsBySubAffiliatesReportdo**](GoalsreportsApi.md#goalsreportsgetgoalsbysubaffiliatesreportdo) | **GET** /goalsReports/getGoalsBySubAffiliatesReport.do | Get Goals By Sub Affiliates Report

# **goalsReportsgetGoalsByCampaignsReportdo**
> goalsReportsgetGoalsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Goals By Campaigns Report

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

$apiInstance = new LeadspediaApi\Api\GoalsreportsApi(
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
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->goalsReportsgetGoalsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling GoalsreportsApi->goalsReportsgetGoalsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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

# **goalsReportsgetGoalsBySourceReportdo**
> goalsReportsgetGoalsBySourceReportdo($from_date, $offer_id, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Goals By Source Report

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

$apiInstance = new LeadspediaApi\Api\GoalsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$offer_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->goalsReportsgetGoalsBySourceReportdo($from_date, $offer_id, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling GoalsreportsApi->goalsReportsgetGoalsBySourceReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **offer_id** | **int**|  | [optional]
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

# **goalsReportsgetGoalsBySubAffiliatesReportdo**
> goalsReportsgetGoalsBySubAffiliatesReportdo($from_date, $offer_id, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Goals By Sub Affiliates Report

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

$apiInstance = new LeadspediaApi\Api\GoalsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$offer_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->goalsReportsgetGoalsBySubAffiliatesReportdo($from_date, $offer_id, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling GoalsreportsApi->goalsReportsgetGoalsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **offer_id** | **int**|  | [optional]
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

