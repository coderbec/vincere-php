# Swagger\Client\ApplicationsApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationBulkPost**](ApplicationsApi.md#applicationbulkpost) | **POST** /application/bulk | POST: Create job applications
[**applicationIdDelete**](ApplicationsApi.md#applicationiddelete) | **DELETE** /application/{id} | DELETE: Delete Applications
[**applicationIdStageNextInterviewPost**](ApplicationsApi.md#applicationidstagenextinterviewpost) | **POST** /application/{id}/stage/next/interview | POST: move application forward to stage interview
[**applicationIdStageNextOfferedPost**](ApplicationsApi.md#applicationidstagenextofferedpost) | **POST** /application/{id}/stage/next/offered | POST: move application forward to stage offered
[**applicationIdStageNextOnboardingPost**](ApplicationsApi.md#applicationidstagenextonboardingpost) | **POST** /application/{id}/stage/next/onboarding | POST: move application forward to stage onboarding
[**applicationIdStageNextPlacedPost**](ApplicationsApi.md#applicationidstagenextplacedpost) | **POST** /application/{id}/stage/next/placed | POST: move application forward to stage placed
[**applicationIdStageNextSentPost**](ApplicationsApi.md#applicationidstagenextsentpost) | **POST** /application/{id}/stage/next/sent | POST: move application forward to stage sent
[**applicationLogListRangeGet**](ApplicationsApi.md#applicationloglistrangeget) | **GET** /application/log/list_range | GET: Get application logs on range
[**applicationPost**](ApplicationsApi.md#applicationpost) | **POST** /application | POST: Create job application
[**applicationSubstatusUpdate**](ApplicationsApi.md#applicationsubstatusupdate) | **PUT** /application/{id}/substatus | PUT: Update Application&#x27;s Substatus
[**candidateIdApplicationsStatusGet**](ApplicationsApi.md#candidateidapplicationsstatusget) | **GET** /candidate/{id}/applications/status | GET: Get summary status of each applications of candidate
[**countAppByCandAndStage**](ApplicationsApi.md#countappbycandandstage) | **POST** /candidate/{id}/application/stage/count | POST: count candidate&#x27;s applications by stage
[**countAppByFilter**](ApplicationsApi.md#countappbyfilter) | **POST** /application/filter/count | POST: Count applications by filter
[**countAppByPosAndStage**](ApplicationsApi.md#countappbyposandstage) | **POST** /position/{id}/application/stage/count | POST: Count job&#x27;s applications by stage
[**countAppByStage**](ApplicationsApi.md#countappbystage) | **POST** /application/stage/count | POST: Count applications by stage
[**getAppByCand**](ApplicationsApi.md#getappbycand) | **GET** /candidate/{id}/applications | GET: candidate&#x27;s applications
[**getAppByCandAndStage**](ApplicationsApi.md#getappbycandandstage) | **POST** /candidate/{id}/application/stage/list | POST: search candidate&#x27;s applications by stage
[**getAppByFilter**](ApplicationsApi.md#getappbyfilter) | **POST** /application/filter | POST: search applications by filter
[**getAppById**](ApplicationsApi.md#getappbyid) | **GET** /application/{id} | GET: Application details
[**getAppByPos**](ApplicationsApi.md#getappbypos) | **GET** /position/{id}/applications | GET: job&#x27;s applications
[**getAppByPosAndStage**](ApplicationsApi.md#getappbyposandstage) | **POST** /position/{id}/application/stage/list | POST: search job&#x27;s applications by stage
[**getAppByStage**](ApplicationsApi.md#getappbystage) | **POST** /application/stage/list | POST: search applications by stage
[**getAppLogById**](ApplicationsApi.md#getapplogbyid) | **GET** /application/{id}/log/list | GET: Get application stage logs
[**rejectApplication**](ApplicationsApi.md#rejectapplication) | **POST** /application/{id}/stage/reject | POST: Reject Application

# **applicationBulkPost**
> \Swagger\Client\Model\InlineResponse200[] applicationBulkPost($body)

POST: Create job applications

Create new job applications by combining the given candidate Ids and job Ids. The maximum number of applications to be created is 10. You must choose either the shortlisted or sent stage for the application stage. To move the candidate along in the application stage, you will need to call another API object as shown below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | Application details to create

try {
    $result = $apiInstance->applicationBulkPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)| Application details to create |

### Return type

[**\Swagger\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIdDelete**
> \Swagger\Client\Model\InlineResponse2002 applicationIdDelete($id)

DELETE: Delete Applications

Delete a specific application. The applications must be in stage **SHORTLISTED** or **SENT**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIdStageNextInterviewPost**
> \Swagger\Client\Model\InlineResponse200 applicationIdStageNextInterviewPost($body, $id)

POST: move application forward to stage interview

Move the application forward to stage interview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | details to move forward
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationIdStageNextInterviewPost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationIdStageNextInterviewPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)| details to move forward |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIdStageNextOfferedPost**
> \Swagger\Client\Model\InlineResponse200 applicationIdStageNextOfferedPost($body, $id)

POST: move application forward to stage offered

Move the application forward to stage offered.  **For stage OFFER, currently only support to create offer of job type PERMANENT and employment type FULL_TIME.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | details to move forward
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationIdStageNextOfferedPost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationIdStageNextOfferedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)| details to move forward |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIdStageNextOnboardingPost**
> \Swagger\Client\Model\InlineResponse200 applicationIdStageNextOnboardingPost($body, $id)

POST: move application forward to stage onboarding

Move the application forward to stage onboarding.  **If application which does not have offer before, must provide information to create an offer.**  **And, currently only support to create offer of job type PERMANENT and employment type FULL_TIME.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | details to move forward
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationIdStageNextOnboardingPost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationIdStageNextOnboardingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)| details to move forward |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIdStageNextPlacedPost**
> \Swagger\Client\Model\InlineResponse200 applicationIdStageNextPlacedPost($body, $id)

POST: move application forward to stage placed

Move the application forward to stage placed.  **If application which does not have offer before, must provide information to create an offer.**  **And, currently only support to create offer of job type PERMANENT and employment type FULL_TIME.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | details to move forward
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationIdStageNextPlacedPost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationIdStageNextPlacedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)| details to move forward |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIdStageNextSentPost**
> \Swagger\Client\Model\InlineResponse200 applicationIdStageNextSentPost($body, $id)

POST: move application forward to stage sent

Move the application forward to stage sent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | details to move forward
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationIdStageNextSentPost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationIdStageNextSentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)| details to move forward |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationLogListRangeGet**
> \Swagger\Client\Model\InlineResponse2005[] applicationLogListRangeGet($start_date, $end_date, $index)

GET: Get application logs on range

Get application logs on range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | The Date start of range. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\", Ex 2018-04-05T00:00:00.000Z
$end_date = "end_date_example"; // string | The Date end of range. That must to be greater Start Date and must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\", Ex 2018-04-07T00:00:00.000Z
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->applicationLogListRangeGet($start_date, $end_date, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationLogListRangeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| The Date start of range. Must be in format \&quot;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSS&#x27;Z&#x27;\&quot;, Ex 2018-04-05T00:00:00.000Z |
 **end_date** | **string**| The Date end of range. That must to be greater Start Date and must be in format \&quot;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSS&#x27;Z&#x27;\&quot;, Ex 2018-04-07T00:00:00.000Z |
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationPost**
> \Swagger\Client\Model\InlineResponse200 applicationPost($body)

POST: Create job application

Create a new job application. When creating a new job application in Vincere through our API v2 you must choose either the shortlisted or sent stage for the application stage. To move the candidate along in the application stage, you will need to call another API object as shown below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | Application details to create

try {
    $result = $apiInstance->applicationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)| Application details to create |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationSubstatusUpdate**
> \Swagger\Client\Model\InlineResponse200 applicationSubstatusUpdate($body, $id)

PUT: Update Application's Substatus

Update substatus of an existing application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int | substatus id
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationSubstatusUpdate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationSubstatusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int**](../Model/int.md)| substatus id |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidateIdApplicationsStatusGet**
> \Swagger\Client\Model\InlineResponse2008 candidateIdApplicationsStatusGet($id)

GET: Get summary status of each applications of candidate

Return the summary status of each application of this candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->candidateIdApplicationsStatusGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->candidateIdApplicationsStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countAppByCandAndStage**
> int countAppByCandAndStage($id)

POST: count candidate's applications by stage

Get the number of candidate's applications which are in the given stages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->countAppByCandAndStage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->countAppByCandAndStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

**int**

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countAppByFilter**
> int countAppByFilter()

POST: Count applications by filter

Get the number of applications which are in the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->countAppByFilter();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->countAppByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countAppByPosAndStage**
> int countAppByPosAndStage($id)

POST: Count job's applications by stage

Get the number of job's applications which are in the given stages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->countAppByPosAndStage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->countAppByPosAndStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

**int**

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countAppByStage**
> int countAppByStage()

POST: Count applications by stage

**DEPRECATED. Please use [Count Application By Filter](documentation.html#operation/countAppByFilter)**  Get the number of applications which are in the given stages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->countAppByStage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->countAppByStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppByCand**
> \Swagger\Client\Model\InlineResponse2003 getAppByCand($id, $index)

GET: candidate's applications

Get candidate's applications.  Each call returns a slice of maximum 25 applications. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->getAppByCand($id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppByCand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppByCandAndStage**
> \Swagger\Client\Model\InlineResponse2003 getAppByCandAndStage($id, $index)

POST: search candidate's applications by stage

Get candidate's applications which are in the given stages.  Each call returns a slice of maximum 25 applications. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->getAppByCandAndStage($id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppByCandAndStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppByFilter**
> \Swagger\Client\Model\InlineResponse2003 getAppByFilter($index)

POST: search applications by filter

Get applications which are in the given filter.  Each call returns a slice of maximum 25 applications. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->getAppByFilter($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppById**
> \Swagger\Client\Model\InlineResponse2001 getAppById($id)

GET: Application details

Get a specific application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->getAppById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppByPos**
> \Swagger\Client\Model\InlineResponse2003 getAppByPos($id, $index)

GET: job's applications

Get job's applications.  Each call returns a slice of maximum 25 applications. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->getAppByPos($id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppByPos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppByPosAndStage**
> \Swagger\Client\Model\InlineResponse2003 getAppByPosAndStage($id, $index)

POST: search job's applications by stage

Get job's applications which are in the given stages.  Each call returns a slice of maximum 25 applications. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->getAppByPosAndStage($id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppByPosAndStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppByStage**
> \Swagger\Client\Model\InlineResponse2003 getAppByStage($index)

POST: search applications by stage

**DEPRECATED. Please use [Search Application By Filter](documentation.html#operation/getAppByFilter)**  Get applications which are in the given stages.  Each call returns a slice of maximum 25 applications. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->getAppByStage($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppByStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppLogById**
> \Swagger\Client\Model\InlineResponse2005[] getAppLogById($id)

GET: Get application stage logs

Get application logs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->getAppLogById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getAppLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectApplication**
> \Swagger\Client\Model\InlineResponse200 rejectApplication($id)

POST: Reject Application

Reject the application.  An application can only be rejected once.  Currently, only possible to reject application in stage shortlisted or sent or in stage interviewing but does not have an on-going interview.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Application

try {
    $result = $apiInstance->rejectApplication($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->rejectApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

