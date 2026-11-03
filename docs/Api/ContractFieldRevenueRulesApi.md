# Leadspedia\ContractFieldRevenueRulesApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contractFieldRevenueRulescreatedo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulescreatedo) | **POST** /contractFieldRevenueRules/create.do | Create |
| [**contractFieldRevenueRulesdeletedo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulesdeletedo) | **POST** /contractFieldRevenueRules/delete.do | Delete |
| [**contractFieldRevenueRulesgetAlldo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulesgetAlldo) | **GET** /contractFieldRevenueRules/getAll.do | Get All |
| [**contractFieldRevenueRulesupdatedo()**](ContractFieldRevenueRulesApi.md#contractFieldRevenueRulesupdatedo) | **POST** /contractFieldRevenueRules/update.do | Update |


## `contractFieldRevenueRulescreatedo()`

```php
contractFieldRevenueRulescreatedo($contractID, $fieldID, $fieldValue, $price): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\ContractFieldRevenueRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractID = 56; // int
$fieldID = 56; // int
$fieldValue = 'fieldValue_example'; // string
$price = 56; // int

try {
    $result = $apiInstance->contractFieldRevenueRulescreatedo($contractID, $fieldID, $fieldValue, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldRevenueRulesApi->contractFieldRevenueRulescreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractID** | **int**|  | |
| **fieldID** | **int**|  | |
| **fieldValue** | **string**|  | |
| **price** | **int**|  | |

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

## `contractFieldRevenueRulesdeletedo()`

```php
contractFieldRevenueRulesdeletedo($fieldRevenueRuleID): \Leadspedia\Model\InlineResponse200
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fieldRevenueRuleID** | **int**|  | |

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

## `contractFieldRevenueRulesgetAlldo()`

```php
contractFieldRevenueRulesgetAlldo($contractID): \Leadspedia\Model\InlineResponse2001
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `contractFieldRevenueRulesupdatedo()`

```php
contractFieldRevenueRulesupdatedo($fieldRevenueRuleID, $fieldID, $fieldValue, $price): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\ContractFieldRevenueRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldRevenueRuleID = 56; // int
$fieldID = 56; // int
$fieldValue = 'fieldValue_example'; // string
$price = 56; // int

try {
    $result = $apiInstance->contractFieldRevenueRulesupdatedo($fieldRevenueRuleID, $fieldID, $fieldValue, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldRevenueRulesApi->contractFieldRevenueRulesupdatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fieldRevenueRuleID** | **int**|  | |
| **fieldID** | **int**|  | |
| **fieldValue** | **string**|  | |
| **price** | **int**|  | |

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
