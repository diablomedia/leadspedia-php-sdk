# Leadspedia\ReportsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportsgetAdvertisersReportdo()**](ReportsApi.md#reportsgetAdvertisersReportdo) | **GET** /reports/getAdvertisersReport.do | Advertisers |
| [**reportsgetAffiliatesReportdo()**](ReportsApi.md#reportsgetAffiliatesReportdo) | **GET** /reports/getAffiliatesReport.do | Affiliates |
| [**reportsgetCampaignsReportdo()**](ReportsApi.md#reportsgetCampaignsReportdo) | **GET** /reports/getCampaignsReport.do | Campaigns |
| [**reportsgetContractsReportdo()**](ReportsApi.md#reportsgetContractsReportdo) | **GET** /reports/getContractsReport.do | Contracts |
| [**reportsgetOffersReportdo()**](ReportsApi.md#reportsgetOffersReportdo) | **GET** /reports/getOffersReport.do | Offers |
| [**reportsgetVerticalsReportdo()**](ReportsApi.md#reportsgetVerticalsReportdo) | **GET** /reports/getVerticalsReport.do | Verticals |


## `reportsgetAdvertisersReportdo()`

```php
reportsgetAdvertisersReportdo($fromDate, $toDate, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Advertisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->reportsgetAdvertisersReportdo($fromDate, $toDate, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **advertiserAccountManagerID** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsgetAffiliatesReportdo()`

```php
reportsgetAffiliatesReportdo($fromDate, $toDate, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->reportsgetAffiliatesReportdo($fromDate, $toDate, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsgetCampaignsReportdo()`

```php
reportsgetCampaignsReportdo($fromDate, $toDate, $verticalID, $affiliateID): \Leadspedia\Model\InlineResponse2001
```

Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$affiliateID = 56; // int

try {
    $result = $apiInstance->reportsgetCampaignsReportdo($fromDate, $toDate, $verticalID, $affiliateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsgetContractsReportdo()`

```php
reportsgetContractsReportdo($fromDate, $toDate, $verticalID, $advertiserID, $contractID): \Leadspedia\Model\InlineResponse2001
```

Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int

try {
    $result = $apiInstance->reportsgetContractsReportdo($fromDate, $toDate, $verticalID, $advertiserID, $contractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetContractsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsgetOffersReportdo()`

```php
reportsgetOffersReportdo($fromDate, $toDate, $verticalID): \Leadspedia\Model\InlineResponse2001
```

Offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int

try {
    $result = $apiInstance->reportsgetOffersReportdo($fromDate, $toDate, $verticalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsgetVerticalsReportdo()`

```php
reportsgetVerticalsReportdo($fromDate, $toDate): \Leadspedia\Model\InlineResponse2001
```

Verticals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string

try {
    $result = $apiInstance->reportsgetVerticalsReportdo($fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsgetVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
