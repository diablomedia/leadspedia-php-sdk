# LeadspediaApi\AdvertiserscreditcardsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersCreditCardsadddo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsadddo) | **POST** /advertisersCreditCards/add.do | Add
[**advertisersCreditCardsdeletedo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsdeletedo) | **POST** /advertisersCreditCards/delete.do | Delete
[**advertisersCreditCardsgetAlldo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsgetalldo) | **GET** /advertisersCreditCards/getAll.do | Get All
[**advertisersCreditCardsgetDefaultdo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsgetdefaultdo) | **GET** /advertisersCreditCards/getDefault.do | Get Default
[**advertisersCreditCardsgetInfodo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsgetinfodo) | **GET** /advertisersCreditCards/getInfo.do | Get Info
[**advertisersCreditCardssetDefaultdo**](AdvertiserscreditcardsApi.md#advertiserscreditcardssetdefaultdo) | **POST** /advertisersCreditCards/setDefault.do | Set Default
[**advertisersCreditCardsupdatePaymentProfileIDdo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsupdatepaymentprofileiddo) | **POST** /advertisersCreditCards/updatePaymentProfileID.do | Update Payment Profile ID
[**advertisersCreditCardsupdatedo**](AdvertiserscreditcardsApi.md#advertiserscreditcardsupdatedo) | **POST** /advertisersCreditCards/update.do | Update

# **advertisersCreditCardsadddo**
> advertisersCreditCardsadddo($advertiser_id, $card_number, $name_on_card, $exp_month, $exp_year, $cvv, $address, $city, $state, $zip_code, $country, $address2, $default_card)

Add

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$card_number = "card_number_example"; // string | 
$name_on_card = "name_on_card_example"; // string | 
$exp_month = "exp_month_example"; // string | 
$exp_year = "exp_year_example"; // string | 
$cvv = "cvv_example"; // string | 
$address = "address_example"; // string | 
$city = "city_example"; // string | 
$state = "state_example"; // string | 
$zip_code = "zip_code_example"; // string | 
$country = "country_example"; // string | 
$address2 = "address2_example"; // string | 
$default_card = "default_card_example"; // string | 

try {
    $apiInstance->advertisersCreditCardsadddo($advertiser_id, $card_number, $name_on_card, $exp_month, $exp_year, $cvv, $address, $city, $state, $zip_code, $country, $address2, $default_card);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsadddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **card_number** | **string**|  |
 **name_on_card** | **string**|  |
 **exp_month** | **string**|  |
 **exp_year** | **string**|  |
 **cvv** | **string**|  |
 **address** | **string**|  |
 **city** | **string**|  |
 **state** | **string**|  |
 **zip_code** | **string**|  |
 **country** | **string**|  |
 **address2** | **string**|  | [optional]
 **default_card** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardsdeletedo**
> advertisersCreditCardsdeletedo($advertiser_id, $credit_card_id)

Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$credit_card_id = 56; // int | 

try {
    $apiInstance->advertisersCreditCardsdeletedo($advertiser_id, $credit_card_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **credit_card_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardsgetAlldo**
> advertisersCreditCardsgetAlldo($advertiser_id, $start, $limit)

Get All

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->advertisersCreditCardsgetAlldo($advertiser_id, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardsgetDefaultdo**
> advertisersCreditCardsgetDefaultdo($advertiser_id)

Get Default

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 

try {
    $apiInstance->advertisersCreditCardsgetDefaultdo($advertiser_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsgetDefaultdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardsgetInfodo**
> advertisersCreditCardsgetInfodo($advertiser_id, $credit_card_id)

Get Info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$credit_card_id = 56; // int | 

try {
    $apiInstance->advertisersCreditCardsgetInfodo($advertiser_id, $credit_card_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **credit_card_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardssetDefaultdo**
> advertisersCreditCardssetDefaultdo($advertiser_id, $credit_card_id)

Set Default

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$credit_card_id = 56; // int | 

try {
    $apiInstance->advertisersCreditCardssetDefaultdo($advertiser_id, $credit_card_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardssetDefaultdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **credit_card_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardsupdatePaymentProfileIDdo**
> advertisersCreditCardsupdatePaymentProfileIDdo($credit_card_id, $advertiser_id, $payment_profile_id, $exp_month, $exp_year, $address, $address2, $city, $state, $zip_code, $country)

Update Payment Profile ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_card_id = 56; // int | 
$advertiser_id = 56; // int | 
$payment_profile_id = "payment_profile_id_example"; // string | 
$exp_month = "exp_month_example"; // string | 
$exp_year = "exp_year_example"; // string | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$city = "city_example"; // string | 
$state = "state_example"; // string | 
$zip_code = "zip_code_example"; // string | 
$country = "country_example"; // string | 

try {
    $apiInstance->advertisersCreditCardsupdatePaymentProfileIDdo($credit_card_id, $advertiser_id, $payment_profile_id, $exp_month, $exp_year, $address, $address2, $city, $state, $zip_code, $country);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsupdatePaymentProfileIDdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_card_id** | **int**|  |
 **advertiser_id** | **int**|  |
 **payment_profile_id** | **string**|  | [optional]
 **exp_month** | **string**|  | [optional]
 **exp_year** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **zip_code** | **string**|  | [optional]
 **country** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersCreditCardsupdatedo**
> advertisersCreditCardsupdatedo($credit_card_id, $advertiser_id, $name_on_card, $exp_month, $exp_year, $address, $city, $state, $zip_code, $country, $address2)

Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\AdvertiserscreditcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_card_id = 56; // int | 
$advertiser_id = 56; // int | 
$name_on_card = "name_on_card_example"; // string | 
$exp_month = "exp_month_example"; // string | 
$exp_year = "exp_year_example"; // string | 
$address = "address_example"; // string | 
$city = "city_example"; // string | 
$state = "state_example"; // string | 
$zip_code = "zip_code_example"; // string | 
$country = "country_example"; // string | 
$address2 = "address2_example"; // string | 

try {
    $apiInstance->advertisersCreditCardsupdatedo($credit_card_id, $advertiser_id, $name_on_card, $exp_month, $exp_year, $address, $city, $state, $zip_code, $country, $address2);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscreditcardsApi->advertisersCreditCardsupdatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_card_id** | **int**|  |
 **advertiser_id** | **int**|  |
 **name_on_card** | **string**|  |
 **exp_month** | **string**|  |
 **exp_year** | **string**|  |
 **address** | **string**|  |
 **city** | **string**|  |
 **state** | **string**|  |
 **zip_code** | **string**|  |
 **country** | **string**|  |
 **address2** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

