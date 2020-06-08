# Swagger\Client\DistributionListApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactDistributionLists**](DistributionListApi.md#getcontactdistributionlists) | **GET** /distributionlists/contact/{contact_id}/user/{user_id} | GET: Distribution lists of a contact based on user&#x27;s permission
[**getUserDistributionLists**](DistributionListApi.md#getuserdistributionlists) | **GET** /distributionlists/user/{user_id} | GET: Distribution lists a user can use
[**putContactDistributionLists**](DistributionListApi.md#putcontactdistributionlists) | **PUT** /distributionlists/contact/{contact_id}/user/{user_id} | PUT: Update distribution lists of a contact based on user&#x27;s permission

# **getContactDistributionLists**
> \Swagger\Client\Model\InlineResponse20060 getContactDistributionLists($contact_id, $user_id)

GET: Distribution lists of a contact based on user's permission

Get distribution lists of a contact based on user's permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DistributionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact
$user_id = 56; // int | ID of user

try {
    $result = $apiInstance->getContactDistributionLists($contact_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionListApi->getContactDistributionLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| ID of contact |
 **user_id** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDistributionLists**
> \Swagger\Client\Model\InlineResponse20060 getUserDistributionLists($user_id)

GET: Distribution lists a user can use

Get distribution lists a user can use to add contacts to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DistributionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of user

try {
    $result = $apiInstance->getUserDistributionLists($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionListApi->getUserDistributionLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactDistributionLists**
> \Swagger\Client\Model\InlineResponse20027 putContactDistributionLists($body, $contact_id, $user_id)

PUT: Update distribution lists of a contact based on user's permission

Update list of distribution list of a contact based on user's permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DistributionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | Array of distribution list ids contain the contact. If it's an empty array, the contact is removed from the distribution lists which are visible to the user described by user_id parameter.
$contact_id = 56; // int | ID of contact
$user_id = 56; // int | ID of user

try {
    $result = $apiInstance->putContactDistributionLists($body, $contact_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionListApi->putContactDistributionLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Array of distribution list ids contain the contact. If it&#x27;s an empty array, the contact is removed from the distribution lists which are visible to the user described by user_id parameter. |
 **contact_id** | **int**| ID of contact |
 **user_id** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

