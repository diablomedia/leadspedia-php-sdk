# Leadspedia\LeadRoutingRulesApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**leadRoutingRulescreatedo()**](LeadRoutingRulesApi.md#leadRoutingRulescreatedo) | **POST** /leadRoutingRules/create.do | Create |
| [**leadRoutingRulesdeletedo()**](LeadRoutingRulesApi.md#leadRoutingRulesdeletedo) | **POST** /leadRoutingRules/delete.do | Delete |
| [**leadRoutingRulesgetAlldo()**](LeadRoutingRulesApi.md#leadRoutingRulesgetAlldo) | **GET** /leadRoutingRules/getAll.do | Get All |


## `leadRoutingRulescreatedo()`

```php
leadRoutingRulescreatedo($advertiserID, $contractID, $affiliateID, $campaignID, $rule): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\LeadRoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$contractID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$rule = 'rule_example'; // string

try {
    $result = $apiInstance->leadRoutingRulescreatedo($advertiserID, $contractID, $affiliateID, $campaignID, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadRoutingRulesApi->leadRoutingRulescreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **contractID** | **int**|  | |
| **affiliateID** | **int**|  | |
| **campaignID** | **int**|  | |
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

## `leadRoutingRulesdeletedo()`

```php
leadRoutingRulesdeletedo($leadRoutingID): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\LeadRoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadRoutingID = 56; // int

try {
    $result = $apiInstance->leadRoutingRulesdeletedo($leadRoutingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadRoutingRulesApi->leadRoutingRulesdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadRoutingID** | **int**|  | |

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

## `leadRoutingRulesgetAlldo()`

```php
leadRoutingRulesgetAlldo($advertiserID, $affiliateID): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\LeadRoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$affiliateID = 56; // int

try {
    $result = $apiInstance->leadRoutingRulesgetAlldo($advertiserID, $affiliateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadRoutingRulesApi->leadRoutingRulesgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |

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
