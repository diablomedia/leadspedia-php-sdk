# Leadspedia\ConversionsReportsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**conversionsReportsgetConversionsByAdvertisersReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsByAdvertisersReportdo) | **GET** /conversionsReports/getConversionsByAdvertisersReport.do | Conversions by Advertisers |
| [**conversionsReportsgetConversionsByAffiliatesReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsByAffiliatesReportdo) | **GET** /conversionsReports/getConversionsByAffiliatesReport.do | Conversions by Affiliates |
| [**conversionsReportsgetConversionsByCampaignsReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsByCampaignsReportdo) | **GET** /conversionsReports/getConversionsByCampaignsReport.do | Conversions by Campaigns |
| [**conversionsReportsgetConversionsByOffersReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsByOffersReportdo) | **GET** /conversionsReports/getConversionsByOffersReport.do | Conversions by Offers |
| [**conversionsReportsgetConversionsBySourceReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsBySourceReportdo) | **GET** /conversionsReports/getConversionsBySourceReport.do | Conversions by Source |
| [**conversionsReportsgetConversionsBySubAffiliatesReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsBySubAffiliatesReportdo) | **GET** /conversionsReports/getConversionsBySubAffiliatesReport.do | Conversions by Sub Affiliates |
| [**conversionsReportsgetConversionsByVerticalsReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsByVerticalsReportdo) | **GET** /conversionsReports/getConversionsByVerticalsReport.do | Conversions by Verticals |
| [**conversionsReportsgetConversionsDailyReportdo()**](ConversionsReportsApi.md#conversionsReportsgetConversionsDailyReportdo) | **GET** /conversionsReports/getConversionsDailyReport.do | Daily Conversions |


## `conversionsReportsgetConversionsByAdvertisersReportdo()`

```php
conversionsReportsgetConversionsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Advertisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
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

## `conversionsReportsgetConversionsByAffiliatesReportdo()`

```php
conversionsReportsgetConversionsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByAffiliatesReportdo($fromDate, $verticalID, $verticalGroupID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

## `conversionsReportsgetConversionsByCampaignsReportdo()`

```php
conversionsReportsgetConversionsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$payoutModel = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->conversionsReportsgetConversionsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **payoutModel** | **int**|  | [optional] |
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

## `conversionsReportsgetConversionsByOffersReportdo()`

```php
conversionsReportsgetConversionsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
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

## `conversionsReportsgetConversionsBySourceReportdo()`

```php
conversionsReportsgetConversionsBySourceReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsBySourceReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsBySourceReportdo: ', $e->getMessage(), PHP_EOL;
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

## `conversionsReportsgetConversionsBySubAffiliatesReportdo()`

```php
conversionsReportsgetConversionsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Sub Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->conversionsReportsgetConversionsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
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

## `conversionsReportsgetConversionsByVerticalsReportdo()`

```php
conversionsReportsgetConversionsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate): \Leadspedia\Model\InlineResponse2001
```

Conversions by Verticals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalGroupID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->conversionsReportsgetConversionsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
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

## `conversionsReportsgetConversionsDailyReportdo()`

```php
conversionsReportsgetConversionsDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Daily Conversions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsReportsApi(
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
    $result = $apiInstance->conversionsReportsgetConversionsDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsReportsApi->conversionsReportsgetConversionsDailyReportdo: ', $e->getMessage(), PHP_EOL;
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
