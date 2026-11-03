# Leadspedia\DncApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dncadddo()**](DncApi.md#dncadddo) | **POST** /dnc/add.do | Add to DNC list |
| [**dnccheckdo()**](DncApi.md#dnccheckdo) | **GET** /dnc/check.do | Check DNC list |
| [**dncdeleteByEmaildo()**](DncApi.md#dncdeleteByEmaildo) | **POST** /dnc/deleteByEmail.do | Delete DNC by Email |
| [**dncdeleteByPhonedo()**](DncApi.md#dncdeleteByPhonedo) | **POST** /dnc/deleteByPhone.do | Delete DNC by Phone |


## `dncadddo()`

```php
dncadddo($verticalID, $phoneNumber, $emailAddress): \Leadspedia\Model\InlineResponse200
```

Add to DNC list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\DncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$phoneNumber = 'phoneNumber_example'; // string
$emailAddress = 'emailAddress_example'; // string

try {
    $result = $apiInstance->dncadddo($verticalID, $phoneNumber, $emailAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DncApi->dncadddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | |
| **phoneNumber** | **string**|  | [optional] |
| **emailAddress** | **string**|  | [optional] |

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

## `dnccheckdo()`

```php
dnccheckdo($verticalID, $phoneNumber, $emailAddress): \Leadspedia\Model\InlineResponse2001
```

Check DNC list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\DncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$phoneNumber = 'phoneNumber_example'; // string
$emailAddress = 'emailAddress_example'; // string

try {
    $result = $apiInstance->dnccheckdo($verticalID, $phoneNumber, $emailAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DncApi->dnccheckdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | |
| **phoneNumber** | **string**|  | [optional] |
| **emailAddress** | **string**|  | [optional] |

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

## `dncdeleteByEmaildo()`

```php
dncdeleteByEmaildo($verticalID, $emailAddress): \Leadspedia\Model\InlineResponse200
```

Delete DNC by Email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\DncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$emailAddress = 'emailAddress_example'; // string

try {
    $result = $apiInstance->dncdeleteByEmaildo($verticalID, $emailAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DncApi->dncdeleteByEmaildo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | |
| **emailAddress** | **string**|  | |

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

## `dncdeleteByPhonedo()`

```php
dncdeleteByPhonedo($verticalID, $phoneNumber): \Leadspedia\Model\InlineResponse200
```

Delete DNC by Phone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\DncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$phoneNumber = 'phoneNumber_example'; // string

try {
    $result = $apiInstance->dncdeleteByPhonedo($verticalID, $phoneNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DncApi->dncdeleteByPhonedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | |
| **phoneNumber** | **string**|  | |

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
