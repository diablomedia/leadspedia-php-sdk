# Leadspedia\AffiliatesApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliateschangeStatusdo()**](AffiliatesApi.md#affiliateschangeStatusdo) | **POST** /affiliates/changeStatus.do | Change Status
[**affiliatescreatedo()**](AffiliatesApi.md#affiliatescreatedo) | **POST** /affiliates/create.do | Create
[**affiliatesdeletedo()**](AffiliatesApi.md#affiliatesdeletedo) | **POST** /affiliates/delete.do | Delete
[**affiliatesgetAlldo()**](AffiliatesApi.md#affiliatesgetAlldo) | **GET** /affiliates/getAll.do | Get All
[**affiliatesgetInfodo()**](AffiliatesApi.md#affiliatesgetInfodo) | **GET** /affiliates/getInfo.do | Get Info
[**affiliatessearchdo()**](AffiliatesApi.md#affiliatessearchdo) | **GET** /affiliates/search.do | Search
[**affiliatesupdateBillingdo()**](AffiliatesApi.md#affiliatesupdateBillingdo) | **POST** /affiliates/updateBilling.do | Update Billing
[**affiliatesupdateInfodo()**](AffiliatesApi.md#affiliatesupdateInfodo) | **POST** /affiliates/updateInfo.do | Update Info


## `affiliateschangeStatusdo()`

```php
affiliateschangeStatusdo($affiliateID, $status): \Leadspedia\Model\Affiliatescreatedo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->affiliateschangeStatusdo($affiliateID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliateschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  |
 **status** | **string**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatescreatedo()`

```php
affiliatescreatedo($affiliateName, $accountManagerID, $status): \Leadspedia\Model\Affiliatescreatedo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateName = 'affiliateName_example'; // string
$accountManagerID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->affiliatescreatedo($affiliateName, $accountManagerID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatescreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateName** | **string**|  |
 **accountManagerID** | **int**|  |
 **status** | **string**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatesdeletedo()`

```php
affiliatesdeletedo($affiliateID): \Leadspedia\Model\Affiliatescreatedo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int

try {
    $result = $apiInstance->affiliatesdeletedo($affiliateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatesgetAlldo()`

```php
affiliatesgetAlldo($affiliateID, $accountManagerID, $status, $search, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$accountManagerID = 56; // int
$status = 'status_example'; // string
$search = 'search_example'; // string
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->affiliatesgetAlldo($affiliateID, $accountManagerID, $status, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  | [optional]
 **accountManagerID** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **search** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatesgetInfodo()`

```php
affiliatesgetInfodo($affiliateID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int

try {
    $result = $apiInstance->affiliatesgetInfodo($affiliateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesgetInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  |

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatessearchdo()`

```php
affiliatessearchdo($search, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->affiliatessearchdo($search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatessearchdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  |
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatesupdateBillingdo()`

```php
affiliatesupdateBillingdo($affiliateID, $billingCycle, $taxID, $taxClass, $taxDocReceived): \Leadspedia\Model\Affiliatescreatedo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$billingCycle = 'billingCycle_example'; // string
$taxID = 'taxID_example'; // string
$taxClass = 'taxClass_example'; // string
$taxDocReceived = 'taxDocReceived_example'; // string

try {
    $result = $apiInstance->affiliatesupdateBillingdo($affiliateID, $billingCycle, $taxID, $taxClass, $taxDocReceived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesupdateBillingdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  |
 **billingCycle** | **string**|  | [optional]
 **taxID** | **string**|  | [optional]
 **taxClass** | **string**|  | [optional]
 **taxDocReceived** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatesupdateInfodo()`

```php
affiliatesupdateInfodo($affiliateID, $affiliateName, $website, $alternateID, $address, $address2, $city, $state, $zipCode, $country, $reportingUrl, $reportingUsername, $reportingPassword): \Leadspedia\Model\Affiliatescreatedo200Response
```

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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$affiliateName = 'affiliateName_example'; // string
$website = 'website_example'; // string
$alternateID = 'alternateID_example'; // string
$address = 'address_example'; // string
$address2 = 'address2_example'; // string
$city = 'city_example'; // string
$state = 'state_example'; // string
$zipCode = 'zipCode_example'; // string
$country = 'country_example'; // string
$reportingUrl = 'reportingUrl_example'; // string
$reportingUsername = 'reportingUsername_example'; // string
$reportingPassword = 'reportingPassword_example'; // string

try {
    $result = $apiInstance->affiliatesupdateInfodo($affiliateID, $affiliateName, $website, $alternateID, $address, $address2, $city, $state, $zipCode, $country, $reportingUrl, $reportingUsername, $reportingPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesupdateInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  |
 **affiliateName** | **string**|  | [optional]
 **website** | **string**|  | [optional]
 **alternateID** | **string**|  | [optional]
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

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
