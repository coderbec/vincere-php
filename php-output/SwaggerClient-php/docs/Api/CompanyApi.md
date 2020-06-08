# Swagger\Client\CompanyApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyIdDelete**](CompanyApi.md#companyiddelete) | **DELETE** /company/{id} | DELETE: Delete company
[**createCompany**](CompanyApi.md#createcompany) | **POST** /company | POST: Create Company
[**createCompanysLocations**](CompanyApi.md#createcompanyslocations) | **PUT** /company/{id}/locations | PUT: Create Company&#x27;s locations
[**gETCompanysLocation**](CompanyApi.md#getcompanyslocation) | **GET** /company/location/{loc_id} | GET: Company&#x27;s location
[**gETCompanysLocations**](CompanyApi.md#getcompanyslocations) | **GET** /company/{id}/locations | GET: All company&#x27;s locations
[**getCompany**](CompanyApi.md#getcompany) | **GET** /company/{id} | GET: Company details
[**getCompanyCustomFields**](CompanyApi.md#getcompanycustomfields) | **GET** /company/{id}/customfields | GET: custom fields
[**getCompanyIndustries**](CompanyApi.md#getcompanyindustries) | **GET** /company/{id}/industries | GET: industries
[**linkCompanyIndustries**](CompanyApi.md#linkcompanyindustries) | **PUT** /company/{id}/industries | PUT: link industries
[**putCompanyCustomFields**](CompanyApi.md#putcompanycustomfields) | **PUT** /company/{id}/customfields | PUT: create or update custom fields
[**updateCompany**](CompanyApi.md#updatecompany) | **PUT** /company/{id} | PUT: Update Company
[**updateCompanyLocation**](CompanyApi.md#updatecompanylocation) | **PUT** /company/location/{loc_id} | PUT: Update Company&#x27;s location

# **companyIdDelete**
> \Swagger\Client\Model\InlineResponse2002 companyIdDelete($id)

DELETE: Delete company

Delete a specific company. The company **must not linked to any contact**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of company

try {
    $result = $apiInstance->companyIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCompany**
> \Swagger\Client\Model\InlineResponse20022 createCompany($body)

POST: Create Company

Posting companys to the Company endpoint creates the companys. company_name is required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body21(); // \Swagger\Client\Model\Body21 | Company to add

try {
    $result = $apiInstance->createCompany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body21**](../Model/Body21.md)| Company to add |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCompanysLocations**
> \Swagger\Client\Model\InlineResponse20022 createCompanysLocations($body, $id)

PUT: Create Company's locations

(re)create the locations of the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | locations of company
$id = 56; // int | ID of company

try {
    $result = $apiInstance->createCompanysLocations($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompanysLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| locations of company |
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETCompanysLocation**
> \Swagger\Client\Model\InlineResponse20021 gETCompanysLocation($loc_id)

GET: Company's location

GET the location of the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loc_id = 56; // int | ID of company location id

try {
    $result = $apiInstance->gETCompanysLocation($loc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->gETCompanysLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loc_id** | **int**| ID of company location id |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETCompanysLocations**
> \Swagger\Client\Model\InlineResponse20021[] gETCompanysLocations($id)

GET: All company's locations

GET the locations of the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of company

try {
    $result = $apiInstance->gETCompanysLocations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->gETCompanysLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20021[]**](../Model/InlineResponse20021.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompany**
> \Swagger\Client\Model\InlineResponse20023 getCompany($id)

GET: Company details

Get a specific company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of company

try {
    $result = $apiInstance->getCompany($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyCustomFields**
> \Swagger\Client\Model\InlineResponse20025[] getCompanyCustomFields($id)

GET: custom fields

Get company's custom fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of company

try {
    $result = $apiInstance->getCompanyCustomFields($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20025[]**](../Model/InlineResponse20025.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyIndustries**
> \Swagger\Client\Model\InlineResponse20013[] getCompanyIndustries($id)

GET: industries

Get company's industries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of company

try {
    $result = $apiInstance->getCompanyIndustries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyIndustries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCompanyIndustries**
> \Swagger\Client\Model\InlineResponse20022 linkCompanyIndustries($body, $id)

PUT: link industries

Link the industries whose Ids are in the request body with the company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | array of internal industry Ids in Vincere. Please refer to reference section for industry.
$id = 56; // int | ID of company

try {
    $result = $apiInstance->linkCompanyIndustries($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->linkCompanyIndustries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| array of internal industry Ids in Vincere. Please refer to reference section for industry. |
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCompanyCustomFields**
> \Swagger\Client\Model\InlineResponse20022 putCompanyCustomFields($body, $id)

PUT: create or update custom fields

Create or update custom fields of the company. All the existing custom fields of company will be replaced by the data given in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | information of the custom fields.
$id = 56; // int | ID of company

try {
    $result = $apiInstance->putCompanyCustomFields($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putCompanyCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| information of the custom fields. |
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompany**
> \Swagger\Client\Model\InlineResponse20022 updateCompany($body, $id)

PUT: Update Company

Updates an existing company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body22(); // \Swagger\Client\Model\Body22 | Company to add
$id = 56; // int | ID of company

try {
    $result = $apiInstance->updateCompany($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body22**](../Model/Body22.md)| Company to add |
 **id** | **int**| ID of company |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompanyLocation**
> \Swagger\Client\Model\InlineResponse20024 updateCompanyLocation($body, $loc_id)

PUT: Update Company's location

update the details of the given location of the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body23(); // \Swagger\Client\Model\Body23 | company location
$loc_id = 56; // int | ID of company location id

try {
    $result = $apiInstance->updateCompanyLocation($body, $loc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompanyLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body23**](../Model/Body23.md)| company location |
 **loc_id** | **int**| ID of company location id |

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

