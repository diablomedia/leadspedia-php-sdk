# Leadspedia\AdvertisersContactsApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersContactschangePassworddo()**](AdvertisersContactsApi.md#advertisersContactschangePassworddo) | **POST** /advertisersContacts/changePassword.do | Change Password
[**advertisersContactschangeStatusdo()**](AdvertisersContactsApi.md#advertisersContactschangeStatusdo) | **POST** /advertisersContacts/changeStatus.do | Change Status
[**advertisersContactscreatedo()**](AdvertisersContactsApi.md#advertisersContactscreatedo) | **POST** /advertisersContacts/create.do | Create
[**advertisersContactsdeletedo()**](AdvertisersContactsApi.md#advertisersContactsdeletedo) | **POST** /advertisersContacts/delete.do | Delete
[**advertisersContactsgetAlldo()**](AdvertisersContactsApi.md#advertisersContactsgetAlldo) | **GET** /advertisersContacts/getAll.do | Get All
[**advertisersContactsgetInfodo()**](AdvertisersContactsApi.md#advertisersContactsgetInfodo) | **GET** /advertisersContacts/getInfo.do | Get Info
[**advertisersContactsupdatedo()**](AdvertisersContactsApi.md#advertisersContactsupdatedo) | **POST** /advertisersContacts/update.do | Update
[**advertisersContactsverifyCredentialsdo()**](AdvertisersContactsApi.md#advertisersContactsverifyCredentialsdo) | **POST** /advertisersContacts/verifyCredentials.do | Verify Credentials


## `advertisersContactschangePassworddo()`

```php
advertisersContactschangePassworddo($contactID, $oldPassword, $newPassword): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$contactID = 56; // int
$oldPassword = 'oldPassword_example'; // string
$newPassword = 'newPassword_example'; // string

try {
    $result = $apiInstance->advertisersContactschangePassworddo($contactID, $oldPassword, $newPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactschangePassworddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **oldPassword** | **string**|  |
 **newPassword** | **string**|  |

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

## `advertisersContactschangeStatusdo()`

```php
advertisersContactschangeStatusdo($contactID, $status): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$contactID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->advertisersContactschangeStatusdo($contactID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **status** | **string**|  |

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

## `advertisersContactscreatedo()`

```php
advertisersContactscreatedo($advertiserID, $firstName, $lastName, $emailAddress, $password, $jobTitle, $phoneNumber, $portalAccess, $status): \Leadspedia\Model\Affiliatescreatedo200Response
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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$firstName = 'firstName_example'; // string
$lastName = 'lastName_example'; // string
$emailAddress = 'emailAddress_example'; // string
$password = 'password_example'; // string
$jobTitle = 'jobTitle_example'; // string
$phoneNumber = 'phoneNumber_example'; // string
$portalAccess = 'No'; // string
$status = 'Active'; // string

try {
    $result = $apiInstance->advertisersContactscreatedo($advertiserID, $firstName, $lastName, $emailAddress, $password, $jobTitle, $phoneNumber, $portalAccess, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactscreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserID** | **int**|  |
 **firstName** | **string**|  |
 **lastName** | **string**|  |
 **emailAddress** | **string**|  |
 **password** | **string**|  |
 **jobTitle** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **portalAccess** | **string**|  | [optional] [default to &#39;No&#39;]
 **status** | **string**|  | [optional] [default to &#39;Active&#39;]

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

## `advertisersContactsdeletedo()`

```php
advertisersContactsdeletedo($contactID): \Leadspedia\Model\Affiliatescreatedo200Response
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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int

try {
    $result = $apiInstance->advertisersContactsdeletedo($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |

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

## `advertisersContactsgetAlldo()`

```php
advertisersContactsgetAlldo($contactID, $advertiserID, $portalAccess, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int
$advertiserID = 56; // int
$portalAccess = 'portalAccess_example'; // string
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->advertisersContactsgetAlldo($contactID, $advertiserID, $portalAccess, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersContactsgetInfodo()`

```php
advertisersContactsgetInfodo($contactID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$contactID = 56; // int

try {
    $result = $apiInstance->advertisersContactsgetInfodo($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |

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

## `advertisersContactsupdatedo()`

```php
advertisersContactsupdatedo($contactID, $firstName, $lastName, $jobTitle, $emailAddress, $phoneNumber, $officePhone, $ext, $portalAccess, $role, $massEmail, $permissionAccount, $permissionBilling, $permissionOffers, $permissionReports, $permissionUsers): \Leadspedia\Model\Affiliatescreatedo200Response
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


$apiInstance = new Leadspedia\Api\AdvertisersContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int
$firstName = 'firstName_example'; // string
$lastName = 'lastName_example'; // string
$jobTitle = 'jobTitle_example'; // string
$emailAddress = 'emailAddress_example'; // string
$phoneNumber = 'phoneNumber_example'; // string
$officePhone = 'officePhone_example'; // string
$ext = 'ext_example'; // string
$portalAccess = 'portalAccess_example'; // string
$role = 'role_example'; // string
$massEmail = 'massEmail_example'; // string
$permissionAccount = 'permissionAccount_example'; // string
$permissionBilling = 'permissionBilling_example'; // string
$permissionOffers = 'permissionOffers_example'; // string
$permissionReports = 'permissionReports_example'; // string
$permissionUsers = 'permissionUsers_example'; // string

try {
    $result = $apiInstance->advertisersContactsupdatedo($contactID, $firstName, $lastName, $jobTitle, $emailAddress, $phoneNumber, $officePhone, $ext, $portalAccess, $role, $massEmail, $permissionAccount, $permissionBilling, $permissionOffers, $permissionReports, $permissionUsers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsupdatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **firstName** | **string**|  | [optional]
 **lastName** | **string**|  | [optional]
 **jobTitle** | **string**|  | [optional]
 **emailAddress** | **string**|  | [optional]
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

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advertisersContactsverifyCredentialsdo()`

```php
advertisersContactsverifyCredentialsdo($emailAddress, $password): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$emailAddress = 'emailAddress_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->advertisersContactsverifyCredentialsdo($emailAddress, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersContactsApi->advertisersContactsverifyCredentialsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailAddress** | **string**|  |
 **password** | **string**|  |

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
