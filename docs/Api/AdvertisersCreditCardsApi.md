# Leadspedia\AdvertisersCreditCardsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersCreditCardsadddo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsadddo) | **POST** /advertisersCreditCards/add.do | Add
[**advertisersCreditCardsdeletedo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsdeletedo) | **POST** /advertisersCreditCards/delete.do | Delete
[**advertisersCreditCardsgetAlldo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsgetAlldo) | **GET** /advertisersCreditCards/getAll.do | Get All
[**advertisersCreditCardsgetDefaultdo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsgetDefaultdo) | **GET** /advertisersCreditCards/getDefault.do | Get Default
[**advertisersCreditCardsgetInfodo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsgetInfodo) | **GET** /advertisersCreditCards/getInfo.do | Get Info
[**advertisersCreditCardssetDefaultdo**](AdvertisersCreditCardsApi.md#advertisersCreditCardssetDefaultdo) | **POST** /advertisersCreditCards/setDefault.do | Set Default
[**advertisersCreditCardsupdatePaymentProfileIDdo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsupdatePaymentProfileIDdo) | **POST** /advertisersCreditCards/updatePaymentProfileID.do | Update Payment Profile ID
[**advertisersCreditCardsupdatedo**](AdvertisersCreditCardsApi.md#advertisersCreditCardsupdatedo) | **POST** /advertisersCreditCards/update.do | Update



## advertisersCreditCardsadddo

> advertisersCreditCardsadddo($advertiserID, $cardNumber, $nameOnCard, $expMonth, $expYear, $cvv, $address, $city, $state, $zipCode, $country, $address2, $defaultCard)

Add

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$cardNumber = 'cardNumber_example'; // string | 
$nameOnCard = 'nameOnCard_example'; // string | 
$expMonth = 'expMonth_example'; // string | 
$expYear = 'expYear_example'; // string | 
$cvv = 'cvv_example'; // string | 
$address = 'address_example'; // string | 
$city = 'city_example'; // string | 
$state = 'state_example'; // string | 
$zipCode = 'zipCode_example'; // string | 
$country = 'country_example'; // string | 
$address2 = 'address2_example'; // string | 
$defaultCard = 'No'; // string | 

try {
    $apiInstance->advertisersCreditCardsadddo($advertiserID, $cardNumber, $nameOnCard, $expMonth, $expYear, $cvv, $address, $city, $state, $zipCode, $country, $address2, $defaultCard);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsadddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **cardNumber** | **string**|  |
 **nameOnCard** | **string**|  |
 **expMonth** | **string**|  |
 **expYear** | **string**|  |
 **cvv** | **string**|  |
 **address** | **string**|  |
 **city** | **string**|  |
 **state** | **string**|  |
 **zipCode** | **string**|  |
 **country** | **string**|  |
 **address2** | **string**|  | [optional]
 **defaultCard** | **string**|  | [optional] [default to &#39;No&#39;]

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


## advertisersCreditCardsdeletedo

> advertisersCreditCardsdeletedo($advertiserID, $creditCardID)

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$creditCardID = 56; // int | 

try {
    $apiInstance->advertisersCreditCardsdeletedo($advertiserID, $creditCardID);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **creditCardID** | **int**|  |

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


## advertisersCreditCardsgetAlldo

> \Leadspedia\Model\InlineResponse200 advertisersCreditCardsgetAlldo($advertiserID, $start, $limit)

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->advertisersCreditCardsgetAlldo($advertiserID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersCreditCardsgetDefaultdo

> \Leadspedia\Model\InlineResponse200 advertisersCreditCardsgetDefaultdo($advertiserID)

Get Default

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 

try {
    $result = $apiInstance->advertisersCreditCardsgetDefaultdo($advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsgetDefaultdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersCreditCardsgetInfodo

> \Leadspedia\Model\InlineResponse200 advertisersCreditCardsgetInfodo($advertiserID, $creditCardID)

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$creditCardID = 56; // int | 

try {
    $result = $apiInstance->advertisersCreditCardsgetInfodo($advertiserID, $creditCardID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **creditCardID** | **int**|  |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersCreditCardssetDefaultdo

> advertisersCreditCardssetDefaultdo($advertiserID, $creditCardID)

Set Default

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$creditCardID = 56; // int | 

try {
    $apiInstance->advertisersCreditCardssetDefaultdo($advertiserID, $creditCardID);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardssetDefaultdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **creditCardID** | **int**|  |

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


## advertisersCreditCardsupdatePaymentProfileIDdo

> advertisersCreditCardsupdatePaymentProfileIDdo($creditCardID, $advertiserID, $paymentProfileID, $expMonth, $expYear, $address, $address2, $city, $state, $zipCode, $country)

Update Payment Profile ID

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditCardID = 56; // int | 
$advertiserID = 56; // int | 
$paymentProfileID = 'paymentProfileID_example'; // string | 
$expMonth = 'expMonth_example'; // string | 
$expYear = 'expYear_example'; // string | 
$address = 'address_example'; // string | 
$address2 = 'address2_example'; // string | 
$city = 'city_example'; // string | 
$state = 'state_example'; // string | 
$zipCode = 'zipCode_example'; // string | 
$country = 'country_example'; // string | 

try {
    $apiInstance->advertisersCreditCardsupdatePaymentProfileIDdo($creditCardID, $advertiserID, $paymentProfileID, $expMonth, $expYear, $address, $address2, $city, $state, $zipCode, $country);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsupdatePaymentProfileIDdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditCardID** | **int**|  |
 **advertiserID** | **int**|  |
 **paymentProfileID** | **string**|  | [optional]
 **expMonth** | **string**|  | [optional]
 **expYear** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **zipCode** | **string**|  | [optional]
 **country** | **string**|  | [optional]

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


## advertisersCreditCardsupdatedo

> advertisersCreditCardsupdatedo($creditCardID, $advertiserID, $nameOnCard, $expMonth, $expYear, $address, $city, $state, $zipCode, $country, $address2)

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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditCardID = 56; // int | 
$advertiserID = 56; // int | 
$nameOnCard = 'nameOnCard_example'; // string | 
$expMonth = 'expMonth_example'; // string | 
$expYear = 'expYear_example'; // string | 
$address = 'address_example'; // string | 
$city = 'city_example'; // string | 
$state = 'state_example'; // string | 
$zipCode = 'zipCode_example'; // string | 
$country = 'country_example'; // string | 
$address2 = 'address2_example'; // string | 

try {
    $apiInstance->advertisersCreditCardsupdatedo($creditCardID, $advertiserID, $nameOnCard, $expMonth, $expYear, $address, $city, $state, $zipCode, $country, $address2);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsupdatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditCardID** | **int**|  |
 **advertiserID** | **int**|  |
 **nameOnCard** | **string**|  |
 **expMonth** | **string**|  |
 **expYear** | **string**|  |
 **address** | **string**|  |
 **city** | **string**|  |
 **state** | **string**|  |
 **zipCode** | **string**|  |
 **country** | **string**|  |
 **address2** | **string**|  | [optional]

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

