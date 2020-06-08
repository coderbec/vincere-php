# Swagger\Client\PlacementApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETAPlacement**](PlacementApi.md#getaplacement) | **GET** /placement/{id} | GET: View A placement detail
[**gETAPlacementCandidatedetail**](PlacementApi.md#getaplacementcandidatedetail) | **GET** /placement/{id}/candidatedetail | GET: View A placement - candidatedetail
[**gETAPlacementCompanyClientDetail**](PlacementApi.md#getaplacementcompanyclientdetail) | **GET** /placement/{id}/companydetail | GET: View A placement - company client detail
[**gETAPlacementCostOfSaleDetail**](PlacementApi.md#getaplacementcostofsaledetail) | **GET** /placement/{id}/costofsales | GET: View A placement - Cost Of Sale detail
[**gETAPlacementInvoiceDetail**](PlacementApi.md#getaplacementinvoicedetail) | **GET** /placement/{id}/placementinvoicedetail | GET: View A placement - Invoice Detail
[**gETAPlacementJobSiteWithJobContract**](PlacementApi.md#getaplacementjobsitewithjobcontract) | **GET** /placement/{id}/jobsite | GET: View A placement - Job Site
[**gETAPlacementMyob**](PlacementApi.md#getaplacementmyob) | **GET** /placement/{id}/myob | GET: View A placement - myob
[**gETAPlacementOtherInvoiceItem**](PlacementApi.md#getaplacementotherinvoiceitem) | **GET** /placement/{id}/otherinvoiceitems | GET: View A placement - other invoice item
[**gETAPlacementRevenueSplit**](PlacementApi.md#getaplacementrevenuesplit) | **GET** /placement/{id}/profitsplits | GET: View A placement -  Revenue split
[**gETAPlacementTimeSheetWithJobContract**](PlacementApi.md#getaplacementtimesheetwithjobcontract) | **GET** /placement/{id}/timesheet | GET: View A placement - Time Sheet
[**gETAPlacementYourCompanyDetail**](PlacementApi.md#getaplacementyourcompanydetail) | **GET** /placement/{id}/yourcompanydetail | GET: View A placement - your company detail
[**placementIdCompanydetailPut**](PlacementApi.md#placementidcompanydetailput) | **PUT** /placement/{id}/companydetail | PUT: Update company client detail of placement
[**placementIdCostofsalesPut**](PlacementApi.md#placementidcostofsalesput) | **PUT** /placement/{id}/costofsales | PUT: Update Cost Of Sale detail of placement
[**placementIdMyobPut**](PlacementApi.md#placementidmyobput) | **PUT** /placement/{id}/myob | PUT: Update placement - myob
[**placementIdOtherinvoiceitemsPut**](PlacementApi.md#placementidotherinvoiceitemsput) | **PUT** /placement/{id}/otherinvoiceitems | PUT: Update other invoice item of placement
[**placementIdPlacementinvoicedetailPut**](PlacementApi.md#placementidplacementinvoicedetailput) | **PUT** /placement/{id}/placementinvoicedetail | PUT: Update placement - Invoice Detail
[**placementIdProfitsplitsPut**](PlacementApi.md#placementidprofitsplitsput) | **PUT** /placement/{id}/profitsplits | PUT: Update revenue split of placement
[**placementIdYourcompanydetailPut**](PlacementApi.md#placementidyourcompanydetailput) | **PUT** /placement/{id}/yourcompanydetail | PUT: Update your company detail of placement
[**updatePlacement**](PlacementApi.md#updateplacement) | **PUT** /placement/{id}/candidatedetail | PUT: Update candidate detail of placement

# **gETAPlacement**
> \Swagger\Client\Model\InlineResponse20038 gETAPlacement($id)

GET: View A placement detail

Get a specific placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementCandidatedetail**
> \Swagger\Client\Model\InlineResponse200100 gETAPlacementCandidatedetail($id)

GET: View A placement - candidatedetail

Get a specific placement - candidatedetail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementCandidatedetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementCandidatedetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementCompanyClientDetail**
> \Swagger\Client\Model\InlineResponse200101 gETAPlacementCompanyClientDetail($id)

GET: View A placement - company client detail

Get a specific placement - company client detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementCompanyClientDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementCompanyClientDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementCostOfSaleDetail**
> \Swagger\Client\Model\InlineResponse200103[] gETAPlacementCostOfSaleDetail($id)

GET: View A placement - Cost Of Sale detail

Get a specific placement - Cost Of Sale detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementCostOfSaleDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementCostOfSaleDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200103[]**](../Model/InlineResponse200103.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementInvoiceDetail**
> \Swagger\Client\Model\InlineResponse200107 gETAPlacementInvoiceDetail($id)

GET: View A placement - Invoice Detail

Get a specific placement - invoice detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementInvoiceDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementInvoiceDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200107**](../Model/InlineResponse200107.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementJobSiteWithJobContract**
> \Swagger\Client\Model\InlineResponse200108 gETAPlacementJobSiteWithJobContract($id)

GET: View A placement - Job Site

Get a specific placement - Job Site with job contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementJobSiteWithJobContract($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementJobSiteWithJobContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200108**](../Model/InlineResponse200108.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementMyob**
> \Swagger\Client\Model\InlineResponse200106 gETAPlacementMyob($id)

GET: View A placement - myob

Get a specific placement - myob

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementMyob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementMyob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200106**](../Model/InlineResponse200106.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementOtherInvoiceItem**
> \Swagger\Client\Model\InlineResponse200104[] gETAPlacementOtherInvoiceItem($id)

GET: View A placement - other invoice item

Get a specific placement - other invoice item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementOtherInvoiceItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementOtherInvoiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200104[]**](../Model/InlineResponse200104.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementRevenueSplit**
> \Swagger\Client\Model\InlineResponse200105[] gETAPlacementRevenueSplit($id)

GET: View A placement -  Revenue split

Get a specific placement - Revenue split

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementRevenueSplit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementRevenueSplit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200105[]**](../Model/InlineResponse200105.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementTimeSheetWithJobContract**
> \Swagger\Client\Model\InlineResponse200109 gETAPlacementTimeSheetWithJobContract($id)

GET: View A placement - Time Sheet

Get a specific placement - Time Sheet with job contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementTimeSheetWithJobContract($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementTimeSheetWithJobContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200109**](../Model/InlineResponse200109.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAPlacementYourCompanyDetail**
> \Swagger\Client\Model\InlineResponse200102 gETAPlacementYourCompanyDetail($id)

GET: View A placement - your company detail

Get a specific placement - your company detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | placement_id

try {
    $result = $apiInstance->gETAPlacementYourCompanyDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->gETAPlacementYourCompanyDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdCompanydetailPut**
> \Swagger\Client\Model\InlineResponse200101 placementIdCompanydetailPut($body, $id)

PUT: Update company client detail of placement

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body40(); // \Swagger\Client\Model\Body40 | client company detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdCompanydetailPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdCompanydetailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body40**](../Model/Body40.md)| client company detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdCostofsalesPut**
> \Swagger\Client\Model\InlineResponse200103[] placementIdCostofsalesPut($body, $id)

PUT: Update Cost Of Sale detail of placement

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\InlineResponse200103()); // \Swagger\Client\Model\InlineResponse200103[] | cost of sales detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdCostofsalesPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdCostofsalesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InlineResponse200103[]**](../Model/InlineResponse200103.md)| cost of sales detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200103[]**](../Model/InlineResponse200103.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdMyobPut**
> \Swagger\Client\Model\Body43 placementIdMyobPut($body, $id)

PUT: Update placement - myob

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body43(); // \Swagger\Client\Model\Body43 | list myob  detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdMyobPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdMyobPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body43**](../Model/Body43.md)| list myob  detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\Body43**](../Model/Body43.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdOtherinvoiceitemsPut**
> \Swagger\Client\Model\InlineResponse200104[] placementIdOtherinvoiceitemsPut($body, $id)

PUT: Update other invoice item of placement

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\InlineResponse200104()); // \Swagger\Client\Model\InlineResponse200104[] | other invoice items detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdOtherinvoiceitemsPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdOtherinvoiceitemsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InlineResponse200104[]**](../Model/InlineResponse200104.md)| other invoice items detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200104[]**](../Model/InlineResponse200104.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdPlacementinvoicedetailPut**
> \Swagger\Client\Model\InlineResponse200107 placementIdPlacementinvoicedetailPut($body, $id)

PUT: Update placement - Invoice Detail

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body44(); // \Swagger\Client\Model\Body44 | placement invoice detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdPlacementinvoicedetailPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdPlacementinvoicedetailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body44**](../Model/Body44.md)| placement invoice detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200107**](../Model/InlineResponse200107.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdProfitsplitsPut**
> \Swagger\Client\Model\InlineResponse200105[] placementIdProfitsplitsPut($body, $id)

PUT: Update revenue split of placement

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\Body42()); // \Swagger\Client\Model\Body42[] | profit split details to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdProfitsplitsPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdProfitsplitsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body42[]**](../Model/Body42.md)| profit split details to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200105[]**](../Model/InlineResponse200105.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placementIdYourcompanydetailPut**
> \Swagger\Client\Model\InlineResponse200102 placementIdYourcompanydetailPut($body, $id)

PUT: Update your company detail of placement

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body41(); // \Swagger\Client\Model\Body41 | your company detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->placementIdYourcompanydetailPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->placementIdYourcompanydetailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body41**](../Model/Body41.md)| your company detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlacement**
> \Swagger\Client\Model\InlineResponse200100 updatePlacement($body, $id)

PUT: Update candidate detail of placement

Updates an existing placement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body39(); // \Swagger\Client\Model\Body39 | candidate detail to add on placement
$id = 56; // int | placement_id

try {
    $result = $apiInstance->updatePlacement($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->updatePlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body39**](../Model/Body39.md)| candidate detail to add on placement |
 **id** | **int**| placement_id |

### Return type

[**\Swagger\Client\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

