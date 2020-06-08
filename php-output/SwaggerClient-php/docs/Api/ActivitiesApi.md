# Swagger\Client\ActivitiesApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityCommentCommentIdCandidatesGet**](ActivitiesApi.md#activitycommentcommentidcandidatesget) | **GET** /activity/comment/{comment_id}/candidates | GET Comment&#x27;s linked Candidates
[**activityCommentCommentIdCategoriesGet**](ActivitiesApi.md#activitycommentcommentidcategoriesget) | **GET** /activity/comment/{comment_id}/categories | GET Comment&#x27;s categories
[**activityCommentCommentIdCompaniesGet**](ActivitiesApi.md#activitycommentcommentidcompaniesget) | **GET** /activity/comment/{comment_id}/companies | GET Comment&#x27;s linked Companies
[**activityCommentCommentIdContactsGet**](ActivitiesApi.md#activitycommentcommentidcontactsget) | **GET** /activity/comment/{comment_id}/contacts | GET Comment&#x27;s linked Contacts
[**activityCommentCommentIdGet**](ActivitiesApi.md#activitycommentcommentidget) | **GET** /activity/comment/{comment_id} | GET Comment basic info
[**activityCommentCommentIdPositionsGet**](ActivitiesApi.md#activitycommentcommentidpositionsget) | **GET** /activity/comment/{comment_id}/positions | GET Comment&#x27;s linked Jobs
[**activityMeetingCommentIdCandidatesGet**](ActivitiesApi.md#activitymeetingcommentidcandidatesget) | **GET** /activity/meeting/{comment_id}/candidates | GET Meeting&#x27;s linked Candidates
[**activityMeetingCommentIdCategoriesGet**](ActivitiesApi.md#activitymeetingcommentidcategoriesget) | **GET** /activity/meeting/{comment_id}/categories | GET Meeting&#x27;s categories
[**activityMeetingCommentIdGet**](ActivitiesApi.md#activitymeetingcommentidget) | **GET** /activity/meeting/{comment_id} | GET Meeting basic info
[**activityMeetingCommentIdStatusPut**](ActivitiesApi.md#activitymeetingcommentidstatusput) | **PUT** /activity/meeting/{comment_id}/status | Complete Meeting
[**activityMeetingIdAttendeesGet**](ActivitiesApi.md#activitymeetingidattendeesget) | **GET** /activity/meeting/{id}/attendees | GET Meeting&#x27;s attendees
[**activityMeetingIdCompaniesGet**](ActivitiesApi.md#activitymeetingidcompaniesget) | **GET** /activity/meeting/{id}/companies | GET Meeting&#x27;s linked Companies
[**activityMeetingIdContactsGet**](ActivitiesApi.md#activitymeetingidcontactsget) | **GET** /activity/meeting/{id}/contacts | GET Meeting&#x27;s linked Contacts
[**activityMeetingIdPositionsGet**](ActivitiesApi.md#activitymeetingidpositionsget) | **GET** /activity/meeting/{id}/positions | GET Meeting&#x27;s linked Jobs
[**activityMeetingListRangeGet**](ActivitiesApi.md#activitymeetinglistrangeget) | **GET** /activity/meeting/list_range | GET Meeting basic info on range start_date - end_date
[**activityTaskListRangeGet**](ActivitiesApi.md#activitytasklistrangeget) | **GET** /activity/task/list_range | GET Task basic info on range start_date - end_date
[**activityTaskTaskIdCandidatesGet**](ActivitiesApi.md#activitytasktaskidcandidatesget) | **GET** /activity/task/{task_id}/candidates | GET Task&#x27;s linked Candidates
[**activityTaskTaskIdCategoriesGet**](ActivitiesApi.md#activitytasktaskidcategoriesget) | **GET** /activity/task/{task_id}/categories | GET Task&#x27;s categories
[**activityTaskTaskIdCompaniesGet**](ActivitiesApi.md#activitytasktaskidcompaniesget) | **GET** /activity/task/{task_id}/companies | GET Task&#x27;s linked Companies
[**activityTaskTaskIdContactsGet**](ActivitiesApi.md#activitytasktaskidcontactsget) | **GET** /activity/task/{task_id}/contacts | GET Task&#x27;s linked Contacts
[**activityTaskTaskIdFollowersGet**](ActivitiesApi.md#activitytasktaskidfollowersget) | **GET** /activity/task/{task_id}/followers | GET Task&#x27;s followers
[**activityTaskTaskIdGet**](ActivitiesApi.md#activitytasktaskidget) | **GET** /activity/task/{task_id} | GET Task basic info
[**activityTaskTaskIdPositionsGet**](ActivitiesApi.md#activitytasktaskidpositionsget) | **GET** /activity/task/{task_id}/positions | GET Task&#x27;s linked Jobs
[**activityTaskTaskIdStatusPut**](ActivitiesApi.md#activitytasktaskidstatusput) | **PUT** /activity/task/{task_id}/status | Complete Task
[**createComment**](ActivitiesApi.md#createcomment) | **POST** /activity/comment | POST: Create Comment
[**createMeeting**](ActivitiesApi.md#createmeeting) | **POST** /activity/meeting | POST: Create Meeting
[**createTask**](ActivitiesApi.md#createtask) | **POST** /activity/task | POST: Create Task
[**searchCandidateActivities**](ActivitiesApi.md#searchcandidateactivities) | **POST** /candidate/activities | POST: Search candidate&#x27;s activities
[**searchCompanyActivities**](ActivitiesApi.md#searchcompanyactivities) | **POST** /company/activities | POST: Search company&#x27;s activities
[**searchContactActivities**](ActivitiesApi.md#searchcontactactivities) | **POST** /contact/activities | POST: Search contact&#x27;s activities
[**searchPositionActivities**](ActivitiesApi.md#searchpositionactivities) | **POST** /position/activities | POST: Search position&#x27;s activities
[**searchUserActivities**](ActivitiesApi.md#searchuseractivities) | **POST** /user/activities | POST: Search user&#x27;s activities

# **activityCommentCommentIdCandidatesGet**
> \Swagger\Client\Model\InlineResponse2007[] activityCommentCommentIdCandidatesGet($comment_id)

GET Comment's linked Candidates

return candidates linked the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdCandidatesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityCommentCommentIdCandidatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityCommentCommentIdCategoriesGet**
> \Swagger\Client\Model\InlineResponse20050[] activityCommentCommentIdCategoriesGet($comment_id)

GET Comment's categories

return categories of the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdCategoriesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityCommentCommentIdCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20050[]**](../Model/InlineResponse20050.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityCommentCommentIdCompaniesGet**
> \Swagger\Client\Model\InlineResponse20023[] activityCommentCommentIdCompaniesGet($comment_id)

GET Comment's linked Companies

return companies linked the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdCompaniesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityCommentCommentIdCompaniesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20023[]**](../Model/InlineResponse20023.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityCommentCommentIdContactsGet**
> \Swagger\Client\Model\InlineResponse20028[] activityCommentCommentIdContactsGet($comment_id)

GET Comment's linked Contacts

return contacts linked the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdContactsGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityCommentCommentIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20028[]**](../Model/InlineResponse20028.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityCommentCommentIdGet**
> \Swagger\Client\Model\InlineResponse20049 activityCommentCommentIdGet($comment_id)

GET Comment basic info

return information of the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityCommentCommentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityCommentCommentIdPositionsGet**
> \Swagger\Client\Model\InlineResponse20051[] activityCommentCommentIdPositionsGet($comment_id)

GET Comment's linked Jobs

return jobs linked the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdPositionsGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityCommentCommentIdPositionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20051[]**](../Model/InlineResponse20051.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingCommentIdCandidatesGet**
> \Swagger\Client\Model\InlineResponse2007[] activityMeetingCommentIdCandidatesGet($comment_id)

GET Meeting's linked Candidates

return candidates linked the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingCommentIdCandidatesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingCommentIdCandidatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingCommentIdCategoriesGet**
> \Swagger\Client\Model\InlineResponse20050[] activityMeetingCommentIdCategoriesGet($comment_id)

GET Meeting's categories

return categories of the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingCommentIdCategoriesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingCommentIdCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20050[]**](../Model/InlineResponse20050.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingCommentIdGet**
> \Swagger\Client\Model\InlineResponse20055 activityMeetingCommentIdGet($comment_id)

GET Meeting basic info

return information of the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingCommentIdGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingCommentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingCommentIdStatusPut**
> \Swagger\Client\Model\InlineResponse20054 activityMeetingCommentIdStatusPut($comment_id)

Complete Meeting

Complete the Meeting if not yet completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingCommentIdStatusPut($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingCommentIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingIdAttendeesGet**
> \Swagger\Client\Model\InlineResponse20041[] activityMeetingIdAttendeesGet($id)

GET Meeting's attendees

return attendees of the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingIdAttendeesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingIdAttendeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20041[]**](../Model/InlineResponse20041.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingIdCompaniesGet**
> \Swagger\Client\Model\InlineResponse20023[] activityMeetingIdCompaniesGet($id)

GET Meeting's linked Companies

return companies linked the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingIdCompaniesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingIdCompaniesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20023[]**](../Model/InlineResponse20023.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingIdContactsGet**
> \Swagger\Client\Model\InlineResponse20028[] activityMeetingIdContactsGet($id)

GET Meeting's linked Contacts

return contacts linked the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingIdContactsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20028[]**](../Model/InlineResponse20028.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingIdPositionsGet**
> \Swagger\Client\Model\InlineResponse20051[] activityMeetingIdPositionsGet($id)

GET Meeting's linked Jobs

return jobs linked the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingIdPositionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingIdPositionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20051[]**](../Model/InlineResponse20051.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingListRangeGet**
> \Swagger\Client\Model\InlineResponse20056[] activityMeetingListRangeGet($start_date, $end_date, $index)

GET Meeting basic info on range start_date - end_date

return list information of the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | The Date start of range. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\", Ex 2018-04-05T00:00:00.000Z
$end_date = "end_date_example"; // string | The Date end of range. That must to be greater Start Date and must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\", Ex 2018-04-07T00:00:00.000Z
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->activityMeetingListRangeGet($start_date, $end_date, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityMeetingListRangeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20056[]**](../Model/InlineResponse20056.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskListRangeGet**
> \Swagger\Client\Model\InlineResponse20057[] activityTaskListRangeGet($start_date, $end_date, $index)

GET Task basic info on range start_date - end_date

return list information of the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | The Date start of range. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\", Ex 2018-04-05T00:00:00.000Z
$end_date = "end_date_example"; // string | The Date end of range. That must to be greater Start Date and must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\", Ex 2018-04-07T00:00:00.000Z
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->activityTaskListRangeGet($start_date, $end_date, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskListRangeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20057[]**](../Model/InlineResponse20057.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdCandidatesGet**
> \Swagger\Client\Model\InlineResponse2007[] activityTaskTaskIdCandidatesGet($task_id)

GET Task's linked Candidates

return candidates linked the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdCandidatesGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdCandidatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdCategoriesGet**
> \Swagger\Client\Model\InlineResponse20050[] activityTaskTaskIdCategoriesGet($task_id)

GET Task's categories

return categories of the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdCategoriesGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20050[]**](../Model/InlineResponse20050.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdCompaniesGet**
> \Swagger\Client\Model\InlineResponse20023[] activityTaskTaskIdCompaniesGet($task_id)

GET Task's linked Companies

return companies linked the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdCompaniesGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdCompaniesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20023[]**](../Model/InlineResponse20023.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdContactsGet**
> \Swagger\Client\Model\InlineResponse20028[] activityTaskTaskIdContactsGet($task_id)

GET Task's linked Contacts

return contacts linked the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdContactsGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20028[]**](../Model/InlineResponse20028.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdFollowersGet**
> \Swagger\Client\Model\InlineResponse20041[] activityTaskTaskIdFollowersGet($task_id)

GET Task's followers

return followers of the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdFollowersGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdFollowersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20041[]**](../Model/InlineResponse20041.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdGet**
> \Swagger\Client\Model\InlineResponse20053 activityTaskTaskIdGet($task_id)

GET Task basic info

return information of the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdPositionsGet**
> \Swagger\Client\Model\InlineResponse20051[] activityTaskTaskIdPositionsGet($task_id)

GET Task's linked Jobs

return jobs linked the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdPositionsGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdPositionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20051[]**](../Model/InlineResponse20051.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdStatusPut**
> \Swagger\Client\Model\InlineResponse20052 activityTaskTaskIdStatusPut($task_id)

Complete Task

Complete the Task if not yet completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdStatusPut($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activityTaskTaskIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createComment**
> \Swagger\Client\Model\InlineResponse20048 createComment($body)

POST: Create Comment

**NOTE: Depends on the value of field \"main_entity_type\"**:  If \"CANDIDATE\", it is required that \"candidate_ids\" is set with ONLY 1 ID.  If \"COMPANY\", it is required that \"company_ids\" is set with ONLY 1 ID.  If \"CONTACT\", it is required that \"contact_ids\" is set with ONLY 1 ID.  If \"JOB\", it is required that \"position_ids\" is set with ONLY 1 ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body36(); // \Swagger\Client\Model\Body36 | Comment to create

try {
    $result = $apiInstance->createComment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body36**](../Model/Body36.md)| Comment to create |

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMeeting**
> \Swagger\Client\Model\InlineResponse20054 createMeeting($body)

POST: Create Meeting

**NOTE: Depends on the value of field \"main_entity_type\"**:  If \"CANDIDATE\", it is required that \"candidate_ids\" is set with ONLY 1 ID.  If \"CONTACT\", it is required that \"contact_ids\" is set with ONLY 1 ID.  If \"OTHER_MEETING\", it is required that \"custom_name\" is set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body38(); // \Swagger\Client\Model\Body38 | Meeting to create

try {
    $result = $apiInstance->createMeeting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body38**](../Model/Body38.md)| Meeting to create |

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTask**
> \Swagger\Client\Model\InlineResponse20052 createTask($body)

POST: Create Task

**NOTE: Depends on the value of field \"main_entity_type\"**:  If \"CANDIDATE\", it is required that \"candidate_ids\" is set with ONLY 1 ID.  If \"CONTACT\", it is required that \"contact_ids\" is set with ONLY 1 ID.  If \"JOB\", it is required that \"position_ids\" is set with ONLY 1 ID.  If \"PERSONAL\", it is required that \"custom_name\" is set.  If \"PROJECT\", it is required that \"custom_name\" is set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body37(); // \Swagger\Client\Model\Body37 | Task to create

try {
    $result = $apiInstance->createTask($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body37**](../Model/Body37.md)| Task to create |

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCandidateActivities**
> \Swagger\Client\Model\InlineResponse20047 searchCandidateActivities($body)

POST: Search candidate's activities

Search activities linked to a Candidate.                  Each call returns a slice of maximum 25 activities. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body32(); // \Swagger\Client\Model\Body32 | criteria to search for activities

try {
    $result = $apiInstance->searchCandidateActivities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->searchCandidateActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body32**](../Model/Body32.md)| criteria to search for activities |

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCompanyActivities**
> \Swagger\Client\Model\InlineResponse20047 searchCompanyActivities($body)

POST: Search company's activities

Search activities linked to a Company.                  Each call returns a slice of maximum 25 activities. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body35(); // \Swagger\Client\Model\Body35 | criteria to search for activities

try {
    $result = $apiInstance->searchCompanyActivities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->searchCompanyActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body35**](../Model/Body35.md)| criteria to search for activities |

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContactActivities**
> \Swagger\Client\Model\InlineResponse20047 searchContactActivities($body)

POST: Search contact's activities

Search activities linked to a Contact.          Each call returns a slice of maximum 25 activities. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body33(); // \Swagger\Client\Model\Body33 | criteria to search for activities

try {
    $result = $apiInstance->searchContactActivities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->searchContactActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body33**](../Model/Body33.md)| criteria to search for activities |

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPositionActivities**
> \Swagger\Client\Model\InlineResponse20047 searchPositionActivities($body)

POST: Search position's activities

Search activities linked to a Position.                  Each call returns a slice of maximum 25 activities. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body34(); // \Swagger\Client\Model\Body34 | criteria to search for activities

try {
    $result = $apiInstance->searchPositionActivities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->searchPositionActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body34**](../Model/Body34.md)| criteria to search for activities |

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUserActivities**
> \Swagger\Client\Model\InlineResponse20047 searchUserActivities($body)

POST: Search user's activities

Search activities linked to a User.                  Each call returns a slice of maximum 25 activities. Each slice has its index and a field to indicate if it is the last slice.  To get the next slice, need to repeat the call with the index of the next slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body31(); // \Swagger\Client\Model\Body31 | criteria to search for activities

try {
    $result = $apiInstance->searchUserActivities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->searchUserActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body31**](../Model/Body31.md)| criteria to search for activities |

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

