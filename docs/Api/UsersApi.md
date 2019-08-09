# LeadspediaApi\UsersApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersgetAlldo**](UsersApi.md#usersgetalldo) | **GET** /users/getAll.do | Get All

# **usersgetAlldo**
> object usersgetAlldo($role, $status, $search, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 56; // int | 
$status = "status_example"; // string | 
$search = "search_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->usersgetAlldo($role, $status, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **search** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

