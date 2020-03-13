# Leadspedia\ReportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsgetAdvertisersReportdo**](ReportsApi.md#reportsgetAdvertisersReportdo) | **GET** /reports/getAdvertisersReport.do | Get Advertisers Report
[**reportsgetAffiliatesReportdo**](ReportsApi.md#reportsgetAffiliatesReportdo) | **GET** /reports/getAffiliatesReport.do | Get Affiliates Report
[**reportsgetCampaignsReportdo**](ReportsApi.md#reportsgetCampaignsReportdo) | **GET** /reports/getCampaignsReport.do | Get Campaigns Report
[**reportsgetOffersReportdo**](ReportsApi.md#reportsgetOffersReportdo) | **GET** /reports/getOffersReport.do | Get Offers Report
[**reportsgetVerticalsReportdo**](ReportsApi.md#reportsgetVerticalsReportdo) | **GET** /reports/getVerticalsReport.do | Get Verticals Report



## reportsgetAdvertisersReportdo

> object reportsgetAdvertisersReportdo($fromDate, $advertiserAccountManagerID, $toDate)

Get Advertisers Report

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


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->reportsgetAdvertisersReportdo($fromDate, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
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


## reportsgetAffiliatesReportdo

> object reportsgetAffiliatesReportdo($fromDate, $affiliateAccountManagerID, $toDate)

Get Affiliates Report

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


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->reportsgetAffiliatesReportdo($fromDate, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
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


## reportsgetCampaignsReportdo

> object reportsgetCampaignsReportdo($fromDate, $affiliateID, $verticalID, $toDate)

Get Campaigns Report

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


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->reportsgetCampaignsReportdo($fromDate, $affiliateID, $verticalID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
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


## reportsgetOffersReportdo

> object reportsgetOffersReportdo($fromDate, $verticalID, $toDate)

Get Offers Report

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


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->reportsgetOffersReportdo($fromDate, $verticalID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
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


## reportsgetVerticalsReportdo

> object reportsgetVerticalsReportdo($fromDate, $toDate)

Get Verticals Report

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


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->reportsgetVerticalsReportdo($fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
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

