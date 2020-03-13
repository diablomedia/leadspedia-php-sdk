# Leadspedia\AdvertisersContactsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersContactschangePassworddo**](AdvertisersContactsApi.md#advertisersContactschangePassworddo) | **POST** /advertisersContacts/changePassword.do | Change Password
[**advertisersContactschangeStatusdo**](AdvertisersContactsApi.md#advertisersContactschangeStatusdo) | **POST** /advertisersContacts/changeStatus.do | Change Status
[**advertisersContactscreatedo**](AdvertisersContactsApi.md#advertisersContactscreatedo) | **POST** /advertisersContacts/create.do | Create
[**advertisersContactsdeletedo**](AdvertisersContactsApi.md#advertisersContactsdeletedo) | **POST** /advertisersContacts/delete.do | Delete
[**advertisersContactsgetAlldo**](AdvertisersContactsApi.md#advertisersContactsgetAlldo) | **GET** /advertisersContacts/getAll.do | Get All
[**advertisersContactsgetInfodo**](AdvertisersContactsApi.md#advertisersContactsgetInfodo) | **GET** /advertisersContacts/getInfo.do | Get Info
[**advertisersContactsupdatedo**](AdvertisersContactsApi.md#advertisersContactsupdatedo) | **POST** /advertisersContacts/update.do | Update
[**advertisersContactsverifyCredentialsdo**](AdvertisersContactsApi.md#advertisersContactsverifyCredentialsdo) | **POST** /advertisersContacts/verifyCredentials.do | Verify Credentials



## advertisersContactschangePassworddo

> advertisersContactschangePassworddo($contactID, $oldPassword, $newPassword)

Change Password

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$oldPassword = 'oldPassword_example'; // string | 
$newPassword = 'newPassword_example'; // string | 

try {
    $apiInstance->advertisersContactschangePassworddo($contactID, $oldPassword, $newPassword);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactschangePassworddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **oldPassword** | **string**|  |
 **newPassword** | **string**|  |

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


## advertisersContactschangeStatusdo

> advertisersContactschangeStatusdo($contactID, $status)

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$status = 'status_example'; // string | 

try {
    $apiInstance->advertisersContactschangeStatusdo($contactID, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **status** | **string**|  |

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


## advertisersContactscreatedo

> advertisersContactscreatedo($advertiserID, $firstName, $lastName, $emailAddress, $password, $jobTitle, $phoneNumber, $portalAccess, $status)

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int | 
$firstName = 'firstName_example'; // string | 
$lastName = 'lastName_example'; // string | 
$emailAddress = 'emailAddress_example'; // string | 
$password = 'password_example'; // string | 
$jobTitle = 'jobTitle_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$portalAccess = 'No'; // string | 
$status = 'Active'; // string | 

try {
    $apiInstance->advertisersContactscreatedo($advertiserID, $firstName, $lastName, $emailAddress, $password, $jobTitle, $phoneNumber, $portalAccess, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactscreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **firstName** | **string**|  |
 **lastName** | **string**|  |
 **emailAddress** | [**string**](../Model/.md)|  |
 **password** | **string**|  |
 **jobTitle** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **portalAccess** | **string**|  | [optional] [default to &#39;No&#39;]
 **status** | **string**|  | [optional] [default to &#39;Active&#39;]

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


## advertisersContactsdeletedo

> advertisersContactsdeletedo($contactID)

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 

try {
    $apiInstance->advertisersContactsdeletedo($contactID);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |

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


## advertisersContactsgetAlldo

> object advertisersContactsgetAlldo($contactID, $advertiserID, $portalAccess, $start, $limit)

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$advertiserID = 56; // int | 
$portalAccess = 'portalAccess_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->advertisersContactsgetAlldo($contactID, $advertiserID, $portalAccess, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **portalAccess** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersContactsgetInfodo

> object advertisersContactsgetInfodo($contactID)

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 

try {
    $result = $apiInstance->advertisersContactsgetInfodo($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## advertisersContactsupdatedo

> advertisersContactsupdatedo($contactID, $firstName, $lastName, $jobTitle, $emailAddress, $phoneNumber, $officePhone, $ext, $portalAccess, $role, $massEmail, $permissionAccount, $permissionBilling, $permissionOffers, $permissionReports, $permissionUsers)

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$firstName = 'firstName_example'; // string | 
$lastName = 'lastName_example'; // string | 
$jobTitle = 'jobTitle_example'; // string | 
$emailAddress = 'emailAddress_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$officePhone = 'officePhone_example'; // string | 
$ext = 'ext_example'; // string | 
$portalAccess = 'portalAccess_example'; // string | 
$role = 'role_example'; // string | 
$massEmail = 'massEmail_example'; // string | 
$permissionAccount = 'permissionAccount_example'; // string | 
$permissionBilling = 'permissionBilling_example'; // string | 
$permissionOffers = 'permissionOffers_example'; // string | 
$permissionReports = 'permissionReports_example'; // string | 
$permissionUsers = 'permissionUsers_example'; // string | 

try {
    $apiInstance->advertisersContactsupdatedo($contactID, $firstName, $lastName, $jobTitle, $emailAddress, $phoneNumber, $officePhone, $ext, $portalAccess, $role, $massEmail, $permissionAccount, $permissionBilling, $permissionOffers, $permissionReports, $permissionUsers);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsupdatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **firstName** | **string**|  | [optional]
 **lastName** | **string**|  | [optional]
 **jobTitle** | **string**|  | [optional]
 **emailAddress** | [**string**](../Model/.md)|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **officePhone** | **string**|  | [optional]
 **ext** | **string**|  | [optional]
 **portalAccess** | **string**|  | [optional]
 **role** | **string**|  | [optional]
 **massEmail** | **string**|  | [optional]
 **permissionAccount** | **string**|  | [optional]
 **permissionBilling** | **string**|  | [optional]
 **permissionOffers** | **string**|  | [optional]
 **permissionReports** | **string**|  | [optional]
 **permissionUsers** | **string**|  | [optional]

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


## advertisersContactsverifyCredentialsdo

> advertisersContactsverifyCredentialsdo($emailAddress, $password)

Verify Credentials

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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailAddress = 'emailAddress_example'; // string | 
$password = 'password_example'; // string | 

try {
    $apiInstance->advertisersContactsverifyCredentialsdo($emailAddress, $password);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsverifyCredentialsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailAddress** | [**string**](../Model/.md)|  |
 **password** | **string**|  |

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
