# Leadspedia\AdvertisersApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**advertisersadjustCreditdo()**](AdvertisersApi.md#advertisersadjustCreditdo) | **POST** /advertisers/adjustCredit.do | Adjust Credit |
| [**advertiserschangeStatusdo()**](AdvertisersApi.md#advertiserschangeStatusdo) | **POST** /advertisers/changeStatus.do | Change Status |
| [**advertiserscreatedo()**](AdvertisersApi.md#advertiserscreatedo) | **POST** /advertisers/create.do | Create |
| [**advertisersdeletedo()**](AdvertisersApi.md#advertisersdeletedo) | **POST** /advertisers/delete.do | Delete |
| [**advertisersenableCreditdo()**](AdvertisersApi.md#advertisersenableCreditdo) | **POST** /advertisers/enableCredit.do | Enable Credit |
| [**advertisersgenerateInvoicesdo()**](AdvertisersApi.md#advertisersgenerateInvoicesdo) | **POST** /advertisers/generateInvoices.do | Generate Invoices |
| [**advertisersgetAlldo()**](AdvertisersApi.md#advertisersgetAlldo) | **GET** /advertisers/getAll.do | Get All |
| [**advertisersgetCreditHistorydo()**](AdvertisersApi.md#advertisersgetCreditHistorydo) | **GET** /advertisers/getCreditHistory.do | Get Credit History |
| [**advertisersgetInfodo()**](AdvertisersApi.md#advertisersgetInfodo) | **GET** /advertisers/getInfo.do | Get |
| [**advertiserssearchdo()**](AdvertisersApi.md#advertiserssearchdo) | **GET** /advertisers/search.do | Search |
| [**advertisersupdateAuthorizeNetCustomerProfileIDdo()**](AdvertisersApi.md#advertisersupdateAuthorizeNetCustomerProfileIDdo) | **POST** /advertisers/updateAuthorizeNetCustomerProfileID.do | Update Authorize Net Customer Profile ID |
| [**advertisersupdateAutoRechargeSettingsdo()**](AdvertisersApi.md#advertisersupdateAutoRechargeSettingsdo) | **POST** /advertisers/updateAutoRechargeSettings.do | Update Auto Recharge Settings |
| [**advertisersupdateBillingdo()**](AdvertisersApi.md#advertisersupdateBillingdo) | **POST** /advertisers/updateBilling.do | Update Billing |
| [**advertisersupdateInfodo()**](AdvertisersApi.md#advertisersupdateInfodo) | **POST** /advertisers/updateInfo.do | Update |
| [**advertisersupdateLeadsCapsdo()**](AdvertisersApi.md#advertisersupdateLeadsCapsdo) | **POST** /advertisers/updateLeadsCaps.do | Update Leads Caps |
| [**advertisersupdateLeadsDailyCapdo()**](AdvertisersApi.md#advertisersupdateLeadsDailyCapdo) | **POST** /advertisers/updateLeadsDailyCap.do | Update Leads Daily Cap |
| [**advertisersupdateLeadsDailyRevenueCapdo()**](AdvertisersApi.md#advertisersupdateLeadsDailyRevenueCapdo) | **POST** /advertisers/updateLeadsDailyRevenueCap.do | Update Leads Daily Revenue Caps |
| [**advertisersupdateLeadsMonthlyCapdo()**](AdvertisersApi.md#advertisersupdateLeadsMonthlyCapdo) | **POST** /advertisers/updateLeadsMonthlyCap.do | Update Leads Monthly Cap |
| [**advertisersupdateLeadsMonthlyRevenueCapdo()**](AdvertisersApi.md#advertisersupdateLeadsMonthlyRevenueCapdo) | **POST** /advertisers/updateLeadsMonthlyRevenueCap.do | Update Leads Monthly Revenue Caps |
| [**advertisersupdateLeadsRevenueCapsdo()**](AdvertisersApi.md#advertisersupdateLeadsRevenueCapsdo) | **POST** /advertisers/updateLeadsRevenueCaps.do | Update Leads Revenue Caps |
| [**advertisersupdateLeadsWeeklyCapdo()**](AdvertisersApi.md#advertisersupdateLeadsWeeklyCapdo) | **POST** /advertisers/updateLeadsWeeklyCap.do | Update Leads Weekly Cap |
| [**advertisersupdateLeadsWeeklyRevenueCapdo()**](AdvertisersApi.md#advertisersupdateLeadsWeeklyRevenueCapdo) | **POST** /advertisers/updateLeadsWeeklyRevenueCap.do | Update Leads Weekly Revenue Cap |
| [**advertisersupdatePortalSettingsdo()**](AdvertisersApi.md#advertisersupdatePortalSettingsdo) | **POST** /advertisers/updatePortalSettings.do | Update Portal Settings |


## `advertisersadjustCreditdo()`

```php
advertisersadjustCreditdo($advertiserID, $type, $amount, $charge, $transactionFee, $transactionFeeAmount, $transactionFeePercentage, $generateInvoice, $note): \Leadspedia\Model\InlineResponse200
```

Adjust Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$type = 'type_example'; // string
$amount = 56; // int
$charge = 'No'; // string | If Yes, the default credit card of the advertiser will be charged
$transactionFee = 'transactionFee_example'; // string
$transactionFeeAmount = 56; // int
$transactionFeePercentage = 56; // int
$generateInvoice = 'No'; // string | If Yes and the type is Credit, an invoice will be generated
$note = 'note_example'; // string

try {
    $result = $apiInstance->advertisersadjustCreditdo($advertiserID, $type, $amount, $charge, $transactionFee, $transactionFeeAmount, $transactionFeePercentage, $generateInvoice, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersadjustCreditdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **type** | **string**|  | |
| **amount** | **int**|  | |
| **charge** | **string**| If Yes, the default credit card of the advertiser will be charged | [optional] [default to &#39;No&#39;] |
| **transactionFee** | **string**|  | [optional] |
| **transactionFeeAmount** | **int**|  | [optional] |
| **transactionFeePercentage** | **int**|  | [optional] |
| **generateInvoice** | **string**| If Yes and the type is Credit, an invoice will be generated | [optional] [default to &#39;No&#39;] |
| **note** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertiserschangeStatusdo()`

```php
advertiserschangeStatusdo($advertiserID, $status): \Leadspedia\Model\InlineResponse200
```

Change Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->advertiserschangeStatusdo($advertiserID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **status** | **string**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertiserscreatedo()`

```php
advertiserscreatedo($advertiserName, $accountManagerID, $status): \Leadspedia\Model\InlineResponse200
```

Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserName = 'advertiserName_example'; // string
$accountManagerID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->advertiserscreatedo($advertiserName, $accountManagerID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserscreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserName** | **string**|  | |
| **accountManagerID** | **int**|  | |
| **status** | **string**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersdeletedo()`

```php
advertisersdeletedo($advertiserID): \Leadspedia\Model\InlineResponse200
```

Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int

try {
    $result = $apiInstance->advertisersdeletedo($advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersenableCreditdo()`

```php
advertisersenableCreditdo($advertiserID): \Leadspedia\Model\InlineResponse200
```

Enable Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int

try {
    $result = $apiInstance->advertisersenableCreditdo($advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersenableCreditdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersgenerateInvoicesdo()`

```php
advertisersgenerateInvoicesdo($advertiserID, $startDate, $endDate, $autoCalculateItems, $approveInvoice, $forceBilling, $forceGenerate, $internalNote, $externalNote): \Leadspedia\Model\InlineResponse200
```

Generate Invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$startDate = 'startDate_example'; // string
$endDate = 'endDate_example'; // string
$autoCalculateItems = 'autoCalculateItems_example'; // string
$approveInvoice = 'approveInvoice_example'; // string
$forceBilling = 'forceBilling_example'; // string
$forceGenerate = 'forceGenerate_example'; // string
$internalNote = 'internalNote_example'; // string
$externalNote = 'externalNote_example'; // string

try {
    $result = $apiInstance->advertisersgenerateInvoicesdo($advertiserID, $startDate, $endDate, $autoCalculateItems, $approveInvoice, $forceBilling, $forceGenerate, $internalNote, $externalNote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgenerateInvoicesdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **startDate** | **string**|  | |
| **endDate** | **string**|  | |
| **autoCalculateItems** | **string**|  | [optional] |
| **approveInvoice** | **string**|  | [optional] |
| **forceBilling** | **string**|  | [optional] |
| **forceGenerate** | **string**|  | [optional] |
| **internalNote** | **string**|  | [optional] |
| **externalNote** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersgetAlldo()`

```php
advertisersgetAlldo($search, $status, $advertiserID, $accountManagerID, $advertiserType, $isCreditEnabled, $hasCreditCardOnFile, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$status = 'status_example'; // string
$advertiserID = 56; // int
$accountManagerID = 56; // int
$advertiserType = 'advertiserType_example'; // string
$isCreditEnabled = 'isCreditEnabled_example'; // string
$hasCreditCardOnFile = 'hasCreditCardOnFile_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return.

try {
    $result = $apiInstance->advertisersgetAlldo($search, $status, $advertiserID, $accountManagerID, $advertiserType, $isCreditEnabled, $hasCreditCardOnFile, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **accountManagerID** | **int**|  | [optional] |
| **advertiserType** | **string**|  | [optional] |
| **isCreditEnabled** | **string**|  | [optional] |
| **hasCreditCardOnFile** | **string**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. | [optional] [default to 100] |

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

## `advertisersgetCreditHistorydo()`

```php
advertisersgetCreditHistorydo($advertiserID, $fromDate, $toDate, $disposition, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Credit History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$disposition = 'disposition_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->advertisersgetCreditHistorydo($advertiserID, $fromDate, $toDate, $disposition, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetCreditHistorydo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **disposition** | **string**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

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

## `advertisersgetInfodo()`

```php
advertisersgetInfodo($advertiserID): \Leadspedia\Model\InlineResponse2001
```

Get

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int

try {
    $result = $apiInstance->advertisersgetInfodo($advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |

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

## `advertiserssearchdo()`

```php
advertiserssearchdo($search, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->advertiserssearchdo($search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserssearchdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

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

## `advertisersupdateAuthorizeNetCustomerProfileIDdo()`

```php
advertisersupdateAuthorizeNetCustomerProfileIDdo($advertiserID, $authNetCustomerProfileID): \Leadspedia\Model\InlineResponse200
```

Update Authorize Net Customer Profile ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$authNetCustomerProfileID = 'authNetCustomerProfileID_example'; // string

try {
    $result = $apiInstance->advertisersupdateAuthorizeNetCustomerProfileIDdo($advertiserID, $authNetCustomerProfileID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateAuthorizeNetCustomerProfileIDdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **authNetCustomerProfileID** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateAutoRechargeSettingsdo()`

```php
advertisersupdateAutoRechargeSettingsdo($advertiserID, $enableAutoRecharge, $autoChargeAmount, $autoChargeBalance, $chargeTransactionFee, $transactionFeeAmount, $transactionFeePercentage, $generateInvoice): \Leadspedia\Model\InlineResponse200
```

Update Auto Recharge Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$enableAutoRecharge = 'enableAutoRecharge_example'; // string
$autoChargeAmount = 56; // int
$autoChargeBalance = 56; // int | Credit will be auto charged when the balance falls below this amount
$chargeTransactionFee = 'chargeTransactionFee_example'; // string
$transactionFeeAmount = 56; // int
$transactionFeePercentage = 56; // int
$generateInvoice = 'generateInvoice_example'; // string

try {
    $result = $apiInstance->advertisersupdateAutoRechargeSettingsdo($advertiserID, $enableAutoRecharge, $autoChargeAmount, $autoChargeBalance, $chargeTransactionFee, $transactionFeeAmount, $transactionFeePercentage, $generateInvoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateAutoRechargeSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **enableAutoRecharge** | **string**|  | [optional] |
| **autoChargeAmount** | **int**|  | [optional] |
| **autoChargeBalance** | **int**| Credit will be auto charged when the balance falls below this amount | [optional] |
| **chargeTransactionFee** | **string**|  | [optional] |
| **transactionFeeAmount** | **int**|  | [optional] |
| **transactionFeePercentage** | **int**|  | [optional] |
| **generateInvoice** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateBillingdo()`

```php
advertisersupdateBillingdo($advertiserID, $billingCycle, $taxID, $taxClass): \Leadspedia\Model\InlineResponse200
```

Update Billing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$billingCycle = 'billingCycle_example'; // string
$taxID = 'taxID_example'; // string
$taxClass = 'taxClass_example'; // string

try {
    $result = $apiInstance->advertisersupdateBillingdo($advertiserID, $billingCycle, $taxID, $taxClass);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateBillingdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **billingCycle** | **string**|  | [optional] |
| **taxID** | **string**|  | [optional] |
| **taxClass** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateInfodo()`

```php
advertisersupdateInfodo($advertiserID, $advertiserName, $alternateID, $externalCRMID, $address, $address2, $city, $state, $zipCode, $country, $source, $website): \Leadspedia\Model\InlineResponse200
```

Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$advertiserName = 'advertiserName_example'; // string
$alternateID = 'alternateID_example'; // string
$externalCRMID = 'externalCRMID_example'; // string
$address = 'address_example'; // string
$address2 = 'address2_example'; // string
$city = 'city_example'; // string
$state = 'state_example'; // string
$zipCode = 'zipCode_example'; // string
$country = 'country_example'; // string
$source = 'source_example'; // string
$website = 'website_example'; // string

try {
    $result = $apiInstance->advertisersupdateInfodo($advertiserID, $advertiserName, $alternateID, $externalCRMID, $address, $address2, $city, $state, $zipCode, $country, $source, $website);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **advertiserName** | **string**|  | [optional] |
| **alternateID** | **string**|  | [optional] |
| **externalCRMID** | **string**|  | [optional] |
| **address** | **string**|  | [optional] |
| **address2** | **string**|  | [optional] |
| **city** | **string**|  | [optional] |
| **state** | **string**|  | [optional] |
| **zipCode** | **string**|  | [optional] |
| **country** | **string**|  | [optional] |
| **source** | **string**|  | [optional] |
| **website** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsCapsdo()`

```php
advertisersupdateLeadsCapsdo($advertiserID, $leadsDailyCap, $leadsWeeklyCap, $leadsMonthlyCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Caps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsDailyCap = 56; // int
$leadsWeeklyCap = 56; // int
$leadsMonthlyCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsCapsdo($advertiserID, $leadsDailyCap, $leadsWeeklyCap, $leadsMonthlyCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsCapsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsDailyCap** | **int**|  | [optional] |
| **leadsWeeklyCap** | **int**|  | [optional] |
| **leadsMonthlyCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsDailyCapdo()`

```php
advertisersupdateLeadsDailyCapdo($advertiserID, $leadsDailyCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Daily Cap

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsDailyCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsDailyCapdo($advertiserID, $leadsDailyCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsDailyCapdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsDailyCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsDailyRevenueCapdo()`

```php
advertisersupdateLeadsDailyRevenueCapdo($advertiserID, $leadsDailyRevenueCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Daily Revenue Caps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsDailyRevenueCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsDailyRevenueCapdo($advertiserID, $leadsDailyRevenueCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsDailyRevenueCapdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsDailyRevenueCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsMonthlyCapdo()`

```php
advertisersupdateLeadsMonthlyCapdo($advertiserID, $leadsMonthlyCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Monthly Cap

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsMonthlyCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsMonthlyCapdo($advertiserID, $leadsMonthlyCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsMonthlyCapdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsMonthlyCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsMonthlyRevenueCapdo()`

```php
advertisersupdateLeadsMonthlyRevenueCapdo($advertiserID, $leadsMonthlyRevenueCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Monthly Revenue Caps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsMonthlyRevenueCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsMonthlyRevenueCapdo($advertiserID, $leadsMonthlyRevenueCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsMonthlyRevenueCapdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsMonthlyRevenueCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsRevenueCapsdo()`

```php
advertisersupdateLeadsRevenueCapsdo($advertiserID, $leadsDailyRevenueCap, $leadsWeeklyRevenueCap, $leadsMonthlyRevenueCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Revenue Caps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsDailyRevenueCap = 56; // int
$leadsWeeklyRevenueCap = 56; // int
$leadsMonthlyRevenueCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsRevenueCapsdo($advertiserID, $leadsDailyRevenueCap, $leadsWeeklyRevenueCap, $leadsMonthlyRevenueCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsRevenueCapsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsDailyRevenueCap** | **int**|  | [optional] |
| **leadsWeeklyRevenueCap** | **int**|  | [optional] |
| **leadsMonthlyRevenueCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsWeeklyCapdo()`

```php
advertisersupdateLeadsWeeklyCapdo($advertiserID, $leadsWeeklyCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Weekly Cap

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsWeeklyCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsWeeklyCapdo($advertiserID, $leadsWeeklyCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsWeeklyCapdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsWeeklyCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdateLeadsWeeklyRevenueCapdo()`

```php
advertisersupdateLeadsWeeklyRevenueCapdo($advertiserID, $leadsWeeklyRevenueCap): \Leadspedia\Model\InlineResponse200
```

Update Leads Weekly Revenue Cap

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$leadsWeeklyRevenueCap = 56; // int

try {
    $result = $apiInstance->advertisersupdateLeadsWeeklyRevenueCapdo($advertiserID, $leadsWeeklyRevenueCap);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsWeeklyRevenueCapdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **leadsWeeklyRevenueCap** | **int**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersupdatePortalSettingsdo()`

```php
advertisersupdatePortalSettingsdo($portalAccess): \Leadspedia\Model\InlineResponse200
```

Update Portal Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$portalAccess = 'portalAccess_example'; // string

try {
    $result = $apiInstance->advertisersupdatePortalSettingsdo($portalAccess);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdatePortalSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portalAccess** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
