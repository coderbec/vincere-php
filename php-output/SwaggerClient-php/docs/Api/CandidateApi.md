# Swagger\Client\CandidateApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBankDetail**](CandidateApi.md#addbankdetail) | **POST** /candidate/{id}/bankDetails | POST: Add a candidate&#x27;s bank detail
[**addDesiredJobTypes**](CandidateApi.md#adddesiredjobtypes) | **POST** /candidate/{id}/desiredJobTypes | POST: Add a candidate&#x27;s desired job type
[**addEducationDetails**](CandidateApi.md#addeducationdetails) | **POST** /candidate/{id}/educationdetails | POST: Add a candidate&#x27;s education details
[**addOwner**](CandidateApi.md#addowner) | **POST** /candidate/{id}/owners | POST: Add a candidate&#x27;s owner
[**addWorkExperience**](CandidateApi.md#addworkexperience) | **POST** /candidate/{id}/workexperiences | POST: Add a candidate&#x27;s work experience
[**candidateCreate**](CandidateApi.md#candidatecreate) | **POST** /candidate | POST: Create Candidate
[**candidateIdDelete**](CandidateApi.md#candidateiddelete) | **DELETE** /candidate/{id} | DELETE: Delete candidate
[**createBankDetails**](CandidateApi.md#createbankdetails) | **PUT** /candidate/{id}/bankDetails | PUT: Create or re-create the bank details of candidate
[**createDesiredJobTypes**](CandidateApi.md#createdesiredjobtypes) | **PUT** /candidate/{id}/desiredJobTypes | PUT: Create or re-create the desired job types of candidate
[**createEducationDetails**](CandidateApi.md#createeducationdetails) | **PUT** /candidate/{id}/educationdetails | PUT: Create or re-create the education details of candidate
[**createOwners**](CandidateApi.md#createowners) | **PUT** /candidate/{id}/owners | PUT: Create or re-create the owners of candidate
[**createWorkExperiences**](CandidateApi.md#createworkexperiences) | **PUT** /candidate/{id}/workexperiences | PUT: Create or update the work experiences of candidate
[**getCandidate**](CandidateApi.md#getcandidate) | **GET** /candidate/{id} | GET: Candidate details
[**getCandidateBankDetails**](CandidateApi.md#getcandidatebankdetails) | **GET** /candidate/{id}/bankDetails | GET: Candidate&#x27;s bank details
[**getCandidateCompanyLocation**](CandidateApi.md#getcandidatecompanylocation) | **GET** /candidate/{id}/companylocation | GET: company location
[**getCandidateCurrentLocation**](CandidateApi.md#getcandidatecurrentlocation) | **GET** /candidate/{id}/currentlocation | GET: current location
[**getCandidateCustomFields**](CandidateApi.md#getcandidatecustomfields) | **GET** /candidate/{id}/customfields | GET: custom fields
[**getCandidateEducationDetails**](CandidateApi.md#getcandidateeducationdetails) | **GET** /candidate/{id}/educationdetails | GET: Candidate&#x27;s education details
[**getCandidateFuncExpertises**](CandidateApi.md#getcandidatefuncexpertises) | **GET** /candidate/{id}/functionalexpertises | GET: Functional Expertise
[**getCandidateIndustries**](CandidateApi.md#getcandidateindustries) | **GET** /candidate/{id}/industries | GET: industries
[**getCandidateOwners**](CandidateApi.md#getcandidateowners) | **GET** /candidate/{id}/owners | GET: Candidate&#x27;s owners
[**getCandidatePersonalLocation**](CandidateApi.md#getcandidatepersonallocation) | **GET** /candidate/{id}/personallocation | GET: personal location
[**getCandidateSubfunctionalExpertise**](CandidateApi.md#getcandidatesubfunctionalexpertise) | **GET** /candidate/{id}/functionalexpertise/{func_id}/subfunctionalexpertises | GET: Subfunctional Expertise
[**getCandidateWebappURL**](CandidateApi.md#getcandidatewebappurl) | **GET** /candidate/{id}/webapp/url | GET: Candidate screen in Vincere web application
[**getCandidateWorkExperiences**](CandidateApi.md#getcandidateworkexperiences) | **GET** /candidate/{id}/workexperiences | GET: Candidate&#x27;s work experiences
[**getDesiredJobTypes**](CandidateApi.md#getdesiredjobtypes) | **GET** /candidate/{id}/desiredJobTypes | GET: Candidate&#x27;s desired job types
[**getLayouSetting**](CandidateApi.md#getlayousetting) | **GET** /candidate/{code}/{language}/compliance | GET: Compliance setting
[**getLayoutDataSetting**](CandidateApi.md#getlayoutdatasetting) | **GET** /candidate/{id}/{language}/compliancedata | GET: Compliance setting and data
[**linkCandidateFuncAndSubFuncExpertises**](CandidateApi.md#linkcandidatefuncandsubfuncexpertises) | **PUT** /candidate/{id}/functionalexpertises/subfunctionalexpertises | PUT: link Functional Expertise And Subfunctional Expertise
[**linkCandidateFunctionalExpertises**](CandidateApi.md#linkcandidatefunctionalexpertises) | **PUT** /candidate/{id}/functionalexpertises | PUT: link Functional Expertise
[**linkCandidateIndustries**](CandidateApi.md#linkcandidateindustries) | **PUT** /candidate/{id}/industries | PUT: link industries
[**linkCandidateSubfunctionalExpertises**](CandidateApi.md#linkcandidatesubfunctionalexpertises) | **PUT** /candidate/{id}/functionalexpertise/{func_id}/subfunctionalexpertises | PUT: link Subfunctional Expertise
[**putCandidateCompanyLocation**](CandidateApi.md#putcandidatecompanylocation) | **PUT** /candidate/{id}/companylocation | PUT: create or update company location
[**putCandidateCurrentLocation**](CandidateApi.md#putcandidatecurrentlocation) | **PUT** /candidate/{id}/currentlocation | PUT: create or update current location
[**putCandidateCustomFields**](CandidateApi.md#putcandidatecustomfields) | **PUT** /candidate/{id}/customfields | PUT: create or update custom fields
[**putCandidateHotPeriod**](CandidateApi.md#putcandidatehotperiod) | **PUT** /candidate/{id}/hotperiod | PUT: Set a candidate as hot candidate
[**putCandidatePersonalLocation**](CandidateApi.md#putcandidatepersonallocation) | **PUT** /candidate/{id}/personallocation | PUT: create or update personal location
[**updateCandidate**](CandidateApi.md#updatecandidate) | **PUT** /candidate/{id} | PUT: Update Candidate

# **addBankDetail**
> \Swagger\Client\Model\InlineResponse2006 addBankDetail($body, $id)

POST: Add a candidate's bank detail

add to the candidate's bank details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body17(); // \Swagger\Client\Model\Body17 | bank detail to add
$id = 56; // int | candidate id

try {
    $result = $apiInstance->addBankDetail($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->addBankDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body17**](../Model/Body17.md)| bank detail to add |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDesiredJobTypes**
> \Swagger\Client\Model\InlineResponse2006 addDesiredJobTypes($body, $id)

POST: Add a candidate's desired job type

add to the candidate's desired job types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | Job Type. Please refer to reference section of job types for possible values.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->addDesiredJobTypes($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->addDesiredJobTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| Job Type. Please refer to reference section of job types for possible values. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEducationDetails**
> \Swagger\Client\Model\InlineResponse2006 addEducationDetails($body, $id)

POST: Add a candidate's education details

add to the Candidate's education details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | Education details to add
$id = 56; // int | candidate id

try {
    $result = $apiInstance->addEducationDetails($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->addEducationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body12**](../Model/Body12.md)| Education details to add |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOwner**
> \Swagger\Client\Model\InlineResponse2006 addOwner($body, $id)

POST: Add a candidate's owner

User can have multiple candidate's owners n Vincere.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | owner to add
$id = 56; // int | candidate id

try {
    $result = $apiInstance->addOwner($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->addOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)| owner to add |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWorkExperience**
> \Swagger\Client\Model\InlineResponse2006 addWorkExperience($body, $id)

POST: Add a candidate's work experience

add to the candidate's work experiences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body16(); // \Swagger\Client\Model\Body16 | work experience to add
$id = 56; // int | candidate id

try {
    $result = $apiInstance->addWorkExperience($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->addWorkExperience: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body16**](../Model/Body16.md)| work experience to add |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidateCreate**
> \Swagger\Client\Model\InlineResponse2006 candidateCreate($body)

POST: Create Candidate

Posting candidates to the Candidate endpoint creates candidates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | Candidate details to create

try {
    $result = $apiInstance->candidateCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->candidateCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)| Candidate details to create |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidateIdDelete**
> \Swagger\Client\Model\InlineResponse2002 candidateIdDelete($body, $id)

DELETE: Delete candidate

Delete a specific candidate.  **Only possible to delete candidate who does not have any job applications.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | information for deletion
$id = 56; // int | candidate id

try {
    $result = $apiInstance->candidateIdDelete($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->candidateIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)| information for deletion |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankDetails**
> \Swagger\Client\Model\InlineResponse2006 createBankDetails($body, $id)

PUT: Create or re-create the bank details of candidate

Create or re-create the bank details of candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\InlineResponse20012()); // \Swagger\Client\Model\InlineResponse20012[] | array of bank details to create
$id = 56; // int | candidate id

try {
    $result = $apiInstance->createBankDetails($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->createBankDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InlineResponse20012[]**](../Model/InlineResponse20012.md)| array of bank details to create |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDesiredJobTypes**
> \Swagger\Client\Model\InlineResponse2006 createDesiredJobTypes($body, $id)

PUT: Create or re-create the desired job types of candidate

Create or re-create the desired job types of candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | array of desired job types to create. Please refer to reference section of job types for possible values
$id = 56; // int | candidate id

try {
    $result = $apiInstance->createDesiredJobTypes($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->createDesiredJobTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| array of desired job types to create. Please refer to reference section of job types for possible values |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEducationDetails**
> \Swagger\Client\Model\InlineResponse2006 createEducationDetails($body, $id)

PUT: Create or re-create the education details of candidate

Create or re-create the education details of candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\Body11()); // \Swagger\Client\Model\Body11[] | array of education details to create
$id = 56; // int | candidate id

try {
    $result = $apiInstance->createEducationDetails($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->createEducationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body11[]**](../Model/Body11.md)| array of education details to create |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOwners**
> \Swagger\Client\Model\InlineResponse2006 createOwners($body, $id)

PUT: Create or re-create the owners of candidate

Create or re-create the owners of candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\Body13()); // \Swagger\Client\Model\Body13[] | array of owners to create
$id = 56; // int | candidate id

try {
    $result = $apiInstance->createOwners($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->createOwners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body13[]**](../Model/Body13.md)| array of owners to create |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWorkExperiences**
> \Swagger\Client\Model\InlineResponse2006 createWorkExperiences($body, $id)

PUT: Create or update the work experiences of candidate

Create or update the work history of a candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\Body15()); // \Swagger\Client\Model\Body15[] | array of work experiences to create
$id = 56; // int | candidate id

try {
    $result = $apiInstance->createWorkExperiences($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->createWorkExperiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body15[]**](../Model/Body15.md)| array of work experiences to create |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidate**
> \Swagger\Client\Model\InlineResponse2007 getCandidate($id)

GET: Candidate details

Get a specific candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateBankDetails**
> \Swagger\Client\Model\InlineResponse20012[] getCandidateBankDetails($id)

GET: Candidate's bank details

Get bank details of the candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateBankDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateBankDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20012[]**](../Model/InlineResponse20012.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateCompanyLocation**
> \Swagger\Client\Model\InlineResponse20016 getCandidateCompanyLocation($id)

GET: company location

Get candidate's company location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateCompanyLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateCompanyLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateCurrentLocation**
> \Swagger\Client\Model\InlineResponse20016 getCandidateCurrentLocation($id)

GET: current location

Get candidate's current location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateCurrentLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateCurrentLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateCustomFields**
> \Swagger\Client\Model\InlineResponse20019[] getCandidateCustomFields($id)

GET: custom fields

Get candidate's custom fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateCustomFields($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20019[]**](../Model/InlineResponse20019.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateEducationDetails**
> \Swagger\Client\Model\InlineResponse2009[] getCandidateEducationDetails($id)

GET: Candidate's education details

Get education details of the candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateEducationDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateEducationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateFuncExpertises**
> \Swagger\Client\Model\InlineResponse20014[] getCandidateFuncExpertises($id)

GET: Functional Expertise

Get a list of a candidate's Functional Expertise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateFuncExpertises($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateFuncExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateIndustries**
> \Swagger\Client\Model\InlineResponse20013[] getCandidateIndustries($id)

GET: industries

Get candidate's industries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateIndustries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateIndustries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateOwners**
> \Swagger\Client\Model\InlineResponse20010[] getCandidateOwners($id)

GET: Candidate's owners

Get owners of the candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateOwners($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateOwners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidatePersonalLocation**
> \Swagger\Client\Model\InlineResponse20016 getCandidatePersonalLocation($id)

GET: personal location

Get candidate's personal location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidatePersonalLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidatePersonalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateSubfunctionalExpertise**
> \Swagger\Client\Model\InlineResponse20015[] getCandidateSubfunctionalExpertise($id, $func_id)

GET: Subfunctional Expertise

Get a list of a candidate's Subfunctional Expertise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$func_id = 56; // int | internal id of functional expertise in Vincere

try {
    $result = $apiInstance->getCandidateSubfunctionalExpertise($id, $func_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateSubfunctionalExpertise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **func_id** | **int**| internal id of functional expertise in Vincere |

### Return type

[**\Swagger\Client\Model\InlineResponse20015[]**](../Model/InlineResponse20015.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateWebappURL**
> \Swagger\Client\Model\InlineResponse20020 getCandidateWebappURL($id)

GET: Candidate screen in Vincere web application

Get the url of the candidate detail page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateWebappURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateWebappURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandidateWorkExperiences**
> \Swagger\Client\Model\InlineResponse20011[] getCandidateWorkExperiences($id)

GET: Candidate's work experiences

Get work experiences of the candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getCandidateWorkExperiences($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getCandidateWorkExperiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse20011[]**](../Model/InlineResponse20011.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDesiredJobTypes**
> string[] getDesiredJobTypes($id)

GET: Candidate's desired job types

Get desired job types of the candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id

try {
    $result = $apiInstance->getDesiredJobTypes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getDesiredJobTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |

### Return type

**string[]**

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLayouSetting**
> \Swagger\Client\Model\InlineResponse200110 getLayouSetting($code, $language)

GET: Compliance setting

Get layout setting for compliance by country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | code of country
$language = "language_example"; // string | Supported languages in system.

try {
    $result = $apiInstance->getLayouSetting($code, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getLayouSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| code of country |
 **language** | **string**| Supported languages in system. |

### Return type

[**\Swagger\Client\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLayoutDataSetting**
> \Swagger\Client\Model\InlineResponse200110 getLayoutDataSetting($id, $language)

GET: Compliance setting and data

Get layout setting and data of candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$language = "language_example"; // string | Supported languages in system.

try {
    $result = $apiInstance->getLayoutDataSetting($id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->getLayoutDataSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **language** | **string**| Supported languages in system. |

### Return type

[**\Swagger\Client\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCandidateFuncAndSubFuncExpertises**
> \Swagger\Client\Model\InlineResponse2006 linkCandidateFuncAndSubFuncExpertises($body, $id)

PUT: link Functional Expertise And Subfunctional Expertise

Link the Functional Expertise (in the request body) as well as its Subfunctional Expertise with a candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | 
$id = 56; // int | candidate id

try {
    $result = $apiInstance->linkCandidateFuncAndSubFuncExpertises($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->linkCandidateFuncAndSubFuncExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)|  |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCandidateFunctionalExpertises**
> \Swagger\Client\Model\InlineResponse2006 linkCandidateFunctionalExpertises($body, $id)

PUT: link Functional Expertise

Link the Functional Expertise Ids (in the request body) with a candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal functional expertise Ids in Vincere. Please refer to reference section for functional expertise.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->linkCandidateFunctionalExpertises($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->linkCandidateFunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal functional expertise Ids in Vincere. Please refer to reference section for functional expertise. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCandidateIndustries**
> \Swagger\Client\Model\InlineResponse2006 linkCandidateIndustries($body, $id)

PUT: link industries

Link the industries whose Ids are in the request body with the candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal industry Ids in Vincere. Please refer to reference section for industry.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->linkCandidateIndustries($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->linkCandidateIndustries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal industry Ids in Vincere. Please refer to reference section for industry. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCandidateSubfunctionalExpertises**
> \Swagger\Client\Model\InlineResponse2006 linkCandidateSubfunctionalExpertises($body, $id, $func_id)

PUT: link Subfunctional Expertise

Link the Subfunctional Expertise Ids (in the request body) with a candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal subfunctional expertise Ids in Vincere. Please refer to reference section for subfunctional expertise.
$id = 56; // int | candidate id
$func_id = 56; // int | internal id of functional expertise in Vincere

try {
    $result = $apiInstance->linkCandidateSubfunctionalExpertises($body, $id, $func_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->linkCandidateSubfunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal subfunctional expertise Ids in Vincere. Please refer to reference section for subfunctional expertise. |
 **id** | **int**| candidate id |
 **func_id** | **int**| internal id of functional expertise in Vincere |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCandidateCompanyLocation**
> \Swagger\Client\Model\InlineResponse2006 putCandidateCompanyLocation($body, $id)

PUT: create or update company location

Create or update company location of the candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the location.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->putCandidateCompanyLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->putCandidateCompanyLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the location. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCandidateCurrentLocation**
> \Swagger\Client\Model\InlineResponse2006 putCandidateCurrentLocation($body, $id)

PUT: create or update current location

Create or update current location of the candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the location.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->putCandidateCurrentLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->putCandidateCurrentLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the location. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCandidateCustomFields**
> \Swagger\Client\Model\InlineResponse2006 putCandidateCustomFields($body, $id)

PUT: create or update custom fields

Create or update custom fields of the candidate. All the existing custom fields of candidate will be replaced by the data given in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body20(); // \Swagger\Client\Model\Body20 | information of the custom fields.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->putCandidateCustomFields($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->putCandidateCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body20**](../Model/Body20.md)| information of the custom fields. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCandidateHotPeriod**
> \Swagger\Client\Model\InlineResponse2006 putCandidateHotPeriod($body, $id)

PUT: Set a candidate as hot candidate

Set a candidate as hot candidate in a number of days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | number of hot days to be set
$id = 56; // int | candidate id

try {
    $result = $apiInstance->putCandidateHotPeriod($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->putCandidateHotPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| number of hot days to be set |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCandidatePersonalLocation**
> \Swagger\Client\Model\InlineResponse2006 putCandidatePersonalLocation($body, $id)

PUT: create or update personal location

Create or update personal location of the candidate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the location.
$id = 56; // int | candidate id

try {
    $result = $apiInstance->putCandidatePersonalLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->putCandidatePersonalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the location. |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCandidate**
> \Swagger\Client\Model\InlineResponse2006 updateCandidate($body, $id)

PUT: Update Candidate

Updates an existing candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | Candidate details to update
$id = 56; // int | candidate id

try {
    $result = $apiInstance->updateCandidate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->updateCandidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)| Candidate details to update |
 **id** | **int**| candidate id |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

