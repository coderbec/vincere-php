# Swagger\Client\JobApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createJob**](JobApi.md#createjob) | **POST** /position | POST: Create job
[**createJobRatingSkills**](JobApi.md#createjobratingskills) | **PUT** /position/{id}/ratingskills | PUT: create or recreate rating skills
[**editRatingSkill**](JobApi.md#editratingskill) | **PUT** /position/{id}/ratingskill/{r_id} | PUT: edit a rating skill
[**editScreeningQuestion**](JobApi.md#editscreeningquestion) | **PUT** /position/{id}/screeningquestion/{q_id} | PUT: edit a screening question
[**gETAJob**](JobApi.md#getajob) | **GET** /position/{id} | GET: View A Job
[**gETAJobCompensation**](JobApi.md#getajobcompensation) | **GET** /position/{id}/compensation | GET: View A Job compensation
[**gETAJobPlacements**](JobApi.md#getajobplacements) | **GET** /position/{id}/placements | GET: View placements of Job
[**getJobCustomFields**](JobApi.md#getjobcustomfields) | **GET** /position/{id}/customfields | GET: custom fields
[**getJobOnboardingRequiredDocuments**](JobApi.md#getjobonboardingrequireddocuments) | **GET** /position/{id}/onboarding/requireddocuments | GET: job&#x27;s required documents for onboarding
[**getJobRatingSkills**](JobApi.md#getjobratingskills) | **GET** /position/{id}/ratingskills | GET: rating skills
[**getLinkedFunctionalExpertises**](JobApi.md#getlinkedfunctionalexpertises) | **GET** /position/{id}/functionalexpertises | GET: functional expertises
[**getLinkedOwners**](JobApi.md#getlinkedowners) | **GET** /position/{id}/owners | GET: job&#x27;s owners
[**getLinkedScreeningQuestions**](JobApi.md#getlinkedscreeningquestions) | **GET** /position/{id}/screeningquestions | GET: Screening Questions
[**getLinkedSubfunctionalExpertise**](JobApi.md#getlinkedsubfunctionalexpertise) | **GET** /position/{id}/functionalexpertise/{func_id}/subfunctionalexpertises | GET: subfunctional expertises
[**linkJobFuncAndSubFuncExpertises**](JobApi.md#linkjobfuncandsubfuncexpertises) | **PUT** /position/{id}/functionalexpertises/subfunctionalexpertises | PUT: link Functional Expertise And Subfunctional Expertise
[**linkWithFunctionalExpertises**](JobApi.md#linkwithfunctionalexpertises) | **PUT** /position/{id}/functionalexpertises | PUT: link functional expertises
[**linkWithOwners**](JobApi.md#linkwithowners) | **PUT** /position/{id}/owners | PUT: link owners
[**linkWithScreeningQuestions**](JobApi.md#linkwithscreeningquestions) | **PUT** /position/{id}/screeningquestions | PUT: create or recreate screening questions
[**linkWithSubfunctionalExpertises**](JobApi.md#linkwithsubfunctionalexpertises) | **PUT** /position/{id}/functionalexpertise/{func_id}/subfunctionalexpertises | PUT: link subfunctional expertises
[**putJobCustomFields**](JobApi.md#putjobcustomfields) | **PUT** /position/{id}/customfields | PUT: create or update custom fields
[**updateJob**](JobApi.md#updatejob) | **PUT** /position/{id} | PUT: Update job

# **createJob**
> \Swagger\Client\Model\InlineResponse20030 createJob($body)

POST: Create job

Posting to Job endpoint creates the job. job_title is required. Either contact_id or contact_external_id need to be specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body27(); // \Swagger\Client\Model\Body27 | Job to add

try {
    $result = $apiInstance->createJob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body27**](../Model/Body27.md)| Job to add |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createJobRatingSkills**
> \Swagger\Client\Model\InlineResponse20030 createJobRatingSkills($body, $id)

PUT: create or recreate rating skills

Set the given rating skills to the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | array of rating skills to set to the job.
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->createJobRatingSkills($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJobRatingSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| array of rating skills to set to the job. |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editRatingSkill**
> \Swagger\Client\Model\InlineResponse20035 editRatingSkill($body, $id, $r_id)

PUT: edit a rating skill

Edit the rating skill of the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | array of rating skills to set to the job.
$id = 56; // int | ID of Job
$r_id = 56; // int | ID of rating skill

try {
    $result = $apiInstance->editRatingSkill($body, $id, $r_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->editRatingSkill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| array of rating skills to set to the job. |
 **id** | **int**| ID of Job |
 **r_id** | **int**| ID of rating skill |

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editScreeningQuestion**
> \Swagger\Client\Model\InlineResponse20033 editScreeningQuestion($body, $id, $q_id)

PUT: edit a screening question

Edit the screening question of the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | array of screening questions to set to the job.
$id = 56; // int | ID of Job
$q_id = 56; // int | ID of screening question

try {
    $result = $apiInstance->editScreeningQuestion($body, $id, $q_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->editScreeningQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| array of screening questions to set to the job. |
 **id** | **int**| ID of Job |
 **q_id** | **int**| ID of screening question |

### Return type

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAJob**
> \Swagger\Client\Model\InlineResponse20031 gETAJob($id)

GET: View A Job

Get a specific job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->gETAJob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->gETAJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAJobCompensation**
> \Swagger\Client\Model\InlineResponse20038 gETAJobCompensation($id)

GET: View A Job compensation

Get a specific job compensation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->gETAJobCompensation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->gETAJobCompensation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAJobPlacements**
> \Swagger\Client\Model\InlineResponse20039[] gETAJobPlacements($id, $index)

GET: View placements of Job

Get a specific job placements Each call returns a slice of maximum 25 placements. Each slice has its index and a field to indicate if it is the last slice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job
$index = 56; // int | index of the slice to get, start at 0 and increase by 1.

try {
    $result = $apiInstance->gETAJobPlacements($id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->gETAJobPlacements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |
 **index** | **int**| index of the slice to get, start at 0 and increase by 1. |

### Return type

[**\Swagger\Client\Model\InlineResponse20039[]**](../Model/InlineResponse20039.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobCustomFields**
> \Swagger\Client\Model\InlineResponse20025[] getJobCustomFields($id)

GET: custom fields

Get job's custom fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getJobCustomFields($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20025[]**](../Model/InlineResponse20025.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobOnboardingRequiredDocuments**
> \Swagger\Client\Model\InlineResponse20037[] getJobOnboardingRequiredDocuments($id)

GET: job's required documents for onboarding

Get job's required documents for onboarding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getJobOnboardingRequiredDocuments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobOnboardingRequiredDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20037[]**](../Model/InlineResponse20037.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobRatingSkills**
> \Swagger\Client\Model\InlineResponse20034[] getJobRatingSkills($id)

GET: rating skills

get rating skills of the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getJobRatingSkills($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobRatingSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20034[]**](../Model/InlineResponse20034.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedFunctionalExpertises**
> \Swagger\Client\Model\InlineResponse20014[] getLinkedFunctionalExpertises($id)

GET: functional expertises

Get job's functional expertises

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getLinkedFunctionalExpertises($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getLinkedFunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedOwners**
> \Swagger\Client\Model\InlineResponse20036[] getLinkedOwners($id)

GET: job's owners

Get job's owners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getLinkedOwners($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getLinkedOwners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20036[]**](../Model/InlineResponse20036.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedScreeningQuestions**
> \Swagger\Client\Model\InlineResponse20032[] getLinkedScreeningQuestions($id)

GET: Screening Questions

get screening questions of the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->getLinkedScreeningQuestions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getLinkedScreeningQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20032[]**](../Model/InlineResponse20032.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedSubfunctionalExpertise**
> \Swagger\Client\Model\InlineResponse20015[] getLinkedSubfunctionalExpertise($id, $func_id)

GET: subfunctional expertises

Get contact's subfunctional expertises

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Job
$func_id = 56; // int | internal id of functional expertise in Vincere

try {
    $result = $apiInstance->getLinkedSubfunctionalExpertise($id, $func_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getLinkedSubfunctionalExpertise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Job |
 **func_id** | **int**| internal id of functional expertise in Vincere |

### Return type

[**\Swagger\Client\Model\InlineResponse20015[]**](../Model/InlineResponse20015.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkJobFuncAndSubFuncExpertises**
> \Swagger\Client\Model\InlineResponse20030 linkJobFuncAndSubFuncExpertises($body, $id)

PUT: link Functional Expertise And Subfunctional Expertise

Link the Functional Expertise (in the request body) as well as its Subfunctional Expertise with a job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | 
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->linkJobFuncAndSubFuncExpertises($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->linkJobFuncAndSubFuncExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)|  |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkWithFunctionalExpertises**
> \Swagger\Client\Model\InlineResponse20030 linkWithFunctionalExpertises($body, $id)

PUT: link functional expertises

Link the functional expertises whose Ids are in the request body with the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal functional expertise Ids in Vincere. Please refer to reference section for functional expertise.
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->linkWithFunctionalExpertises($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->linkWithFunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal functional expertise Ids in Vincere. Please refer to reference section for functional expertise. |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkWithOwners**
> \Swagger\Client\Model\InlineResponse20030 linkWithOwners($body, $id)

PUT: link owners

Link the owners whose Ids are in the request body with the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal owner Ids in Vincere. Please refer to section for user.
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->linkWithOwners($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->linkWithOwners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal owner Ids in Vincere. Please refer to section for user. |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkWithScreeningQuestions**
> \Swagger\Client\Model\InlineResponse20030 linkWithScreeningQuestions($body, $id)

PUT: create or recreate screening questions

Set the given screening questions to the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | array of screening questions to set to the job.
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->linkWithScreeningQuestions($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->linkWithScreeningQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| array of screening questions to set to the job. |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkWithSubfunctionalExpertises**
> \Swagger\Client\Model\InlineResponse20030 linkWithSubfunctionalExpertises($body, $id, $func_id)

PUT: link subfunctional expertises

Link the subfunctional expertises whose Ids are in the request body with the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal subfunctional expertise Ids in Vincere. Please refer to reference section for subfunctional expertise.
$id = 56; // int | ID of Job
$func_id = 56; // int | internal id of functional expertise in Vincere

try {
    $result = $apiInstance->linkWithSubfunctionalExpertises($body, $id, $func_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->linkWithSubfunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal subfunctional expertise Ids in Vincere. Please refer to reference section for subfunctional expertise. |
 **id** | **int**| ID of Job |
 **func_id** | **int**| internal id of functional expertise in Vincere |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putJobCustomFields**
> \Swagger\Client\Model\InlineResponse20030 putJobCustomFields($body, $id)

PUT: create or update custom fields

Create or update custom fields of the job. All the existing custom fields of job will be replaced by the data given in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the custom fields.
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->putJobCustomFields($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->putJobCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the custom fields. |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJob**
> \Swagger\Client\Model\InlineResponse20030 updateJob($body, $id)

PUT: Update job

Updates an existing job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body28(); // \Swagger\Client\Model\Body28 | Job to add
$id = 56; // int | ID of Job

try {
    $result = $apiInstance->updateJob($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body28**](../Model/Body28.md)| Job to add |
 **id** | **int**| ID of Job |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

