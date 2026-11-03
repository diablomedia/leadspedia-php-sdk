# Leadspedia\LeadsReportsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**leadsReportsgetCampaignsLeadsCapReportdo()**](LeadsReportsApi.md#leadsReportsgetCampaignsLeadsCapReportdo) | **GET** /leadsReports/getCampaignsLeadsCapReport.do | Leads Caps by Campaigns |
| [**leadsReportsgetCampaignsLeadsFieldsCapReportdo()**](LeadsReportsApi.md#leadsReportsgetCampaignsLeadsFieldsCapReportdo) | **GET** /leadsReports/getCampaignsLeadsFieldsCapReport.do | Leads Fields Caps by Campaigns |
| [**leadsReportsgetContractsLeadsCapReportdo()**](LeadsReportsApi.md#leadsReportsgetContractsLeadsCapReportdo) | **GET** /leadsReports/getContractsLeadsCapReport.do | Leads Caps by Contracts |
| [**leadsReportsgetLeadDistributionReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadDistributionReportdo) | **GET** /leadsReports/getLeadDistributionReport.do | Lead Distribution |
| [**leadsReportsgetLeadsByAdvertisersDailyReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByAdvertisersDailyReportdo) | **GET** /leadsReports/getLeadsByAdvertisersDailyReport.do | Daily Leads by Advertisers |
| [**leadsReportsgetLeadsByAdvertisersReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByAdvertisersReportdo) | **GET** /leadsReports/getLeadsByAdvertisersReport.do | Leads by Advertisers |
| [**leadsReportsgetLeadsByAffiliatesDailyReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByAffiliatesDailyReportdo) | **GET** /leadsReports/getLeadsByAffiliatesDailyReport.do | Daily Leads by Affiliates |
| [**leadsReportsgetLeadsByAffiliatesReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByAffiliatesReportdo) | **GET** /leadsReports/getLeadsByAffiliatesReport.do | Leads by Affiliates |
| [**leadsReportsgetLeadsByCampaignsReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByCampaignsReportdo) | **GET** /leadsReports/getLeadsByCampaignsReport.do | Leads by Campaigns |
| [**leadsReportsgetLeadsByContractsReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByContractsReportdo) | **GET** /leadsReports/getLeadsByContractsReport.do | Leads by Contracts |
| [**leadsReportsgetLeadsByOffersReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByOffersReportdo) | **GET** /leadsReports/getLeadsByOffersReport.do | Leads by Offers |
| [**leadsReportsgetLeadsBySubAffiliatesReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsBySubAffiliatesReportdo) | **GET** /leadsReports/getLeadsBySubAffiliatesReport.do | Leads by Sub Affiliates |
| [**leadsReportsgetLeadsByVerticalsReportdo()**](LeadsReportsApi.md#leadsReportsgetLeadsByVerticalsReportdo) | **GET** /leadsReports/getLeadsByVerticalsReport.do | Leads by Verticals |
| [**leadsReportsgetOffersLeadsCapReportdo()**](LeadsReportsApi.md#leadsReportsgetOffersLeadsCapReportdo) | **GET** /leadsReports/getOffersLeadsCapReport.do | Leads Caps by Offers |
| [**leadsReportsgetPingPostReportdo()**](LeadsReportsApi.md#leadsReportsgetPingPostReportdo) | **GET** /leadsReports/getPingPostReport.do | Ping Post |


## `leadsReportsgetCampaignsLeadsCapReportdo()`

```php
leadsReportsgetCampaignsLeadsCapReportdo($verticalID, $affiliateID, $verticalGroupID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads Caps by Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$affiliateID = 56; // int
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetCampaignsLeadsCapReportdo($verticalID, $affiliateID, $verticalGroupID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetCampaignsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetCampaignsLeadsFieldsCapReportdo()`

```php
leadsReportsgetCampaignsLeadsFieldsCapReportdo($verticalID, $affiliateID, $verticalGroupID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads Fields Caps by Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$affiliateID = 56; // int
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetCampaignsLeadsFieldsCapReportdo($verticalID, $affiliateID, $verticalGroupID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetCampaignsLeadsFieldsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetContractsLeadsCapReportdo()`

```php
leadsReportsgetContractsLeadsCapReportdo($verticalID, $advertiserID, $verticalGroupID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads Caps by Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$advertiserID = 56; // int
$verticalGroupID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetContractsLeadsCapReportdo($verticalID, $advertiserID, $verticalGroupID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetContractsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadDistributionReportdo()`

```php
leadsReportsgetLeadDistributionReportdo($fromDate, $toDate, $verticalID, $affiliateID, $campaignID, $advertiserID, $offerID, $payoutModel, $verticalGroupID, $affiliateAccountManagerID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Lead Distribution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$offerID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadDistributionReportdo($fromDate, $toDate, $verticalID, $affiliateID, $campaignID, $advertiserID, $offerID, $payoutModel, $verticalGroupID, $affiliateAccountManagerID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadDistributionReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByAdvertisersDailyReportdo()`

```php
leadsReportsgetLeadsByAdvertisersDailyReportdo($year, $month, $verticalID, $advertiserID, $contractID, $verticalGroupID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Daily Leads by Advertisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 'year_example'; // string
$month = 'month_example'; // string
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$verticalGroupID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersDailyReportdo($year, $month, $verticalID, $advertiserID, $contractID, $verticalGroupID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **string**|  | |
| **month** | **string**|  | |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByAdvertisersReportdo()`

```php
leadsReportsgetLeadsByAdvertisersReportdo($fromDate, $toDate, $verticalID, $advertiserID, $offerID, $verticalGroupID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads by Advertisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$advertiserID = 56; // int
$offerID = 56; // int
$verticalGroupID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersReportdo($fromDate, $toDate, $verticalID, $advertiserID, $offerID, $verticalGroupID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByAffiliatesDailyReportdo()`

```php
leadsReportsgetLeadsByAffiliatesDailyReportdo($year, $month, $verticalID, $affiliateID, $campaignID, $offerID, $verticalGroupID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Daily Leads by Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 'year_example'; // string
$month = 'month_example'; // string
$verticalID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$offerID = 56; // int
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByAffiliatesDailyReportdo($year, $month, $verticalID, $affiliateID, $campaignID, $offerID, $verticalGroupID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **string**|  | |
| **month** | **string**|  | |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByAffiliatesReportdo()`

```php
leadsReportsgetLeadsByAffiliatesReportdo($fromDate, $toDate, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads by Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByAffiliatesReportdo($fromDate, $toDate, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsByCampaignsReportdo()`

```php
leadsReportsgetLeadsByCampaignsReportdo($fromDate, $toDate, $verticalID, $affiliateID, $offerID, $payoutModel, $verticalGroupID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads by Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$affiliateID = 56; // int
$offerID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByCampaignsReportdo($fromDate, $toDate, $verticalID, $affiliateID, $offerID, $payoutModel, $verticalGroupID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByContractsReportdo()`

```php
leadsReportsgetLeadsByContractsReportdo($fromDate, $toDate, $verticalID, $advertiserID, $verticalGroupID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads by Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$advertiserID = 56; // int
$verticalGroupID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByContractsReportdo($fromDate, $toDate, $verticalID, $advertiserID, $verticalGroupID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByOffersReportdo()`

```php
leadsReportsgetLeadsByOffersReportdo($fromDate, $toDate, $verticalID, $payoutModel, $verticalGroupID): \Leadspedia\Model\InlineResponse2001
```

Leads by Offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$verticalGroupID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByOffersReportdo($fromDate, $toDate, $verticalID, $payoutModel, $verticalGroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |

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

## `leadsReportsgetLeadsBySubAffiliatesReportdo()`

```php
leadsReportsgetLeadsBySubAffiliatesReportdo($fromDate, $toDate, $affiliateID, $campaignID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Leads by Sub Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$affiliateID = 56; // int
$campaignID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsBySubAffiliatesReportdo($fromDate, $toDate, $affiliateID, $campaignID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByVerticalsReportdo()`

```php
leadsReportsgetLeadsByVerticalsReportdo($fromDate, $toDate, $verticalGroupID): \Leadspedia\Model\InlineResponse2001
```

Leads by Verticals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalGroupID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByVerticalsReportdo($fromDate, $toDate, $verticalGroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |

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

## `leadsReportsgetOffersLeadsCapReportdo()`

```php
leadsReportsgetOffersLeadsCapReportdo($verticalID, $verticalGroupID): \Leadspedia\Model\InlineResponse2001
```

Leads Caps by Offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$verticalGroupID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetOffersLeadsCapReportdo($verticalID, $verticalGroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetOffersLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |

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

## `leadsReportsgetPingPostReportdo()`

```php
leadsReportsgetPingPostReportdo($fromDate, $toDate, $advertiserID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Ping Post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetPingPostReportdo($fromDate, $toDate, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetPingPostReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
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
