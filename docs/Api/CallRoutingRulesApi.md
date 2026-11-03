# Leadspedia\CallRoutingRulesApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callRoutingRulescreatedo()**](CallRoutingRulesApi.md#callRoutingRulescreatedo) | **POST** /callRoutingRules/create.do | Create |
| [**callRoutingRulesdeletedo()**](CallRoutingRulesApi.md#callRoutingRulesdeletedo) | **POST** /callRoutingRules/delete.do | Delete |
| [**callRoutingRulesgetAlldo()**](CallRoutingRulesApi.md#callRoutingRulesgetAlldo) | **GET** /callRoutingRules/getAll.do | Get All |


## `callRoutingRulescreatedo()`

```php
callRoutingRulescreatedo($affiliateID, $campaignID, $advertiserID, $contractID, $rule): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\CallRoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$rule = 'rule_example'; // string

try {
    $result = $apiInstance->callRoutingRulescreatedo($affiliateID, $campaignID, $advertiserID, $contractID, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRoutingRulesApi->callRoutingRulescreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | |
| **campaignID** | **int**|  | |
| **advertiserID** | **int**|  | |
| **contractID** | **int**|  | |
| **rule** | **string**|  | |

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

## `callRoutingRulesdeletedo()`

```php
callRoutingRulesdeletedo($callRoutingRuleID): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\CallRoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callRoutingRuleID = 56; // int

try {
    $result = $apiInstance->callRoutingRulesdeletedo($callRoutingRuleID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRoutingRulesApi->callRoutingRulesdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callRoutingRuleID** | **int**|  | |

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

## `callRoutingRulesgetAlldo()`

```php
callRoutingRulesgetAlldo($affiliateID, $advertiserID): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\CallRoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$advertiserID = 56; // int

try {
    $result = $apiInstance->callRoutingRulesgetAlldo($affiliateID, $advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRoutingRulesApi->callRoutingRulesgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |

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
