# Leadspedia\ConversionsReportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionsReportsgetConversionsByAdvertisersReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsByAdvertisersReportdo) | **GET** /conversionsReports/getConversionsByAdvertisersReport.do | Get Conversions By Advertisers Report
[**conversionsReportsgetConversionsByAffiliatesReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsByAffiliatesReportdo) | **GET** /conversionsReports/getConversionsByAffiliatesReport.do | Get Conversions By Affiliates Report
[**conversionsReportsgetConversionsByCampaignsReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsByCampaignsReportdo) | **GET** /conversionsReports/getConversionsByCampaignsReport.do | Get Conversions By Campaigns Report
[**conversionsReportsgetConversionsByOffersReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsByOffersReportdo) | **GET** /conversionsReports/getConversionsByOffersReport.do | Get Conversions By Offers Report
[**conversionsReportsgetConversionsBySourceReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsBySourceReportdo) | **GET** /conversionsReports/getConversionsBySourceReport.do | Get Conversions By Source Report
[**conversionsReportsgetConversionsBySubAffiliatesReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsBySubAffiliatesReportdo) | **GET** /conversionsReports/getConversionsBySubAffiliatesReport.do | Get Conversions By Sub Affiliates Report
[**conversionsReportsgetConversionsByVerticalsReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsByVerticalsReportdo) | **GET** /conversionsReports/getConversionsByVerticalsReport.do | Get Conversions By Verticals Report
[**conversionsReportsgetConversionsDailyReportdo**](ConversionsReportsApi.md#conversionsReportsgetConversionsDailyReportdo) | **GET** /conversionsReports/getConversionsDailyReport.do | Get Conversions Daily Report



## conversionsReportsgetConversionsByAdvertisersReportdo

> object conversionsReportsgetConversionsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate)

Get Conversions By Advertisers Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsByAffiliatesReportdo

> object conversionsReportsgetConversionsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate)

Get Conversions By Affiliates Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsByCampaignsReportdo

> object conversionsReportsgetConversionsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Conversions By Campaigns Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsByOffersReportdo

> object conversionsReportsgetConversionsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate)

Get Conversions By Offers Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsBySourceReportdo

> object conversionsReportsgetConversionsBySourceReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Conversions By Source Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsBySourceReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsBySourceReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsBySubAffiliatesReportdo

> object conversionsReportsgetConversionsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Conversions By Sub Affiliates Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->conversionsReportsgetConversionsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsByVerticalsReportdo

> object conversionsReportsgetConversionsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate)

Get Conversions By Verticals Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalGroupID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->conversionsReportsgetConversionsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionsReportsgetConversionsDailyReportdo

> object conversionsReportsgetConversionsDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID)

Get Conversions Daily Report

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


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

