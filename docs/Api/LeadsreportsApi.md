# LeadspediaApi\LeadsreportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsReportsgetCampaignsLeadsCapReportdo**](LeadsreportsApi.md#leadsreportsgetcampaignsleadscapreportdo) | **GET** /leadsReports/getCampaignsLeadsCapReport.do | Get Campaigns Leads Cap Report
[**leadsReportsgetCampaignsLeadsFieldsCapReportdo**](LeadsreportsApi.md#leadsreportsgetcampaignsleadsfieldscapreportdo) | **GET** /leadsReports/getCampaignsLeadsFieldsCapReport.do | Get Campaigns Leads Fields Cap Report
[**leadsReportsgetContractsLeadsCapReportdo**](LeadsreportsApi.md#leadsreportsgetcontractsleadscapreportdo) | **GET** /leadsReports/getContractsLeadsCapReport.do | Get Contracts Leads Cap Report
[**leadsReportsgetContractsLeadsFieldsCapReportdo**](LeadsreportsApi.md#leadsreportsgetcontractsleadsfieldscapreportdo) | **GET** /leadsReports/getContractsLeadsFieldsCapReport.do | Get Contracts Leads Fields Cap Report
[**leadsReportsgetLeadDistributionReportdo**](LeadsreportsApi.md#leadsreportsgetleaddistributionreportdo) | **GET** /leadsReports/getLeadDistributionReport.do | Get Lead Distribution Report
[**leadsReportsgetLeadsByAdvertisersDailyReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbyadvertisersdailyreportdo) | **GET** /leadsReports/getLeadsByAdvertisersDailyReport.do | Get Leads By Advertisers Daily Report
[**leadsReportsgetLeadsByAdvertisersReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbyadvertisersreportdo) | **GET** /leadsReports/getLeadsByAdvertisersReport.do | Get Leads By Advertisers Report
[**leadsReportsgetLeadsByAffiliatesDailyReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbyaffiliatesdailyreportdo) | **GET** /leadsReports/getLeadsByAffiliatesDailyReport.do | Get Leads By Affiliates Daily Report
[**leadsReportsgetLeadsByAffiliatesReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbyaffiliatesreportdo) | **GET** /leadsReports/getLeadsByAffiliatesReport.do | Get Leads By Affiliates Report
[**leadsReportsgetLeadsByCampaignsReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbycampaignsreportdo) | **GET** /leadsReports/getLeadsByCampaignsReport.do | Get Leads By Campaigns Report
[**leadsReportsgetLeadsByContractsReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbycontractsreportdo) | **GET** /leadsReports/getLeadsByContractsReport.do | Get Leads By Contracts Report
[**leadsReportsgetLeadsByOffersReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbyoffersreportdo) | **GET** /leadsReports/getLeadsByOffersReport.do | Get Leads By Offers Report
[**leadsReportsgetLeadsBySubAffiliatesReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbysubaffiliatesreportdo) | **GET** /leadsReports/getLeadsBySubAffiliatesReport.do | Get Leads By Sub Affiliates Report
[**leadsReportsgetLeadsByVerticalsReportdo**](LeadsreportsApi.md#leadsreportsgetleadsbyverticalsreportdo) | **GET** /leadsReports/getLeadsByVerticalsReport.do | Get Leads By Verticals Report
[**leadsReportsgetOffersLeadsCapReportdo**](LeadsreportsApi.md#leadsreportsgetoffersleadscapreportdo) | **GET** /leadsReports/getOffersLeadsCapReport.do | Get Offers Leads Cap Report
[**leadsReportsgetPingPostReportdo**](LeadsreportsApi.md#leadsreportsgetpingpostreportdo) | **GET** /leadsReports/getPingPostReport.do | Get Ping Post Report

# **leadsReportsgetCampaignsLeadsCapReportdo**
> leadsReportsgetCampaignsLeadsCapReportdo($vertical_id, $vertical_group_id, $affiliate_id, $affiliate_account_manager_id)

Get Campaigns Leads Cap Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 

try {
    $apiInstance->leadsReportsgetCampaignsLeadsCapReportdo($vertical_id, $vertical_group_id, $affiliate_id, $affiliate_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetCampaignsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
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

# **leadsReportsgetCampaignsLeadsFieldsCapReportdo**
> leadsReportsgetCampaignsLeadsFieldsCapReportdo($vertical_id, $vertical_group_id, $affiliate_id, $affiliate_account_manager_id)

Get Campaigns Leads Fields Cap Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 

try {
    $apiInstance->leadsReportsgetCampaignsLeadsFieldsCapReportdo($vertical_id, $vertical_group_id, $affiliate_id, $affiliate_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetCampaignsLeadsFieldsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
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

# **leadsReportsgetContractsLeadsCapReportdo**
> leadsReportsgetContractsLeadsCapReportdo($vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id)

Get Contracts Leads Cap Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 

try {
    $apiInstance->leadsReportsgetContractsLeadsCapReportdo($vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetContractsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
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

# **leadsReportsgetContractsLeadsFieldsCapReportdo**
> leadsReportsgetContractsLeadsFieldsCapReportdo($vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id)

Get Contracts Leads Fields Cap Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 

try {
    $apiInstance->leadsReportsgetContractsLeadsFieldsCapReportdo($vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetContractsLeadsFieldsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]
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

# **leadsReportsgetLeadDistributionReportdo**
> leadsReportsgetLeadDistributionReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Lead Distribution Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 
$offer_id = 56; // int | 
$campaign_id = 56; // int | 
$payout_model = "payout_model_example"; // string | 
$affiliate_id = 56; // int | 
$affiliate_account_manager_id = 56; // int | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->leadsReportsgetLeadDistributionReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadDistributionReportdo: ', $e->getMessage(), PHP_EOL;
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
 **campaign_id** | **int**|  | [optional]
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

# **leadsReportsgetLeadsByAdvertisersDailyReportdo**
> leadsReportsgetLeadsByAdvertisersDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $contract_id, $advertiser_id, $advertiser_account_manager_id)

Get Leads By Advertisers Daily Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $apiInstance->leadsReportsgetLeadsByAdvertisersDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $contract_id, $advertiser_id, $advertiser_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsByAdvertisersReportdo**
> object leadsReportsgetLeadsByAdvertisersReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $advertiser_account_manager_id, $to_date)

Get Leads By Advertisers Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $advertiser_account_manager_id, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsReportsgetLeadsByAffiliatesDailyReportdo**
> leadsReportsgetLeadsByAffiliatesDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id)

Get Leads By Affiliates Daily Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $apiInstance->leadsReportsgetLeadsByAffiliatesDailyReportdo($month, $year, $vertical_id, $vertical_group_id, $offer_id, $campaign_id, $affiliate_id, $affiliate_account_manager_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsByAffiliatesReportdo**
> leadsReportsgetLeadsByAffiliatesReportdo($from_date, $affiliate_account_manager_id, $to_date)

Get Leads By Affiliates Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$affiliate_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->leadsReportsgetLeadsByAffiliatesReportdo($from_date, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsByCampaignsReportdo**
> leadsReportsgetLeadsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Leads By Campaigns Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $apiInstance->leadsReportsgetLeadsByCampaignsReportdo($from_date, $vertical_id, $vertical_group_id, $offer_id, $payout_model, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsByContractsReportdo**
> leadsReportsgetLeadsByContractsReportdo($from_date, $vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Leads By Contracts Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $apiInstance->leadsReportsgetLeadsByContractsReportdo($from_date, $vertical_id, $vertical_group_id, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsByOffersReportdo**
> leadsReportsgetLeadsByOffersReportdo($from_date, $vertical_id, $vertical_group_id, $payout_model, $to_date)

Get Leads By Offers Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $apiInstance->leadsReportsgetLeadsByOffersReportdo($from_date, $vertical_id, $vertical_group_id, $payout_model, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsBySubAffiliatesReportdo**
> leadsReportsgetLeadsBySubAffiliatesReportdo($from_date, $campaign_id, $affiliate_id, $affiliate_account_manager_id, $to_date)

Get Leads By Sub Affiliates Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
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
    $apiInstance->leadsReportsgetLeadsBySubAffiliatesReportdo($from_date, $campaign_id, $affiliate_id, $affiliate_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetLeadsByVerticalsReportdo**
> leadsReportsgetLeadsByVerticalsReportdo($from_date, $vertical_group_id, $to_date)

Get Leads By Verticals Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_group_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->leadsReportsgetLeadsByVerticalsReportdo($from_date, $vertical_group_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetLeadsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
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

# **leadsReportsgetOffersLeadsCapReportdo**
> leadsReportsgetOffersLeadsCapReportdo($vertical_id, $vertical_group_id)

Get Offers Leads Cap Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vertical_id = 56; // int | 
$vertical_group_id = 56; // int | 

try {
    $apiInstance->leadsReportsgetOffersLeadsCapReportdo($vertical_id, $vertical_group_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetOffersLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vertical_id** | **int**|  | [optional]
 **vertical_group_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsReportsgetPingPostReportdo**
> leadsReportsgetPingPostReportdo($from_date, $advertiser_id, $advertiser_account_manager_id, $to_date)

Get Ping Post Report

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

$apiInstance = new LeadspediaApi\Api\LeadsreportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$advertiser_id = 56; // int | 
$advertiser_account_manager_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->leadsReportsgetPingPostReportdo($from_date, $advertiser_id, $advertiser_account_manager_id, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling LeadsreportsApi->leadsReportsgetPingPostReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
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

