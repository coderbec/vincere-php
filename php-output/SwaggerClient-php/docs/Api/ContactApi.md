# Swagger\Client\ContactApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**candidateId**](ContactApi.md#candidateid) | **GET** /candidate/{id}/firstlocation | GET: candidate first location by country_code
[**contactId**](ContactApi.md#contactid) | **GET** /contact/{id}/firstlocation | GET: Contact first location by country_code
[**contactIdDelete**](ContactApi.md#contactiddelete) | **DELETE** /contact/{id} | DELETE: Delete a contact
[**contactIdExternalmapPut**](ContactApi.md#contactidexternalmapput) | **PUT** /contact/{id}/externalmap | PUT: Set a contact external_map
[**createContact**](ContactApi.md#createcontact) | **POST** /contact | POST: Create Contact
[**gETContact**](ContactApi.md#getcontact) | **GET** /contact/{id} | GET: Contact details
[**getContactCustomFields**](ContactApi.md#getcontactcustomfields) | **GET** /contact/{id}/customfields | GET: custom fields
[**getContactFunctionalExpertises**](ContactApi.md#getcontactfunctionalexpertises) | **GET** /contact/{id}/functionalexpertises | GET: Functional Expertise
[**getContactJobs**](ContactApi.md#getcontactjobs) | **GET** /contact/{id}/jobs | GET: Contact&#x27;s linked jobs
[**getContactPersonalLocation**](ContactApi.md#getcontactpersonallocation) | **GET** /contact/{id}/personallocation | GET: personal location
[**getContactSubfunctionalExpertise**](ContactApi.md#getcontactsubfunctionalexpertise) | **GET** /contact/{id}/functionalexpertise/{func_id}/subfunctionalexpertises | GET: Subfunctional Expertise
[**getContactWebappURL**](ContactApi.md#getcontactwebappurl) | **GET** /contact/{id}/webapp/url | GET: Contact screen in Vincere web application
[**getContactWorkLocations**](ContactApi.md#getcontactworklocations) | **GET** /contact/{id}/worklocations | GET: All Contact&#x27;s work locations
[**getContactsIndustries**](ContactApi.md#getcontactsindustries) | **GET** /contact/{id}/industries | GET: industries
[**linkContactFuncAndSubFuncExpertises**](ContactApi.md#linkcontactfuncandsubfuncexpertises) | **PUT** /contact/{id}/functionalexpertises/subfunctionalexpertises | PUT: link Functional Expertise And Subfunctional Expertise
[**linkContactSubfunctionalExpertises**](ContactApi.md#linkcontactsubfunctionalexpertises) | **PUT** /contact/{id}/functionalexpertise/{func_id}/subfunctionalexpertises | PUT: link Subfunctional Expertise
[**linkContactWithFunctionalExpertises**](ContactApi.md#linkcontactwithfunctionalexpertises) | **PUT** /contact/{id}/functionalexpertises | PUT: link Functional Expertise
[**linkWithIndustries**](ContactApi.md#linkwithindustries) | **PUT** /contact/{id}/industries | PUT: link industries
[**postContactWorkLocation**](ContactApi.md#postcontactworklocation) | **POST** /contact/{id}/worklocations | POST: Contact&#x27;s work locations
[**putContactCustomFields**](ContactApi.md#putcontactcustomfields) | **PUT** /contact/{id}/customfields | PUT: create or update custom fields
[**putContactHotPeriod**](ContactApi.md#putcontacthotperiod) | **PUT** /contact/{id}/hotperiod | PUT: Set a contact as hot contact
[**putContactPersonalLocation**](ContactApi.md#putcontactpersonallocation) | **PUT** /contact/{id}/personallocation | PUT: create or update personal location
[**putContactWorkLocation**](ContactApi.md#putcontactworklocation) | **PUT** /contact/{id}/worklocations | PUT: Contact&#x27;s work locations
[**updateContact**](ContactApi.md#updatecontact) | **PUT** /contact/{id} | PUT: Update Contact

# **candidateId**
> \Swagger\Client\Model\InlineResponse20021 candidateId($id, $country_code)

GET: candidate first location by country_code

Get first candidate location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | candidate id
$country_code = "country_code_example"; // string | code of country

try {
    $result = $apiInstance->candidateId($id, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->candidateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| candidate id |
 **country_code** | **string**| code of country |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactId**
> \Swagger\Client\Model\InlineResponse20021 contactId($id, $country_code)

GET: Contact first location by country_code

Get first contact work location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact
$country_code = "country_code_example"; // string | code of country

try {
    $result = $apiInstance->contactId($id, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |
 **country_code** | **string**| code of country |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactIdDelete**
> \Swagger\Client\Model\InlineResponse2002 contactIdDelete($id)

DELETE: Delete a contact

Delete a contact.  **Only possible if the contact is not associated with any jobs.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->contactIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactIdExternalmapPut**
> \Swagger\Client\Model\InlineResponse20027 contactIdExternalmapPut($body, $id)

PUT: Set a contact external_map

Set a contact as hot contact in a number of days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body26(); // \Swagger\Client\Model\Body26 | external_map
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->contactIdExternalmapPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactIdExternalmapPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body26**](../Model/Body26.md)| external_map |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \Swagger\Client\Model\InlineResponse20027 createContact($body)

POST: Create Contact

Posting contacts to the Contact endpoint creates contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body24(); // \Swagger\Client\Model\Body24 | Contact to add

try {
    $result = $apiInstance->createContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body24**](../Model/Body24.md)| Contact to add |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETContact**
> \Swagger\Client\Model\InlineResponse20028 gETContact($id)

GET: Contact details

Get a specific contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->gETContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->gETContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactCustomFields**
> \Swagger\Client\Model\InlineResponse20025[] getContactCustomFields($id)

GET: custom fields

Get contact's custom fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactCustomFields($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20025[]**](../Model/InlineResponse20025.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactFunctionalExpertises**
> \Swagger\Client\Model\InlineResponse20014[] getContactFunctionalExpertises($id)

GET: Functional Expertise

Get a list of contact's Functional Expertise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactFunctionalExpertises($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactFunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactJobs**
> \Swagger\Client\Model\InlineResponse20029 getContactJobs($id)

GET: Contact's linked jobs

Get the jobs that linked to the given contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactJobs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactPersonalLocation**
> \Swagger\Client\Model\InlineResponse20016 getContactPersonalLocation($id)

GET: personal location

Get contact's personal location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactPersonalLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactPersonalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactSubfunctionalExpertise**
> \Swagger\Client\Model\InlineResponse20015[] getContactSubfunctionalExpertise($id, $func_id)

GET: Subfunctional Expertise

Get a list of contact's Subfunctional Expertise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact
$func_id = 56; // int | internal id of functional expertise in Vincere

try {
    $result = $apiInstance->getContactSubfunctionalExpertise($id, $func_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactSubfunctionalExpertise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |
 **func_id** | **int**| internal id of functional expertise in Vincere |

### Return type

[**\Swagger\Client\Model\InlineResponse20015[]**](../Model/InlineResponse20015.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactWebappURL**
> \Swagger\Client\Model\InlineResponse20020 getContactWebappURL($id)

GET: Contact screen in Vincere web application

Get the url of the contact detail page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactWebappURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactWebappURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactWorkLocations**
> \Swagger\Client\Model\InlineResponse20021[] getContactWorkLocations($id)

GET: All Contact's work locations

GET the work locations of the contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactWorkLocations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactWorkLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20021[]**](../Model/InlineResponse20021.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsIndustries**
> \Swagger\Client\Model\InlineResponse20013[] getContactsIndustries($id)

GET: industries

Get contact's industries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->getContactsIndustries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactsIndustries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkContactFuncAndSubFuncExpertises**
> \Swagger\Client\Model\InlineResponse20027 linkContactFuncAndSubFuncExpertises($body, $id)

PUT: link Functional Expertise And Subfunctional Expertise

Link the Functional Expertise (in the request body) as well as its Subfunctional Expertise with a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | 
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->linkContactFuncAndSubFuncExpertises($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->linkContactFuncAndSubFuncExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)|  |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkContactSubfunctionalExpertises**
> \Swagger\Client\Model\InlineResponse20027 linkContactSubfunctionalExpertises($body, $id, $func_id)

PUT: link Subfunctional Expertise

Link the Subfunctional Expertise Ids (in the request body) with a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal subfunctional expertise Ids in Vincere. Please refer to reference section for subfunctional expertise.
$id = 56; // int | ID of contact
$func_id = 56; // int | internal id of functional expertise in Vincere

try {
    $result = $apiInstance->linkContactSubfunctionalExpertises($body, $id, $func_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->linkContactSubfunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal subfunctional expertise Ids in Vincere. Please refer to reference section for subfunctional expertise. |
 **id** | **int**| ID of contact |
 **func_id** | **int**| internal id of functional expertise in Vincere |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkContactWithFunctionalExpertises**
> \Swagger\Client\Model\InlineResponse20027 linkContactWithFunctionalExpertises($body, $id)

PUT: link Functional Expertise

Link the Functional Expertise Ids (in the request body) with a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal functional expertise Ids in Vincere. Please refer to reference section for functional expertise.
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->linkContactWithFunctionalExpertises($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->linkContactWithFunctionalExpertises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal functional expertise Ids in Vincere. Please refer to reference section for functional expertise. |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkWithIndustries**
> \Swagger\Client\Model\InlineResponse20027 linkWithIndustries($body, $id)

PUT: link industries

Link the industries whose Ids are in the request body with the contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal industry Ids in Vincere. Please refer to reference section for industry.
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->linkWithIndustries($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->linkWithIndustries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal industry Ids in Vincere. Please refer to reference section for industry. |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactWorkLocation**
> \Swagger\Client\Model\InlineResponse20027 postContactWorkLocation($body, $id)

POST: Contact's work locations

Create new work locations for the Contact as well as its Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | locations of company
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->postContactWorkLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactWorkLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| locations of company |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactCustomFields**
> \Swagger\Client\Model\InlineResponse20027 putContactCustomFields($body, $id)

PUT: create or update custom fields

Create or update custom fields of the contact. All the existing custom fields of contact will be replaced by the data given in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the custom fields.
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->putContactCustomFields($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->putContactCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the custom fields. |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactHotPeriod**
> \Swagger\Client\Model\InlineResponse20027 putContactHotPeriod($body, $id)

PUT: Set a contact as hot contact

Set a contact as hot contact in a number of days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | number of hot days to be set
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->putContactHotPeriod($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->putContactHotPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| number of hot days to be set |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactPersonalLocation**
> \Swagger\Client\Model\InlineResponse20027 putContactPersonalLocation($body, $id)

PUT: create or update personal location

Create or update personal location of the contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the location.
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->putContactPersonalLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->putContactPersonalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the location. |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactWorkLocation**
> \Swagger\Client\Model\InlineResponse20027 putContactWorkLocation($body, $id)

PUT: Contact's work locations

Replace all work locations of the Contact by the given list of company locations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal company location Ids in Vincere.
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->putContactWorkLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->putContactWorkLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal company location Ids in Vincere. |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \Swagger\Client\Model\InlineResponse20027 updateContact($body, $id)

PUT: Update Contact

Updates an existing contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body25(); // \Swagger\Client\Model\Body25 | Contact to add
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->updateContact($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body25**](../Model/Body25.md)| Contact to add |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

