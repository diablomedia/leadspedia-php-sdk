# Leadspedia\CallTrackingReportsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callTrackingReportsgetCallRoutingReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallRoutingReportdo) | **GET** /callTrackingReports/getCallRoutingReport.do | Call Routing |
| [**callTrackingReportsgetCallsByAdvertisersDailyReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAdvertisersDailyReportdo) | **GET** /callTrackingReports/getCallsByAdvertisersDailyReport.do | Daily Calls by Advertisers |
| [**callTrackingReportsgetCallsByAdvertisersReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAdvertisersReportdo) | **GET** /callTrackingReports/getCallsByAdvertisersReport.do | Calls by Advertisers |
| [**callTrackingReportsgetCallsByAffiliatesDailyReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAffiliatesDailyReportdo) | **GET** /callTrackingReports/getCallsByAffiliatesDailyReport.do | Daily Calls by Affiliates |
| [**callTrackingReportsgetCallsByAffiliatesReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByAffiliatesReportdo) | **GET** /callTrackingReports/getCallsByAffiliatesReport.do | Calls by Affiliates |
| [**callTrackingReportsgetCallsByCampaignsReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByCampaignsReportdo) | **GET** /callTrackingReports/getCallsByCampaignsReport.do | Calls by Campaigns |
| [**callTrackingReportsgetCallsByContractsReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByContractsReportdo) | **GET** /callTrackingReports/getCallsByContractsReport.do | Calls by Contracts |
| [**callTrackingReportsgetCallsByOffersReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByOffersReportdo) | **GET** /callTrackingReports/getCallsByOffersReport.do | Calls by Offers |
| [**callTrackingReportsgetCallsBySubAffiliatesReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsBySubAffiliatesReportdo) | **GET** /callTrackingReports/getCallsBySubAffiliatesReport.do | Calls by Sub Affiliates |
| [**callTrackingReportsgetCallsByVerticalsReportdo()**](CallTrackingReportsApi.md#callTrackingReportsgetCallsByVerticalsReportdo) | **GET** /callTrackingReports/getCallsByVerticalsReport.do | Calls by Verticals |


## `callTrackingReportsgetCallRoutingReportdo()`

```php
callTrackingReportsgetCallRoutingReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Call Routing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallRoutingReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallRoutingReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **advertiserAccountManagerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsByAdvertisersDailyReportdo()`

```php
callTrackingReportsgetCallsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Daily Calls by Advertisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string
$year = 'year_example'; // string
$verticalID = 56; // int
$verticalGroupID = 56; // int
$contractID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |
| **year** | **string**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
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

## `callTrackingReportsgetCallsByAdvertisersReportdo()`

```php
callTrackingReportsgetCallsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Advertisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **advertiserAccountManagerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsByAffiliatesDailyReportdo()`

```php
callTrackingReportsgetCallsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Daily Calls by Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string
$year = 'year_example'; // string
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$campaignID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |
| **year** | **string**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
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

## `callTrackingReportsgetCallsByAffiliatesReportdo()`

```php
callTrackingReportsgetCallsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsByCampaignsReportdo()`

```php
callTrackingReportsgetCallsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsByContractsReportdo()`

```php
callTrackingReportsgetCallsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **advertiserAccountManagerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsByOffersReportdo()`

```php
callTrackingReportsgetCallsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsBySubAffiliatesReportdo()`

```php
callTrackingReportsgetCallsBySubAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Sub Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$campaignID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsBySubAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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

## `callTrackingReportsgetCallsByVerticalsReportdo()`

```php
callTrackingReportsgetCallsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Calls by Verticals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CallTrackingReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalGroupID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->callTrackingReportsgetCallsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingReportsApi->callTrackingReportsgetCallsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalGroupID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |

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
