# Swagger\Client\EmailSubscriptionApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateEmailSubscriptionStatus**](EmailSubscriptionApi.md#updateemailsubscriptionstatus) | **PUT** /email/subscription | PUT: Update email subscription status

# **updateEmailSubscriptionStatus**
> \Swagger\Client\Model\Body45 updateEmailSubscriptionStatus($body)

PUT: Update email subscription status

Update email subscription status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EmailSubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body45(); // \Swagger\Client\Model\Body45 | email subscription

try {
    $result = $apiInstance->updateEmailSubscriptionStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscriptionApi->updateEmailSubscriptionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body45**](../Model/Body45.md)| email subscription |

### Return type

[**\Swagger\Client\Model\Body45**](../Model/Body45.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

