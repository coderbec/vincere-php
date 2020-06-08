# Swagger\Client\TalentPoolApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCandidateTalentPools**](TalentPoolApi.md#getcandidatetalentpools) | **GET** /talentpools/candidate/{candidate_id}/user/{user_id} | GET: Talent pools of a candidate based on user&#x27;s permission
[**getUserTalentPools**](TalentPoolApi.md#getusertalentpools) | **GET** /talentpools/user/{user_id} | GET: Talent pools a user can use
[**putCandidateTalentPools**](TalentPoolApi.md#putcandidatetalentpools) | **PUT** /talentpools/candidate/{candidate_id}/user/{user_id} | PUT: Update talent pools of a candidate based on user&#x27;s permission

# **getCandidateTalentPools**
> \Swagger\Client\Model\InlineResponse20061 getCandidateTalentPools($candidate_id, $user_id)

GET: Talent pools of a candidate based on user's permission

Get talent pools of a candidate based on user's permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TalentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$candidate_id = 56; // int | ID of candidate
$user_id = 56; // int | ID of user

try {
    $result = $apiInstance->getCandidateTalentPools($candidate_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TalentPoolApi->getCandidateTalentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **candidate_id** | **int**| ID of candidate |
 **user_id** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTalentPools**
> \Swagger\Client\Model\InlineResponse20061 getUserTalentPools($user_id)

GET: Talent pools a user can use

Get talent pools a user can use to add candidates to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TalentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of user

try {
    $result = $apiInstance->getUserTalentPools($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TalentPoolApi->getUserTalentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCandidateTalentPools**
> \Swagger\Client\Model\InlineResponse2006 putCandidateTalentPools($body, $candidate_id, $user_id)

PUT: Update talent pools of a candidate based on user's permission

Update list of talent pools of a candidate based on user's permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TalentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | Array of talent pool ids contain the candidate. If it's an empty array, the candidate is removed from the talent pools which are visible to the user described by user_id parameter.
$candidate_id = 56; // int | ID of candidate
$user_id = 56; // int | ID of user

try {
    $result = $apiInstance->putCandidateTalentPools($body, $candidate_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TalentPoolApi->putCandidateTalentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Array of talent pool ids contain the candidate. If it&#x27;s an empty array, the candidate is removed from the talent pools which are visible to the user described by user_id parameter. |
 **candidate_id** | **int**| ID of candidate |
 **user_id** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

