# Leadspedia\GoalsReportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**goalsReportsgetGoalsByCampaignsReportdo**](GoalsReportsApi.md#goalsReportsgetGoalsByCampaignsReportdo) | **GET** /goalsReports/getGoalsByCampaignsReport.do | Get Goals By Campaigns Report
[**goalsReportsgetGoalsBySourceReportdo**](GoalsReportsApi.md#goalsReportsgetGoalsBySourceReportdo) | **GET** /goalsReports/getGoalsBySourceReport.do | Get Goals By Source Report
[**goalsReportsgetGoalsBySubAffiliatesReportdo**](GoalsReportsApi.md#goalsReportsgetGoalsBySubAffiliatesReportdo) | **GET** /goalsReports/getGoalsBySubAffiliatesReport.do | Get Goals By Sub Affiliates Report



## goalsReportsgetGoalsByCampaignsReportdo

> object goalsReportsgetGoalsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Goals By Campaigns Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\GoalsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$offerID = 56; // int | 
$payoutModel = 'payoutModel_example'; // string | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->goalsReportsgetGoalsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsReportsApi->goalsReportsgetGoalsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **payoutModel** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## goalsReportsgetGoalsBySourceReportdo

> object goalsReportsgetGoalsBySourceReportdo($fromDate, $offerID, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Goals By Source Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\GoalsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$offerID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->goalsReportsgetGoalsBySourceReportdo($fromDate, $offerID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsReportsApi->goalsReportsgetGoalsBySourceReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **offerID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## goalsReportsgetGoalsBySubAffiliatesReportdo

> object goalsReportsgetGoalsBySubAffiliatesReportdo($fromDate, $offerID, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Goals By Sub Affiliates Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\GoalsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$offerID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->goalsReportsgetGoalsBySubAffiliatesReportdo($fromDate, $offerID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsReportsApi->goalsReportsgetGoalsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **offerID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

