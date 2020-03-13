# Leadspedia\AdvertisersApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersadjustCreditdo**](AdvertisersApi.md#advertisersadjustCreditdo) | **POST** /advertisers/adjustCredit.do | Adjust Credit
[**advertiserschangeStatusdo**](AdvertisersApi.md#advertiserschangeStatusdo) | **POST** /advertisers/changeStatus.do | Change Status
[**advertiserscreatedo**](AdvertisersApi.md#advertiserscreatedo) | **POST** /advertisers/create.do | Create
[**advertisersdeletedo**](AdvertisersApi.md#advertisersdeletedo) | **POST** /advertisers/delete.do | Delete
[**advertisersenableCreditdo**](AdvertisersApi.md#advertisersenableCreditdo) | **POST** /advertisers/enableCredit.do | Enable Credit
[**advertisersgetAlldo**](AdvertisersApi.md#advertisersgetAlldo) | **GET** /advertisers/getAll.do | Get All
[**advertisersgetInfodo**](AdvertisersApi.md#advertisersgetInfodo) | **GET** /advertisers/getInfo.do | Get Info
[**advertiserssearchdo**](AdvertisersApi.md#advertiserssearchdo) | **GET** /advertisers/search.do | Search
[**advertisersupdateAuthorizeNetCustomerProfileIDdo**](AdvertisersApi.md#advertisersupdateAuthorizeNetCustomerProfileIDdo) | **POST** /advertisers/updateAuthorizeNetCustomerProfileID.do | Update Authorize Net Customer Profile ID
[**advertisersupdateAutoRechargeSettingsdo**](AdvertisersApi.md#advertisersupdateAutoRechargeSettingsdo) | **POST** /advertisers/updateAutoRechargeSettings.do | Update Auto Recharge Settings
[**advertisersupdateBillingdo**](AdvertisersApi.md#advertisersupdateBillingdo) | **POST** /advertisers/updateBilling.do | Update Billing
[**advertisersupdateInfodo**](AdvertisersApi.md#advertisersupdateInfodo) | **POST** /advertisers/updateInfo.do | Update Info
[**advertisersupdateLeadsCapsdo**](AdvertisersApi.md#advertisersupdateLeadsCapsdo) | **POST** /advertisers/updateLeadsCaps.do | Update Leads Caps
[**advertisersupdateLeadsDailyCapdo**](AdvertisersApi.md#advertisersupdateLeadsDailyCapdo) | **POST** /advertisers/updateLeadsDailyCap.do | Update Leads Daily Cap
[**advertisersupdateLeadsDailyRevenueCapdo**](AdvertisersApi.md#advertisersupdateLeadsDailyRevenueCapdo) | **POST** /advertisers/updateLeadsDailyRevenueCap.do | Update Leads Daily Revenue Cap
[**advertisersupdateLeadsMonthlyCapdo**](AdvertisersApi.md#advertisersupdateLeadsMonthlyCapdo) | **POST** /advertisers/updateLeadsMonthlyCap.do | Update Leads Monthly Cap
[**advertisersupdateLeadsMonthlyRevenueCapdo**](AdvertisersApi.md#advertisersupdateLeadsMonthlyRevenueCapdo) | **POST** /advertisers/updateLeadsMonthlyRevenueCap.do | Update Leads Monthly Revenue Cap
[**advertisersupdateLeadsRevenueCapsdo**](AdvertisersApi.md#advertisersupdateLeadsRevenueCapsdo) | **POST** /advertisers/updateLeadsRevenueCaps.do | Update Leads Revenue Caps
[**advertisersupdateLeadsWeeklyCapdo**](AdvertisersApi.md#advertisersupdateLeadsWeeklyCapdo) | **POST** /advertisers/updateLeadsWeeklyCap.do | Update Leads Weekly Cap
[**advertisersupdateLeadsWeeklyRevenueCapdo**](AdvertisersApi.md#advertisersupdateLeadsWeeklyRevenueCapdo) | **POST** /advertisers/updateLeadsWeeklyRevenueCap.do | Update Leads Weekly Revenue Cap
[**advertisersupdatePortalSettingsdo**](AdvertisersApi.md#advertisersupdatePortalSettingsdo) | **POST** /advertisers/updatePortalSettings.do | Update Portal Settings



## advertisersadjustCreditdo

> advertisersadjustCreditdo($advertiserID, $type, $amount, $charge, $generateInvoice, $note, $transactionFee, $transactionFeePercentage, $transactionFeeAmount)

Adjust Credit

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$type = 'type_example'; // string | 
$amount = 3.4; // float | 
$charge = 'No'; // string | 
$generateInvoice = 'No'; // string | 
$note = 'note_example'; // string | 
$transactionFee = 'transactionFee_example'; // string | 
$transactionFeePercentage = 3.4; // float | 
$transactionFeeAmount = 3.4; // float | 

try {
    $apiInstance->advertisersadjustCreditdo($advertiserID, $type, $amount, $charge, $generateInvoice, $note, $transactionFee, $transactionFeePercentage, $transactionFeeAmount);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersadjustCreditdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **type** | **string**|  |
 **amount** | **float**|  |
 **charge** | **string**|  | [optional] [default to &#39;No&#39;]
 **generateInvoice** | **string**|  | [optional] [default to &#39;No&#39;]
 **note** | **string**|  | [optional]
 **transactionFee** | **string**|  | [optional]
 **transactionFeePercentage** | **float**|  | [optional]
 **transactionFeeAmount** | **float**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertiserschangeStatusdo

> advertiserschangeStatusdo($advertiserID, $status)

Change Status

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$status = 'status_example'; // string | 

try {
    $apiInstance->advertiserschangeStatusdo($advertiserID, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **status** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertiserscreatedo

> advertiserscreatedo($advertiserName, $accountManagerID, $status)

Create

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserName = 'advertiserName_example'; // string | 
$accountManagerID = 56; // int | 
$status = 'status_example'; // string | 

try {
    $apiInstance->advertiserscreatedo($advertiserName, $accountManagerID, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserscreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserName** | **string**|  |
 **accountManagerID** | **int**|  |
 **status** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersdeletedo

> advertisersdeletedo($advertiserID)

Delete

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 

try {
    $apiInstance->advertisersdeletedo($advertiserID);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersenableCreditdo

> advertisersenableCreditdo($advertiserID)

Enable Credit

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 

try {
    $apiInstance->advertisersenableCreditdo($advertiserID);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersenableCreditdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersgetAlldo

> object advertisersgetAlldo($advertiserID, $advertiserType, $accountManagerID, $status, $isCreditEnabled, $hasCreditCardOnFile, $search, $start, $limit)

Get All

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$advertiserType = 'advertiserType_example'; // string | 
$accountManagerID = 56; // int | 
$status = 'status_example'; // string | 
$isCreditEnabled = 'isCreditEnabled_example'; // string | 
$hasCreditCardOnFile = 'hasCreditCardOnFile_example'; // string | 
$search = 'search_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->advertisersgetAlldo($advertiserID, $advertiserType, $accountManagerID, $status, $isCreditEnabled, $hasCreditCardOnFile, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  | [optional]
 **advertiserType** | **string**|  | [optional]
 **accountManagerID** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **isCreditEnabled** | **string**|  | [optional]
 **hasCreditCardOnFile** | **string**|  | [optional]
 **search** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

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


## advertisersgetInfodo

> object advertisersgetInfodo($advertiserID)

Get Info

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 

try {
    $result = $apiInstance->advertisersgetInfodo($advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |

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


## advertiserssearchdo

> object advertiserssearchdo($search, $start, $limit)

Search

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->advertiserssearchdo($search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserssearchdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  |
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

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


## advertisersupdateAuthorizeNetCustomerProfileIDdo

> advertisersupdateAuthorizeNetCustomerProfileIDdo($advertiserID, $authNetCustomerProfileID)

Update Authorize Net Customer Profile ID

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$authNetCustomerProfileID = 'authNetCustomerProfileID_example'; // string | 

try {
    $apiInstance->advertisersupdateAuthorizeNetCustomerProfileIDdo($advertiserID, $authNetCustomerProfileID);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateAuthorizeNetCustomerProfileIDdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **authNetCustomerProfileID** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateAutoRechargeSettingsdo

> advertisersupdateAutoRechargeSettingsdo($advertiserID, $enableAutoRecharge, $autoChargeBalance, $autoChargeAmount, $chargeTransactionFee, $transactionFeePercentage, $transactionFeeAmount, $generateInvoice)

Update Auto Recharge Settings

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$enableAutoRecharge = 'enableAutoRecharge_example'; // string | 
$autoChargeBalance = 3.4; // float | 
$autoChargeAmount = 3.4; // float | 
$chargeTransactionFee = 'chargeTransactionFee_example'; // string | 
$transactionFeePercentage = 3.4; // float | 
$transactionFeeAmount = 3.4; // float | 
$generateInvoice = 'generateInvoice_example'; // string | 

try {
    $apiInstance->advertisersupdateAutoRechargeSettingsdo($advertiserID, $enableAutoRecharge, $autoChargeBalance, $autoChargeAmount, $chargeTransactionFee, $transactionFeePercentage, $transactionFeeAmount, $generateInvoice);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateAutoRechargeSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **enableAutoRecharge** | **string**|  | [optional]
 **autoChargeBalance** | **float**|  | [optional]
 **autoChargeAmount** | **float**|  | [optional]
 **chargeTransactionFee** | **string**|  | [optional]
 **transactionFeePercentage** | **float**|  | [optional]
 **transactionFeeAmount** | **float**|  | [optional]
 **generateInvoice** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateBillingdo

> advertisersupdateBillingdo($advertiserID, $billingCycle, $taxID, $taxClass)

Update Billing

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$billingCycle = 'billingCycle_example'; // string | 
$taxID = 'taxID_example'; // string | 
$taxClass = 'taxClass_example'; // string | 

try {
    $apiInstance->advertisersupdateBillingdo($advertiserID, $billingCycle, $taxID, $taxClass);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateBillingdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **billingCycle** | **string**|  | [optional]
 **taxID** | **string**|  | [optional]
 **taxClass** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateInfodo

> advertisersupdateInfodo($advertiserID, $advertiserName, $website, $alternateID, $source, $externalCRMID, $numberOfStaff, $address, $address2, $city, $state, $zipCode, $country, $reportingUrl, $reportingUsername, $reportingPassword)

Update Info

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$advertiserName = 'advertiserName_example'; // string | 
$website = 'website_example'; // string | 
$alternateID = 'alternateID_example'; // string | 
$source = 'source_example'; // string | 
$externalCRMID = 'externalCRMID_example'; // string | 
$numberOfStaff = 56; // int | 
$address = 'address_example'; // string | 
$address2 = 'address2_example'; // string | 
$city = 'city_example'; // string | 
$state = 'state_example'; // string | 
$zipCode = 'zipCode_example'; // string | 
$country = 'country_example'; // string | 
$reportingUrl = 'reportingUrl_example'; // string | 
$reportingUsername = 'reportingUsername_example'; // string | 
$reportingPassword = 'reportingPassword_example'; // string | 

try {
    $apiInstance->advertisersupdateInfodo($advertiserID, $advertiserName, $website, $alternateID, $source, $externalCRMID, $numberOfStaff, $address, $address2, $city, $state, $zipCode, $country, $reportingUrl, $reportingUsername, $reportingPassword);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **advertiserName** | **string**|  | [optional]
 **website** | **string**|  | [optional]
 **alternateID** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **externalCRMID** | **string**|  | [optional]
 **numberOfStaff** | **int**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **zipCode** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **reportingUrl** | **string**|  | [optional]
 **reportingUsername** | **string**|  | [optional]
 **reportingPassword** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsCapsdo

> advertisersupdateLeadsCapsdo($advertiserID, $leadsDailyCap, $leadsWeeklyCap, $leadsMonthlyCap)

Update Leads Caps

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsDailyCap = 56; // int | 
$leadsWeeklyCap = 56; // int | 
$leadsMonthlyCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsCapsdo($advertiserID, $leadsDailyCap, $leadsWeeklyCap, $leadsMonthlyCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsCapsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsDailyCap** | **int**|  | [optional]
 **leadsWeeklyCap** | **int**|  | [optional]
 **leadsMonthlyCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsDailyCapdo

> advertisersupdateLeadsDailyCapdo($advertiserID, $leadsDailyCap)

Update Leads Daily Cap

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsDailyCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsDailyCapdo($advertiserID, $leadsDailyCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsDailyCapdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsDailyCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsDailyRevenueCapdo

> advertisersupdateLeadsDailyRevenueCapdo($advertiserID, $leadsDailyRevenueCap)

Update Leads Daily Revenue Cap

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsDailyRevenueCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsDailyRevenueCapdo($advertiserID, $leadsDailyRevenueCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsDailyRevenueCapdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsDailyRevenueCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsMonthlyCapdo

> advertisersupdateLeadsMonthlyCapdo($advertiserID, $leadsMonthlyCap)

Update Leads Monthly Cap

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsMonthlyCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsMonthlyCapdo($advertiserID, $leadsMonthlyCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsMonthlyCapdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsMonthlyCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsMonthlyRevenueCapdo

> advertisersupdateLeadsMonthlyRevenueCapdo($advertiserID, $leadsMonthlyRevenueCap)

Update Leads Monthly Revenue Cap

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsMonthlyRevenueCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsMonthlyRevenueCapdo($advertiserID, $leadsMonthlyRevenueCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsMonthlyRevenueCapdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsMonthlyRevenueCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsRevenueCapsdo

> advertisersupdateLeadsRevenueCapsdo($advertiserID, $leadsDailyRevenueCap, $leadsWeeklyRevenueCap, $leadsMonthlyRevenueCap)

Update Leads Revenue Caps

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsDailyRevenueCap = 56; // int | 
$leadsWeeklyRevenueCap = 56; // int | 
$leadsMonthlyRevenueCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsRevenueCapsdo($advertiserID, $leadsDailyRevenueCap, $leadsWeeklyRevenueCap, $leadsMonthlyRevenueCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsRevenueCapsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsDailyRevenueCap** | **int**|  | [optional]
 **leadsWeeklyRevenueCap** | **int**|  | [optional]
 **leadsMonthlyRevenueCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsWeeklyCapdo

> advertisersupdateLeadsWeeklyCapdo($advertiserID, $leadsWeeklyCap)

Update Leads Weekly Cap

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsWeeklyCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsWeeklyCapdo($advertiserID, $leadsWeeklyCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsWeeklyCapdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsWeeklyCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdateLeadsWeeklyRevenueCapdo

> advertisersupdateLeadsWeeklyRevenueCapdo($advertiserID, $leadsWeeklyRevenueCap)

Update Leads Weekly Revenue Cap

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$leadsWeeklyRevenueCap = 56; // int | 

try {
    $apiInstance->advertisersupdateLeadsWeeklyRevenueCapdo($advertiserID, $leadsWeeklyRevenueCap);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateLeadsWeeklyRevenueCapdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **leadsWeeklyRevenueCap** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersupdatePortalSettingsdo

> advertisersupdatePortalSettingsdo($portalAccess, $twoWayAuth, $manageUsers, $manageOffers, $updateBillingInfo)

Update Portal Settings

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


$apiInstance = new Leadspedia\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$portalAccess = 'portalAccess_example'; // string | 
$twoWayAuth = 'twoWayAuth_example'; // string | 
$manageUsers = 'manageUsers_example'; // string | 
$manageOffers = 'manageOffers_example'; // string | 
$updateBillingInfo = 'updateBillingInfo_example'; // string | 

try {
    $apiInstance->advertisersupdatePortalSettingsdo($portalAccess, $twoWayAuth, $manageUsers, $manageOffers, $updateBillingInfo);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdatePortalSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portalAccess** | **string**|  | [optional]
 **twoWayAuth** | **string**|  | [optional]
 **manageUsers** | **string**|  | [optional]
 **manageOffers** | **string**|  | [optional]
 **updateBillingInfo** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

