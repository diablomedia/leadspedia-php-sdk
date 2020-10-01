# Leadspedia\CallTrackingReportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callTrackingReportsgetCallRoutingReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallRoutingReportdo) | **GET** /callTrackingReports/getCallRoutingReport.do | Get Call Routing Report
[**callTrackingReportsgetCallsByAdvertisersDailyReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAdvertisersDailyReportdo) | **GET** /callTrackingReports/getCallsByAdvertisersDailyReport.do | Get Calls By Advertisers Daily Report
[**callTrackingReportsgetCallsByAdvertisersReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAdvertisersReportdo) | **GET** /callTrackingReports/getCallsByAdvertisersReport.do | Get Calls By Advertisers Report
[**callTrackingReportsgetCallsByAffiliatesDailyReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAffiliatesDailyReportdo) | **GET** /callTrackingReports/getCallsByAffiliatesDailyReport.do | Get Calls By Affiliates Daily Report
[**callTrackingReportsgetCallsByAffiliatesReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAffiliatesReportdo) | **GET** /callTrackingReports/getCallsByAffiliatesReport.do | Get Calls By Affiliates Report
[**callTrackingReportsgetCallsByCampaignsReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByCampaignsReportdo) | **GET** /callTrackingReports/getCallsByCampaignsReport.do | Get Calls By Campaigns Report
[**callTrackingReportsgetCallsByContractsReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByContractsReportdo) | **GET** /callTrackingReports/getCallsByContractsReport.do | Get Calls By Contracts Report
[**callTrackingReportsgetCallsByOffersReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByOffersReportdo) | **GET** /callTrackingReports/getCallsByOffersReport.do | Get Calls By Offers Report
[**callTrackingReportsgetCallsBySubAffiliatesReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsBySubAffiliatesReportdo) | **GET** /callTrackingReports/getCallsBySubAffiliatesReport.do | Get Calls By Sub Affiliates Report
[**callTrackingReportsgetCallsByVerticalsReportdo**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByVerticalsReportdo) | **GET** /callTrackingReports/getCallsByVerticalsReport.do | Get Calls By Verticals Report



## callTrackingReportsgetCallRoutingReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallRoutingReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Call Routing Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallRoutingReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallRoutingReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByAdvertisersDailyReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID)

Get Calls By Advertisers Daily Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string | 
$year = 'year_example'; // string | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$contractID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**|  |
 **year** | **string**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByAdvertisersReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate)

Get Calls By Advertisers Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$offerID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
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
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByAffiliatesDailyReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID)

Get Calls By Affiliates Daily Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string | 
$year = 'year_example'; // string | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$offerID = 56; // int | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**|  |
 **year** | **string**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByAffiliatesReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate)

Get Calls By Affiliates Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByCampaignsReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Calls By Campaigns Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
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
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByContractsReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Calls By Contracts Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByOffersReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate)

Get Calls By Offers Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$payoutModel = 'payoutModel_example'; // string | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **payoutModel** | **string**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsBySubAffiliatesReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsBySubAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Calls By Sub Affiliates Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsBySubAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## callTrackingReportsgetCallsByVerticalsReportdo

> \Leadspedia\Model\InlineResponse2001 callTrackingReportsgetCallsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate)

Get Calls By Verticals Report

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


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalGroupID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->callTrackingReportsgetCallsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalGroupID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

