# Leadspedia\VerticalGroupsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**verticalGroupscreatedo()**](VerticalGroupsApi.md#verticalGroupscreatedo) | **POST** /verticalGroups/create.do | Create |
| [**verticalGroupsdeletedo()**](VerticalGroupsApi.md#verticalGroupsdeletedo) | **POST** /verticalGroups/delete.do | Delete |
| [**verticalGroupsgetAlldo()**](VerticalGroupsApi.md#verticalGroupsgetAlldo) | **GET** /verticalGroups/getAll.do | Get All |
| [**verticalGroupsgetInfodo()**](VerticalGroupsApi.md#verticalGroupsgetInfodo) | **GET** /verticalGroups/getInfo.do | Get Info |
| [**verticalGroupsupdatedo()**](VerticalGroupsApi.md#verticalGroupsupdatedo) | **POST** /verticalGroups/update.do | Update |


## `verticalGroupscreatedo()`

```php
verticalGroupscreatedo($groupName): \Leadspedia\Model\InlineResponse200
```

Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new Leadspedia\Api\VerticalGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = 'groupName_example'; // string

try {
    $result = $apiInstance->verticalGroupscreatedo($groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerticalGroupsApi->verticalGroupscreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupName** | **string**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey1](../../README.md#apiKey1), [apiKey0](../../README.md#apiKey0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verticalGroupsdeletedo()`

```php
verticalGroupsdeletedo($groupID): \Leadspedia\Model\InlineResponse200
```

Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new Leadspedia\Api\VerticalGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupID = 56; // int

try {
    $result = $apiInstance->verticalGroupsdeletedo($groupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerticalGroupsApi->verticalGroupsdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupID** | **int**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey1](../../README.md#apiKey1), [apiKey0](../../README.md#apiKey0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verticalGroupsgetAlldo()`

```php
verticalGroupsgetAlldo($start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new Leadspedia\Api\VerticalGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->verticalGroupsgetAlldo($start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerticalGroupsApi->verticalGroupsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**|  | [optional] [default to 0] |
| **limit** | **int**|  | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey1](../../README.md#apiKey1), [apiKey0](../../README.md#apiKey0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verticalGroupsgetInfodo()`

```php
verticalGroupsgetInfodo($groupID): \Leadspedia\Model\InlineResponse2001
```

Get Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new Leadspedia\Api\VerticalGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupID = 56; // int

try {
    $result = $apiInstance->verticalGroupsgetInfodo($groupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerticalGroupsApi->verticalGroupsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupID** | **int**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey1](../../README.md#apiKey1), [apiKey0](../../README.md#apiKey0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verticalGroupsupdatedo()`

```php
verticalGroupsupdatedo($groupID, $groupName): \Leadspedia\Model\InlineResponse200
```

Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new Leadspedia\Api\VerticalGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupID = 56; // int
$groupName = 'groupName_example'; // string

try {
    $result = $apiInstance->verticalGroupsupdatedo($groupID, $groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerticalGroupsApi->verticalGroupsupdatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupID** | **int**|  | |
| **groupName** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey1](../../README.md#apiKey1), [apiKey0](../../README.md#apiKey0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
