# Leadspedia\AffiliatesContactsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliatesContactschangePassworddo**](AffiliatesContactsApi.md#affiliatesContactschangePassworddo) | **POST** /affiliatesContacts/changePassword.do | Change Password
[**affiliatesContactschangeStatusdo**](AffiliatesContactsApi.md#affiliatesContactschangeStatusdo) | **POST** /affiliatesContacts/changeStatus.do | Change Status
[**affiliatesContactscreatedo**](AffiliatesContactsApi.md#affiliatesContactscreatedo) | **POST** /affiliatesContacts/create.do | Create
[**affiliatesContactsdeletedo**](AffiliatesContactsApi.md#affiliatesContactsdeletedo) | **POST** /affiliatesContacts/delete.do | Delete
[**affiliatesContactsgetAlldo**](AffiliatesContactsApi.md#affiliatesContactsgetAlldo) | **GET** /affiliatesContacts/getAll.do | Get All
[**affiliatesContactsgetInfodo**](AffiliatesContactsApi.md#affiliatesContactsgetInfodo) | **GET** /affiliatesContacts/getInfo.do | Get Info
[**affiliatesContactsupdatedo**](AffiliatesContactsApi.md#affiliatesContactsupdatedo) | **POST** /affiliatesContacts/update.do | Update
[**affiliatesContactsverifyCredentialsdo**](AffiliatesContactsApi.md#affiliatesContactsverifyCredentialsdo) | **POST** /affiliatesContacts/verifyCredentials.do | Verify Credentials



## affiliatesContactschangePassworddo

> \Leadspedia\Model\InlineResponse200 affiliatesContactschangePassworddo($contactID, $oldPassword, $newPassword)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$oldPassword = 'oldPassword_example'; // string | 
$newPassword = 'newPassword_example'; // string | 

try {
    $result = $apiInstance->affiliatesContactschangePassworddo($contactID, $oldPassword, $newPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactschangePassworddo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## affiliatesContactschangeStatusdo

> \Leadspedia\Model\InlineResponse200 affiliatesContactschangeStatusdo($contactID, $status)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$status = 'status_example'; // string | 

try {
    $result = $apiInstance->affiliatesContactschangeStatusdo($contactID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |
 **status** | **string**|  |

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


## affiliatesContactscreatedo

> \Leadspedia\Model\InlineResponse200 affiliatesContactscreatedo($affiliateID, $firstName, $lastName, $emailAddress, $password, $jobTitle, $phoneNumber, $portalAccess, $status)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int | 
$firstName = 'firstName_example'; // string | 
$lastName = 'lastName_example'; // string | 
$emailAddress = 'emailAddress_example'; // string | 
$password = 'password_example'; // string | 
$jobTitle = 'jobTitle_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$portalAccess = 'No'; // string | 
$status = 'Active'; // string | 

try {
    $result = $apiInstance->affiliatesContactscreatedo($affiliateID, $firstName, $lastName, $emailAddress, $password, $jobTitle, $phoneNumber, $portalAccess, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactscreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  |
 **firstName** | **string**|  |
 **lastName** | **string**|  |
 **emailAddress** | [**string**](../Model/.md)|  |
 **password** | **string**|  |
 **jobTitle** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **portalAccess** | **string**|  | [optional] [default to &#39;No&#39;]
 **status** | **string**|  | [optional] [default to &#39;Active&#39;]

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


## affiliatesContactsdeletedo

> \Leadspedia\Model\InlineResponse200 affiliatesContactsdeletedo($contactID)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 

try {
    $result = $apiInstance->affiliatesContactsdeletedo($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactsdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |

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


## affiliatesContactsgetAlldo

> \Leadspedia\Model\InlineResponse2001 affiliatesContactsgetAlldo($contactID, $affiliateID, $portalAccess, $start, $limit)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 
$affiliateID = 56; // int | 
$portalAccess = 'portalAccess_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->affiliatesContactsgetAlldo($contactID, $affiliateID, $portalAccess, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **portalAccess** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## affiliatesContactsgetInfodo

> \Leadspedia\Model\InlineResponse2001 affiliatesContactsgetInfodo($contactID)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactID = 56; // int | 

try {
    $result = $apiInstance->affiliatesContactsgetInfodo($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | **int**|  |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## affiliatesContactsupdatedo

> \Leadspedia\Model\InlineResponse200 affiliatesContactsupdatedo($contactID, $firstName, $lastName, $jobTitle, $emailAddress, $phoneNumber, $officePhone, $ext, $portalAccess, $role, $massEmail, $permissionAccount, $permissionBilling, $permissionOffers, $permissionReports, $permissionUsers)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
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
    $result = $apiInstance->affiliatesContactsupdatedo($contactID, $firstName, $lastName, $jobTitle, $emailAddress, $phoneNumber, $officePhone, $ext, $portalAccess, $role, $massEmail, $permissionAccount, $permissionBilling, $permissionOffers, $permissionReports, $permissionUsers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactsupdatedo: ', $e->getMessage(), PHP_EOL;
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

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## affiliatesContactsverifyCredentialsdo

> \Leadspedia\Model\InlineResponse200 affiliatesContactsverifyCredentialsdo($emailAddress, $password)

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


$apiInstance = new Leadspedia\Api\AffiliatesContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailAddress = 'emailAddress_example'; // string | 
$password = 'password_example'; // string | 

try {
    $result = $apiInstance->affiliatesContactsverifyCredentialsdo($emailAddress, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesContactsApi->affiliatesContactsverifyCredentialsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailAddress** | [**string**](../Model/.md)|  |
 **password** | **string**|  |

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

