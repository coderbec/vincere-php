# Swagger\Client\FilesApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityCommentCommentIdFilesGet**](FilesApi.md#activitycommentcommentidfilesget) | **GET** /activity/comment/{comment_id}/files | GET Comment&#x27;s attachments
[**activityMeetingCommentIdFilesGet**](FilesApi.md#activitymeetingcommentidfilesget) | **GET** /activity/meeting/{comment_id}/files | GET Meeting&#x27;s attachments
[**activityTaskTaskIdFilesGet**](FilesApi.md#activitytasktaskidfilesget) | **GET** /activity/task/{task_id}/files | GET Task&#x27;s attachments
[**applicationOnboardingDocUpload**](FilesApi.md#applicationonboardingdocupload) | **POST** /application/{id}/file/onboarding | POST: Upload new onboarding document
[**candidateDocUpload**](FilesApi.md#candidatedocupload) | **POST** /candidate/{id}/file | POST: Upload new candidate document
[**candidatePhotoUpload**](FilesApi.md#candidatephotoupload) | **POST** /candidate/{id}/photo | POST: Upload new candidate photo
[**commentDocUpload**](FilesApi.md#commentdocupload) | **POST** /activity/comment/{comment_id}/files | POST: new document for the comment
[**convertDocToHtml**](FilesApi.md#convertdoctohtml) | **POST** /file/converter/html | POST: Convert a document to HTML content
[**deleteallcandidatedocuments**](FilesApi.md#deleteallcandidatedocuments) | **DELETE** /candidate/{id}/files | DELETE: All Candidate&#x27;s documents
[**deletecandidatedocumentbyid**](FilesApi.md#deletecandidatedocumentbyid) | **DELETE** /candidate/{id}/file/{doc_id} | DELETE: Candidate&#x27;s document
[**getcandidatecustomerportalfiles**](FilesApi.md#getcandidatecustomerportalfiles) | **GET** /candidate/{id}/files/customer-portal | GET: Candidate&#x27;s documents shown on a Customer Portal
[**getcandidatedocumentdetail**](FilesApi.md#getcandidatedocumentdetail) | **GET** /candidate/{id}/file/{doc_id} | GET: Candidate&#x27;s document detail
[**getcandidatefiles**](FilesApi.md#getcandidatefiles) | **GET** /candidate/{id}/files | GET: All Candidate&#x27;s documents
[**getcompanylogo**](FilesApi.md#getcompanylogo) | **GET** /company/{id}/logo | GET: Company&#x27;s logo
[**getcontactphoto**](FilesApi.md#getcontactphoto) | **GET** /contact/{id}/photo | GET: Contact&#x27;s photo
[**getjobcompanylogo**](FilesApi.md#getjobcompanylogo) | **GET** /position/{id}/logo | GET: Job&#x27;s company logo
[**meetingDocUpload**](FilesApi.md#meetingdocupload) | **POST** /activity/meeting/{comment_id}/files | POST: Add document to a meeting
[**resumeParsePost**](FilesApi.md#resumeparsepost) | **POST** /resume/parse | POST: Parse a resume into Vincere.
[**taskDocUpload**](FilesApi.md#taskdocupload) | **POST** /activity/task/{task_id}/files | POST: new document for the task
[**uploadCompanyLogo**](FilesApi.md#uploadcompanylogo) | **PUT** /company/{id}/logo | PUT: upload new logo for the company
[**uploadContactPhoto**](FilesApi.md#uploadcontactphoto) | **PUT** /contact/{id}/photo | PUT: upload new photo for the contact

# **activityCommentCommentIdFilesGet**
> \Swagger\Client\Model\InlineResponse20044[] activityCommentCommentIdFilesGet($comment_id)

GET Comment's attachments

return attachments of the Comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->activityCommentCommentIdFilesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->activityCommentCommentIdFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20044[]**](../Model/InlineResponse20044.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityMeetingCommentIdFilesGet**
> \Swagger\Client\Model\InlineResponse20044[] activityMeetingCommentIdFilesGet($comment_id)

GET Meeting's attachments

return attachments of the Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | ID of meeting

try {
    $result = $apiInstance->activityMeetingCommentIdFilesGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->activityMeetingCommentIdFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20044[]**](../Model/InlineResponse20044.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTaskTaskIdFilesGet**
> \Swagger\Client\Model\InlineResponse20044[] activityTaskTaskIdFilesGet($task_id)

GET Task's attachments

return attachments of the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->activityTaskTaskIdFilesGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->activityTaskTaskIdFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20044[]**](../Model/InlineResponse20044.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationOnboardingDocUpload**
> \Swagger\Client\Model\InlineResponse2004 applicationOnboardingDocUpload($body, $id)

POST: Upload new onboarding document

Upload an onboarding document (Resume, offer letter, ...) for an application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5 MB**

$id = 56; // int | ID of Application

try {
    $result = $apiInstance->applicationOnboardingDocUpload($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->applicationOnboardingDocUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)| The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5 MB**
 |
 **id** | **int**| ID of Application |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidateDocUpload**
> \Swagger\Client\Model\InlineResponse20017 candidateDocUpload($body, $id)

POST: Upload new candidate document

Upload a Candidate document (Resume, offer letter, ...)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5 MB**

$id = 56; // int | candidate id

try {
    $result = $apiInstance->candidateDocUpload($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->candidateDocUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body18**](../Model/Body18.md)| The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5 MB**
 |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatePhotoUpload**
> \Swagger\Client\Model\InlineResponse20017 candidatePhotoUpload($body, $id)

POST: Upload new candidate photo

Upload a Candidate photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body19(); // \Swagger\Client\Model\Body19 | The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 800 KB**

$id = 56; // int | candidate id

try {
    $result = $apiInstance->candidatePhotoUpload($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->candidatePhotoUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body19**](../Model/Body19.md)| The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 800 KB**
 |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentDocUpload**
> \Swagger\Client\Model\InlineResponse20017 commentDocUpload($body, $comment_id)

POST: new document for the comment

Upload a comment document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5MB if it is provided through the url.**

$comment_id = 56; // int | ID of comment

try {
    $result = $apiInstance->commentDocUpload($body, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->commentDocUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5MB if it is provided through the url.**
 |
 **comment_id** | **int**| ID of comment |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDocToHtml**
> \Swagger\Client\Model\InlineResponse20046 convertDocToHtml($body)

POST: Convert a document to HTML content

Convert a document to HTML content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body30(); // \Swagger\Client\Model\Body30 | The document needs to be converted. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5 MB**


try {
    $result = $apiInstance->convertDocToHtml($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->convertDocToHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body30**](../Model/Body30.md)| The document needs to be converted. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5 MB**
 |

### Return type

[**\Swagger\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteallcandidatedocuments**
> \Swagger\Client\Model\InlineResponse2002 deleteallcandidatedocuments($id)

DELETE: All Candidate's documents

Delete all documents of candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->deleteallcandidatedocuments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteallcandidatedocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletecandidatedocumentbyid**
> \Swagger\Client\Model\InlineResponse2002 deletecandidatedocumentbyid($id, $doc_id)

DELETE: Candidate's document

Delete document by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$doc_id = 56; // int | document id

try {
    $result = $apiInstance->deletecandidatedocumentbyid($id, $doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deletecandidatedocumentbyid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **doc_id** | **int**| document id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcandidatecustomerportalfiles**
> \Swagger\Client\Model\InlineResponse20018[] getcandidatecustomerportalfiles($id)

GET: Candidate's documents shown on a Customer Portal

Get detail of all candidate's documents which have Customer Portal attribute turned on

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getcandidatecustomerportalfiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getcandidatecustomerportalfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20018[]**](../Model/InlineResponse20018.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcandidatedocumentdetail**
> \Swagger\Client\Model\InlineResponse20018 getcandidatedocumentdetail($id, $doc_id)

GET: Candidate's document detail

get candidate's document detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$doc_id = 56; // int | document id

try {
    $result = $apiInstance->getcandidatedocumentdetail($id, $doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getcandidatedocumentdetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **doc_id** | **int**| document id |

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcandidatefiles**
> \Swagger\Client\Model\InlineResponse20018[] getcandidatefiles($id, $original_cv, $doc_type_ids)

GET: All Candidate's documents

get detail of all documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$original_cv = true; // bool | File is the original CV.
$doc_type_ids = array(56); // int[] | Ids of document types. Please refer to reference section for candidate document types.

try {
    $result = $apiInstance->getcandidatefiles($id, $original_cv, $doc_type_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getcandidatefiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **original_cv** | **bool**| File is the original CV. | [optional]
 **doc_type_ids** | [**int[]**](../Model/int.md)| Ids of document types. Please refer to reference section for candidate document types. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018[]**](../Model/InlineResponse20018.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcompanylogo**
> \Swagger\Client\Model\InlineResponse20026 getcompanylogo($id)

GET: Company's logo

get company logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of company

try {
    $result = $apiInstance->getcompanylogo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getcompanylogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcontactphoto**
> \Swagger\Client\Model\InlineResponse20026 getcontactphoto($id)

GET: Contact's photo

get contact photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getcontactphoto($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getcontactphoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getjobcompanylogo**
> \Swagger\Client\Model\InlineResponse20026 getjobcompanylogo($id)

GET: Job's company logo

get job's company logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getjobcompanylogo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getjobcompanylogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingDocUpload**
> \Swagger\Client\Model\InlineResponse20017 meetingDocUpload($body, $comment_id)

POST: Add document to a meeting

Upload a document and link to a meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5MB if it is provided through the url.**

$comment_id = 56; // int | ID of meeting

try {
    $result = $apiInstance->meetingDocUpload($body, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->meetingDocUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5MB if it is provided through the url.**
 |
 **comment_id** | **int**| ID of meeting |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resumeParsePost**
> \Swagger\Client\Model\InlineResponse20045 resumeParsePost($body)

POST: Parse a resume into Vincere.

Parse a resume using Daxtra parsing and we will return a candidate json object.  **Warning:  this API will consume your Auto Parsed credits.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body29(); // \Swagger\Client\Model\Body29 | The resume needs to be parsed.      

**The file size must not be greater than 5 MB**


try {
    $result = $apiInstance->resumeParsePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->resumeParsePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body29**](../Model/Body29.md)| The resume needs to be parsed.      

**The file size must not be greater than 5 MB**
 |

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskDocUpload**
> \Swagger\Client\Model\InlineResponse20017 taskDocUpload($body, $task_id)

POST: new document for the task

Upload a task document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5MB if it is provided through the url.**

$task_id = 56; // int | ID of task

try {
    $result = $apiInstance->taskDocUpload($body, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->taskDocUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| The document needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 5MB if it is provided through the url.**
 |
 **task_id** | **int**| ID of task |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCompanyLogo**
> \Swagger\Client\Model\InlineResponse20022 uploadCompanyLogo($body, $id)

PUT: upload new logo for the company

Upload new logo for the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | The photo needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 800KB**

$id = 56; // int | ID of company

try {
    $result = $apiInstance->uploadCompanyLogo($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadCompanyLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| The photo needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 800KB**
 |
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadContactPhoto**
> \Swagger\Client\Model\InlineResponse20027 uploadContactPhoto($body, $id)

PUT: upload new photo for the contact

Upload new photo for the contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | The photo needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 800KB**

$id = 56; // int | ID of contact

try {
    $result = $apiInstance->uploadContactPhoto($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadContactPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| The photo needs to be uploaded. 

**Either content or url would need to construct the file**.

**The file size must not be greater than 800KB**
 |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

