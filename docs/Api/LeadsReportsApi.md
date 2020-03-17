# Leadspedia\LeadsReportsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsReportsgetCampaignsLeadsCapReportdo**](LeadsReportsApi.md#leadsReportsgetCampaignsLeadsCapReportdo) | **GET** /leadsReports/getCampaignsLeadsCapReport.do | Get Campaigns Leads Cap Report
[**leadsReportsgetCampaignsLeadsFieldsCapReportdo**](LeadsReportsApi.md#leadsReportsgetCampaignsLeadsFieldsCapReportdo) | **GET** /leadsReports/getCampaignsLeadsFieldsCapReport.do | Get Campaigns Leads Fields Cap Report
[**leadsReportsgetContractsLeadsCapReportdo**](LeadsReportsApi.md#leadsReportsgetContractsLeadsCapReportdo) | **GET** /leadsReports/getContractsLeadsCapReport.do | Get Contracts Leads Cap Report
[**leadsReportsgetContractsLeadsFieldsCapReportdo**](LeadsReportsApi.md#leadsReportsgetContractsLeadsFieldsCapReportdo) | **GET** /leadsReports/getContractsLeadsFieldsCapReport.do | Get Contracts Leads Fields Cap Report
[**leadsReportsgetLeadDistributionReportdo**](LeadsReportsApi.md#leadsReportsgetLeadDistributionReportdo) | **GET** /leadsReports/getLeadDistributionReport.do | Get Lead Distribution Report
[**leadsReportsgetLeadsByAdvertisersDailyReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByAdvertisersDailyReportdo) | **GET** /leadsReports/getLeadsByAdvertisersDailyReport.do | Get Leads By Advertisers Daily Report
[**leadsReportsgetLeadsByAdvertisersReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByAdvertisersReportdo) | **GET** /leadsReports/getLeadsByAdvertisersReport.do | Get Leads By Advertisers Report
[**leadsReportsgetLeadsByAffiliatesDailyReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByAffiliatesDailyReportdo) | **GET** /leadsReports/getLeadsByAffiliatesDailyReport.do | Get Leads By Affiliates Daily Report
[**leadsReportsgetLeadsByAffiliatesReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByAffiliatesReportdo) | **GET** /leadsReports/getLeadsByAffiliatesReport.do | Get Leads By Affiliates Report
[**leadsReportsgetLeadsByCampaignsReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByCampaignsReportdo) | **GET** /leadsReports/getLeadsByCampaignsReport.do | Get Leads By Campaigns Report
[**leadsReportsgetLeadsByContractsReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByContractsReportdo) | **GET** /leadsReports/getLeadsByContractsReport.do | Get Leads By Contracts Report
[**leadsReportsgetLeadsByOffersReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByOffersReportdo) | **GET** /leadsReports/getLeadsByOffersReport.do | Get Leads By Offers Report
[**leadsReportsgetLeadsBySubAffiliatesReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsBySubAffiliatesReportdo) | **GET** /leadsReports/getLeadsBySubAffiliatesReport.do | Get Leads By Sub Affiliates Report
[**leadsReportsgetLeadsByVerticalsReportdo**](LeadsReportsApi.md#leadsReportsgetLeadsByVerticalsReportdo) | **GET** /leadsReports/getLeadsByVerticalsReport.do | Get Leads By Verticals Report
[**leadsReportsgetOffersLeadsCapReportdo**](LeadsReportsApi.md#leadsReportsgetOffersLeadsCapReportdo) | **GET** /leadsReports/getOffersLeadsCapReport.do | Get Offers Leads Cap Report
[**leadsReportsgetPingPostReportdo**](LeadsReportsApi.md#leadsReportsgetPingPostReportdo) | **GET** /leadsReports/getPingPostReport.do | Get Ping Post Report



## leadsReportsgetCampaignsLeadsCapReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetCampaignsLeadsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID)

Get Campaigns Leads Cap Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 

try {
    $result = $apiInstance->leadsReportsgetCampaignsLeadsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetCampaignsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetCampaignsLeadsFieldsCapReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetCampaignsLeadsFieldsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID)

Get Campaigns Leads Fields Cap Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 

try {
    $result = $apiInstance->leadsReportsgetCampaignsLeadsFieldsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetCampaignsLeadsFieldsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetContractsLeadsCapReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetContractsLeadsCapReportdo($verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID)

Get Contracts Leads Cap Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 

try {
    $result = $apiInstance->leadsReportsgetContractsLeadsCapReportdo($verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetContractsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetContractsLeadsFieldsCapReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetContractsLeadsFieldsCapReportdo($verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID)

Get Contracts Leads Fields Cap Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 

try {
    $result = $apiInstance->leadsReportsgetContractsLeadsFieldsCapReportdo($verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetContractsLeadsFieldsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadDistributionReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadDistributionReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $campaignID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Lead Distribution Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$offerID = 56; // int | 
$campaignID = 56; // int | 
$payoutModel = 'payoutModel_example'; // string | 
$affiliateID = 56; // int | 
$affiliateAccountManagerID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->leadsReportsgetLeadDistributionReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $campaignID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadDistributionReportdo: ', $e->getMessage(), PHP_EOL;
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
 **campaignID** | **int**|  | [optional]
 **payoutModel** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **affiliateAccountManagerID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByAdvertisersDailyReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID)

Get Leads By Advertisers Daily Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByAdvertisersReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Leads By Advertisers Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 
$offerID = 56; // int | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
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
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByAffiliatesDailyReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID)

Get Leads By Affiliates Daily Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByAffiliatesReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByAffiliatesReportdo($fromDate, $affiliateAccountManagerID, $toDate)

Get Leads By Affiliates Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$affiliateAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->leadsReportsgetLeadsByAffiliatesReportdo($fromDate, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByCampaignsReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Leads By Campaigns Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByContractsReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Leads By Contracts Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByOffersReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate)

Get Leads By Offers Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsBySubAffiliatesReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate)

Get Leads By Sub Affiliates Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
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
    $result = $apiInstance->leadsReportsgetLeadsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetLeadsByVerticalsReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetLeadsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate)

Get Leads By Verticals Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalGroupID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->leadsReportsgetLeadsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetOffersLeadsCapReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetOffersLeadsCapReportdo($verticalID, $verticalGroupID)

Get Offers Leads Cap Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int | 
$verticalGroupID = 56; // int | 

try {
    $result = $apiInstance->leadsReportsgetOffersLeadsCapReportdo($verticalID, $verticalGroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetOffersLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  | [optional]
 **verticalGroupID** | **int**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsReportsgetPingPostReportdo

> \Leadspedia\Model\InlineResponse200 leadsReportsgetPingPostReportdo($fromDate, $advertiserID, $advertiserAccountManagerID, $toDate)

Get Ping Post Report

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


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$advertiserID = 56; // int | 
$advertiserAccountManagerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->leadsReportsgetPingPostReportdo($fromDate, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetPingPostReportdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **advertiserID** | **int**|  | [optional]
 **advertiserAccountManagerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

