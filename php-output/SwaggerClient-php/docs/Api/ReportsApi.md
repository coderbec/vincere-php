# Swagger\Client\ReportsApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatisticsFilterValues**](ReportsApi.md#getstatisticsfiltervalues) | **GET** /api/v2/report/statistics/filters | GET: filter values for current user
[**getUserStatistics**](ReportsApi.md#getuserstatistics) | **GET** /api/v2/report/statistics | GET: Statistics of a user

# **getStatisticsFilterValues**
> \Swagger\Client\Model\InlineResponse20059 getStatisticsFilterValues()

GET: filter values for current user

GET values that can be used as filter values for this [api](documentation.html#operation/getUserStatistics)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatisticsFilterValues();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getStatisticsFilterValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserStatistics**
> \Swagger\Client\Model\InlineResponse20058 getUserStatistics($consultant_id, $period)

GET: Statistics of a user

Get statistics of a user in given period. If the request parameter consultant_id is not specified, it means all consultants are selected. Note: for the list of allowable users to filter by, please call to this [api](documentation.html#operation/getStatisticsFilterValues).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consultant_id = 56; // int | id of user in Vincere.
$period = "period_example"; // string | period of statistics.

try {
    $result = $apiInstance->getUserStatistics($consultant_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getUserStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consultant_id** | **int**| id of user in Vincere. | [optional]
 **period** | **string**| period of statistics. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

