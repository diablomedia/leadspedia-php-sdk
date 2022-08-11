# Leadspedia\ContractFieldRevenueRulesApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractFieldRevenueRulescreatedo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulescreatedo) | **POST** /contractFieldRevenueRules/create.do | Create
[**contractFieldRevenueRulesdeletedo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulesdeletedo) | **POST** /contractFieldRevenueRules/delete.do | Delete
[**contractFieldRevenueRulesgetAlldo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulesgetAlldo) | **GET** /contractFieldRevenueRules/getAll.do | Get All
[**contractFieldRevenueRulesupdatedo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulesupdatedo) | **POST** /contractFieldRevenueRules/update.do | Update


## `contractFieldRevenueRulescreatedo()`

```php
contractFieldRevenueRulescreatedo($contractID, $fieldID, $fieldValue, $price, $effectivePriceRate, $effectivePriceAmount): \Leadspedia\Model\Affiliatescreatedo200Response
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


$apiInstance = new Leadspedia\Api\ContractFieldRevenueRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractID = 56; // int
$fieldID = 56; // int
$fieldValue = 'fieldValue_example'; // string
$price = 3.4; // float
$effectivePriceRate = 3.4; // float
$effectivePriceAmount = 3.4; // float

try {
    $result = $apiInstance->contractFieldRevenueRulescreatedo($contractID, $fieldID, $fieldValue, $price, $effectivePriceRate, $effectivePriceAmount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldRevenueRulesApi->contractFieldRevenueRulescreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractID** | **int**|  |
 **fieldID** | **int**|  |
 **fieldValue** | **string**|  |
 **price** | **float**|  |
 **effectivePriceRate** | **float**|  | [optional]
 **effectivePriceAmount** | **float**|  | [optional]

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

## `contractFieldRevenueRulesdeletedo()`

```php
contractFieldRevenueRulesdeletedo($fieldRevenueRuleID): \Leadspedia\Model\Affiliatescreatedo200Response
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


$apiInstance = new Leadspedia\Api\ContractFieldRevenueRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldRevenueRuleID = 56; // int

try {
    $result = $apiInstance->contractFieldRevenueRulesdeletedo($fieldRevenueRuleID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldRevenueRulesApi->contractFieldRevenueRulesdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldRevenueRuleID** | **int**|  |

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

## `contractFieldRevenueRulesgetAlldo()`

```php
contractFieldRevenueRulesgetAlldo($contractID): \Leadspedia\Model\VerticalsgetAlldo200Response
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


$apiInstance = new Leadspedia\Api\ContractFieldRevenueRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractID = 56; // int

try {
    $result = $apiInstance->contractFieldRevenueRulesgetAlldo($contractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldRevenueRulesApi->contractFieldRevenueRulesgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractID** | **int**|  | [optional]

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

## `contractFieldRevenueRulesupdatedo()`

```php
contractFieldRevenueRulesupdatedo($fieldRevenueRuleID, $fieldID, $fieldValue, $price, $effectivePriceRate, $effectivePriceAmount): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update

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


$apiInstance = new Leadspedia\Api\ContractFieldRevenueRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldRevenueRuleID = 56; // int
$fieldID = 56; // int
$fieldValue = 'fieldValue_example'; // string
$price = 3.4; // float
$effectivePriceRate = 3.4; // float
$effectivePriceAmount = 3.4; // float

try {
    $result = $apiInstance->contractFieldRevenueRulesupdatedo($fieldRevenueRuleID, $fieldID, $fieldValue, $price, $effectivePriceRate, $effectivePriceAmount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldRevenueRulesApi->contractFieldRevenueRulesupdatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldRevenueRuleID** | **int**|  |
 **fieldID** | **int**|  |
 **fieldValue** | **string**|  |
 **price** | **float**|  |
 **effectivePriceRate** | **float**|  | [optional]
 **effectivePriceAmount** | **float**|  | [optional]

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
