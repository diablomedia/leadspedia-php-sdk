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
leadsReportsgetCampaignsLeadsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
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
$verticalGroupID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetCampaignsLeadsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetCampaignsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetCampaignsLeadsFieldsCapReportdo()`

```php
leadsReportsgetCampaignsLeadsFieldsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
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
$verticalGroupID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetCampaignsLeadsFieldsCapReportdo($verticalID, $verticalGroupID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetCampaignsLeadsFieldsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetContractsLeadsCapReportdo()`

```php
leadsReportsgetContractsLeadsCapReportdo($verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
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
$verticalGroupID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetContractsLeadsCapReportdo($verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetContractsLeadsCapReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadDistributionReportdo()`

```php
leadsReportsgetLeadDistributionReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $campaignID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$campaignID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadDistributionReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $campaignID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadDistributionReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
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

## `leadsReportsgetLeadsByAdvertisersDailyReportdo()`

```php
leadsReportsgetLeadsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID): \Leadspedia\Model\InlineResponse2001
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
$month = 'month_example'; // string
$year = 'year_example'; // string
$verticalID = 56; // int
$verticalGroupID = 56; // int
$contractID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersDailyReportdo($month, $year, $verticalID, $verticalGroupID, $contractID, $advertiserID, $advertiserAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAdvertisersDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsByAdvertisersReportdo()`

```php
leadsReportsgetLeadsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsByAdvertisersReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAdvertisersReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
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

## `leadsReportsgetLeadsByAffiliatesDailyReportdo()`

```php
leadsReportsgetLeadsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
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
$month = 'month_example'; // string
$year = 'year_example'; // string
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$campaignID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->leadsReportsgetLeadsByAffiliatesDailyReportdo($month, $year, $verticalID, $verticalGroupID, $offerID, $campaignID, $affiliateID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAffiliatesDailyReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsByAffiliatesReportdo()`

```php
leadsReportsgetLeadsByAffiliatesReportdo($fromDate, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsByAffiliatesReportdo($fromDate, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
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

## `leadsReportsgetLeadsByCampaignsReportdo()`

```php
leadsReportsgetLeadsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$offerID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsByCampaignsReportdo($fromDate, $verticalID, $verticalGroupID, $offerID, $payoutModel, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsByContractsReportdo()`

```php
leadsReportsgetLeadsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsByContractsReportdo($fromDate, $verticalID, $verticalGroupID, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByContractsReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsByOffersReportdo()`

```php
leadsReportsgetLeadsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$verticalGroupID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsByOffersReportdo($fromDate, $verticalID, $verticalGroupID, $payoutModel, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByOffersReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsBySubAffiliatesReportdo()`

```php
leadsReportsgetLeadsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$affiliateAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsBySubAffiliatesReportdo($fromDate, $campaignID, $affiliateID, $affiliateAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsBySubAffiliatesReportdo: ', $e->getMessage(), PHP_EOL;
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

## `leadsReportsgetLeadsByVerticalsReportdo()`

```php
leadsReportsgetLeadsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalGroupID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetLeadsByVerticalsReportdo($fromDate, $verticalGroupID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetLeadsByVerticalsReportdo: ', $e->getMessage(), PHP_EOL;
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
leadsReportsgetPingPostReportdo($fromDate, $advertiserID, $advertiserAccountManagerID, $toDate): \Leadspedia\Model\InlineResponse2001
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
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$advertiserID = 56; // int
$advertiserAccountManagerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->leadsReportsgetPingPostReportdo($fromDate, $advertiserID, $advertiserAccountManagerID, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsReportsApi->leadsReportsgetPingPostReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
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
