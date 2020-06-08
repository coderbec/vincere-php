# Swagger\Client\SearchApi

All URIs are relative to */api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCandidate**](SearchApi.md#searchcandidate) | **GET** /candidate/search/matrix_vars | GET: Search Candidate Records
[**searchCompany**](SearchApi.md#searchcompany) | **GET** /company/search/matrix_vars | GET: Search Company Records
[**searchContact**](SearchApi.md#searchcontact) | **GET** /contact/search/matrix_vars | GET: Search Contact Records
[**searchGeneralInfo**](SearchApi.md#searchgeneralinfo) | **GET** /{entity}/search/{matrix_vars} | GET: Search Records
[**searchJob**](SearchApi.md#searchjob) | **GET** /job/search/matrix_vars | GET: Search Job Records
[**searchUser**](SearchApi.md#searchuser) | **GET** /user/search/matrix_vars | GET: Search User Records

# **searchCandidate**
> searchCandidate()

GET: Search Candidate Records

Return a list of candidate records matched with the search criterias.    Example:  candidate/search/fl=id,name,created_date,industry,fe;mlt.fl=industry_id,fe_id;sort=created_date asc?q=id:29822%23&start=0&language=ja  List of candidate supporting search fields.  Search field | Description | search_type  ------------ | ----------- | -----------  id | ID of candidate | value  text | common search fields (name, email)  | text  current_location_name | current location name | text  current_address | current address | text  current_country_code | country code | text current_state | state | text current_city | city | text current_district | district | text current_postal_code | postal code | text name | full name | text  primary_email | public primary email of candidate | text  dob | date of birth | date_time_range  industry_id | Industry id  | value  fe_id | functional expertise id | value  sfe_id | sub functional expertise id | value  candidate_source_id | candidate source id | value  phone | primary phone of candidate | text  mobile | mobile | text  linkedin | linkedin | text  skype | skype | text  website | website | text  skill | skill set | text  owner_id | candidate owner id | value  note | candidate notes including note title + note content | text current_salary | current salary | range  desired_salary | desired salary | range currency | currency type | value  keyword | keywords of candidate | text met_status | met/ not_met status |  value last_update | last update on candidate | date_time_range  created_date | created date of candidate |  date_time_range  current_radius | radius search for currrent location | radius  current_job_title | Current job title | text hot_end_date | hot end date of candidate | date_time_range current_employer | current employer in case it's text field | text current_employer_id | current employer id in case it's linked to existing companies in system | value employer | last employers of candidate | text kana_name | kana name | text deleted |  Set 1 if the candidate is deleted and 0 if it is not | value    List of candidate supporting returned fields.  Returned field | Description | sortable  ------------ | ----------- | -----------  id | ID of candidate | yes  photo | URL to logo | no name  | full name - First_Name Last_Name Middle_Name  | yes  first_name | first name | yes  last_name | last name | yes  middle_name | middle name | yes  first_name_kana | first name in kana | no  last_name_kana | last name in kana | no  gender | gender | yes  met_status | met/ not_met status | yes  employment_type | employment type | no  created_date | created date of candidate | yes  primary_email | primary email | yes  dob | date of birth | yes  linkedin | linkedin | no  skype | skype | no  website | website | no  skill | skill | no  keywords | keywords | no  current_salary | no-formatted current salary | yes  desired_salary | no - formatted desired salary | yes  formatted_current_salary | formatted current salary | yes  formatted_desired_salary | formatte desired salary | yes  currency | currency type | yes  fe | list of functional expertise | no  sfe | list of sub functional expertise | no  industry | list of industry | no  owners | list of candidate owners | no  candidate_source | candidate source | no  current_location | current location of candidate | no  note | executive note | no  current_job_title | Current job title | no  phone | Phone | no  mobile | Mobile | no  last_update | Last update timestamp | yes current_employer | text of current employer | yes current_employer_obj | basic company object (id + name) of current employer | no created_by | name of user creator candidate | no deleted_timestamp | the deleted_timestamp date of the user | no deleted |  1 if the user is deleted and 0 if it is not | no    **[See list of query params, matrix variables and response attributes](documentation.html#operation/searchGeneralInfo)**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchCandidate();
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCandidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCompany**
> searchCompany()

GET: Search Company Records

Return a list of company records matched with the search criterias.   Example:  api/v2/company/search/fl=id,created_date,last_update,owners,industry;language=ja;sort=created_date asc?q=owner_id: 30154 %23  List of company supporting search fields.  Search field | Description | search_type  ------------ | ----------- | -----------  id | ID of company | value  text | common search fields (company name)  | text  name | company name | text  switch_board | company switch board | text  owner_id | company owner id | value  headquarter | headquarter | text  note | company note | text industry_id | industry id  | value  website | website | text  facebook | facebook | text  linkedin | linkedin | text  rss | rss | text  fax | fax | text  phone | phone | text  hot_end_date | hot end date of company | date_time_range last_update | last update on company | date_time_range  created_date | created date of company |  date_time_range location_name | location name | text  address | address | text  country_code | country code | text  state | state | text  city | city | text  district | district | text  postal_code | postal code | text  radius | radius search for location | radius  parent_company_id | parent company id | value      List of company supporting returned fields.  Returned field | Description | sortable  ------------ | ----------- | -----------  id | ID of company | yes  photo | URL to logo | no name  | company name  | yes  facebook  | facebook  | yes  linkedin  | linkedin  | yes  website  | website  | yes  rss  | rss  | yes  fax  | fax  | no  note | company note | no  switch_board | company switch board | no  hot_end_date | hot end date | yes  created_date | created date of company | yes  last_update | Last update timestamp | yes owners | company owners | no  industry | list of industry | no location | List location of company | no  parent_company | Parent company summary | no  no_of_contacts | Number of contacts related to company | no created_by | name of user creator company | no    **[See list of query params, matrix variables and response attributes](documentation.html#operation/searchGeneralInfo)**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchCompany();
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContact**
> searchContact()

GET: Search Contact Records

Return a list of contact records matched with the search criterias.   Example:  api/v2/contact/search/fl=id,current_location;sort=created_date asc?q=owner_id:30143 %23  List of contact supporting search fields.  Search field | Description | search_type  ------------ | ----------- | -----------  id | ID of contact | value  text | common search fields (name, email)  | text  name | full name | text  industry_id | industry id  | value  fe_id | functional expertise id | value  sfe_id | sub functional expertise id | value  last_update | last update on contact | date_time_range  created_date | created date of contact |  date_time_range owner_id | contact owner id | value  current_location_name | current location name | text  current_address | current address | text  current_country_code | current country code | text  current_city | current city | text  current_district | current district | text  current_postal_code | current postal code | text  current_state | current state | text  current_radius | radius search for currrent location | radius  work_location_name | location name of working location | text  work_address | address of working location | text  work_country_code | country code of working location | text  work_city | city of working location | text  work_district | district of working location | text  work_postal_code | postal code of working location | text  work_state |  state of working location  | text  work_radius | radius search for working location | radius  dob | date of birth | date_time_range  company_id | company id of contact | value  company_name | company name related to contact | text linkedin | linkedin | text  skype | skype | text  twitter | twitter | text  facebook | facebook | text  email | primary emails of contact | text  job_title | Job title of contact | text  note | contact note | text hot_end_date | hot end date of contact | date_time_range preferred_name | preferred name (or nickname) | text  skill | skill | text  phone | primary phone | text  mobile | mobile | text  kana_name | kana name | text    List of contact supporting returned fields.  Returned field | Description | sortable  ------------ | ----------- | -----------  id | ID of contact | yes  photo | URL to logo | no name  | full name - First_Name Last_Name Middle_Name  | yes  job_title  | Contact job title  | yes  facebook  | facebook  | yes  twitter  | twitter  | yes  linkedin  | linkedin  | yes  skype  | skype  | yes  note | contact note | no  hot_end_date | hot end date | yes  email | List of contact emails | no  dob | date of birth | yes  current_location | current location of contact | no  fe | list of functional expertise | no  sfe | list of sub functional expertise | no  industry | list of industry | no  owners | list of contact owners | no  created_date | created date of contact | yes last_update | last update of contact | yes phone | Phone | no  mobile | Mobile | no  company | company summary of the contact | no  work_location | working location | no first_name_kana | first name kana | yes last_name_kana | last name kana | yes created_by | name of user creator contact | no    **[See list of query params, matrix variables and response attributes](documentation.html#operation/searchGeneralInfo)**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchContact();
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGeneralInfo**
> \Swagger\Client\Model\InlineResponse20099 searchGeneralInfo($entity, $matrix_vars, $q, $fq, $start, $limit, $language)

GET: Search Records

Return a list of records matched with the search criterias. The search queries provided as URL-encoded URL parameters.   Query format:  /api/v2/{entity}/search/fl=field_list;lang=en;sort=sort_fields;mlt.fl=moreLikeThis.fields?q=query&start=0&limit=25  Parameters and responses of search endpoints would be the same cross entities. For more details  on supporting search and returned fields, refer to corresponding section.    * **[Candidate Search](documentation.html#operation/searchCandidate)**   * **[Job Search](documentation.html#operation/searchJob)**   * **[Contact Search](documentation.html#operation/searchContact)**   * **[Company Search](documentation.html#operation/searchCompany)** * **[User Search](documentation.html#operation/searchUser)**  ### How to search by using CUSTOM FIELDS Custom fields are supported in all of the Vincere Search APIs (Candidate, Job, Contact and Company Search). In order to use this, Admin User of Vincere is required to have the Custom Fields created first under each of the data set categories ( Candidate, Job, Contact and Company). When creating the Custom Field, Admin User must ensure that the custom field's name does not match any of the system field names already in the system. They must be unique so the key can be used to identify the correct custom field. To set up Custom Fields in Vincere, please go to the Vincere -> Settings -> Configuration tools.  Each created Custom Fields comes with Field Key, Field Value and Field Type. In order for you to perform search using the API, you will need to know the Field Key of the Custom Field (this can be auto generated key or user defined key) and the Value that you would like to use for your search query.   Vincere will perform the search based on the custom field type (value, text or datetime).  In the case of a Field Key duplication, the duplicated fields from different data entities would be shown in the search results.  Below is some example on how you can search by using the Custom Fields:  __Created Custom Field Data Entity:__ Job  __Created Custom Field Name:__ Posted To Job Board  __Created Custom Field Type:__ Radio Button  __Created Custom Field Value:__ Not posted (value = 1) and Posted (value = 2)  __Use Case:__ Find me all the jobs (id and job title) with the Job Custom Field called \"Posted to Job Board\" (User defined Field Key: \"open_to_hp\", Field Type: Radio Button) where the value contains \"Posted\" (2nd value in the radio button = 2).  __API Call Example:__ /api/v2/job/search/fl=id,name%3Bsort=created_date%20desc?q=open_to_hp:2%23  Return Value of the above call will show all the jobs where the Custom Field \"Posted To Job Board\" value is set to \"Posted\" (value = 2).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = "entity_example"; // string | Entity to do search. Currently support candidate, job, contact and company.
$matrix_vars = "matrix_vars_example"; // string | Matrix variables (please see https://www.w3.org/DesignIssues/MatrixURIs.html) Vincere supports: - mlt.fl: more - like - this search fields (string array separated by commas. Example: mlt.fl=fe_id, sfe_id ) It helps to find similar results to query. - fl: returned fields (string array separated by commas. Example: fl=id, location, fe). Supported fields that could be retrieved.  - sort: sorting fields (string array separated by commas. Example: sort=id desc, created_date asc). (desc | asc) for the order   Not all returned fields is sortable. Please see detailed information for the list of sortable fields.
$q = "q_example"; // string | query to search
$fq = array("fq_example"); // string[] | filter queries to search. It would be applied for search and mlt
$start = 56; // int | From the set of matched results, return record numbers start from. Default to 0
$limit = 56; // int | Limit on the number of records to return. Default to 25, max limit is 100
$language = "language_example"; // string | Supported languages in system.

try {
    $result = $apiInstance->searchGeneralInfo($entity, $matrix_vars, $q, $fq, $start, $limit, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchGeneralInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | **string**| Entity to do search. Currently support candidate, job, contact and company. |
 **matrix_vars** | **string**| Matrix variables (please see https://www.w3.org/DesignIssues/MatrixURIs.html) Vincere supports: - mlt.fl: more - like - this search fields (string array separated by commas. Example: mlt.fl&#x3D;fe_id, sfe_id ) It helps to find similar results to query. - fl: returned fields (string array separated by commas. Example: fl&#x3D;id, location, fe). Supported fields that could be retrieved.  - sort: sorting fields (string array separated by commas. Example: sort&#x3D;id desc, created_date asc). (desc | asc) for the order   Not all returned fields is sortable. Please see detailed information for the list of sortable fields. |
 **q** | **string**| query to search | [optional]
 **fq** | [**string[]**](../Model/string.md)| filter queries to search. It would be applied for search and mlt | [optional]
 **start** | **int**| From the set of matched results, return record numbers start from. Default to 0 | [optional]
 **limit** | **int**| Limit on the number of records to return. Default to 25, max limit is 100 | [optional]
 **language** | **string**| Supported languages in system. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20099**](../Model/InlineResponse20099.md)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchJob**
> searchJob()

GET: Search Job Records

Return a list of job records matched with the search criterias.   Example:  /api/v2/job/search/fl=id,location,job_title,created_date,industry,fe;mlt.fl=industry_id,fe_id;sort=created_date asc?q=id:29822%23&start=0&language=ja  List of job supporting search fields.  Search field | Description | search_type  ------------ | ----------- | -----------  id | ID of job | value  text | text search in multiple fields: job title, summary, public description and keyword | text  industry_id | Industry Id    | value  fe_id | functional expertise id | value  sfe_id | sub functional expertise id | value  owner_id | job owner id | value  summary | Summary | text  job_title | Job Title | text internal_description | internal description | text  public_description | public description | text  private_job | find jobs which are set private / public. 0= public, 1=private | value  closed_date | closed date of job.  | date_time_range  open_date | open date | date_time_range  published_date | the timestamp that job is published | date_time_range  job_type | Job type. Reference job type section for accepted | value  employment_type | employment type. Reference employment type section for accepted search value | value  job_description | General text field. It includes keywords, job title, summary and public description | text  location_radius | radius search. See search section for how to construct radius term | radius  salary_from | salary from. Range search type | range  salary_to | salary to. Range search type | range  currency | currency type | value  pay_interval | pay interval. Reference pay interval type section for accepted search value | value  salary_type | salary type. Reference salary type section for accepted value | value  location_name | text search for location name. | text  address | text search for address. | text  country_code | text search for country_code. | text  state | text search for state. | text  city | text search for city. | text  district | text search for district. | text  postal_code | text search for postal_code. | text  pay_rate | pay rate | range  last_update | last update on job | date_time_range  created_date | created date of job | date_time_range  contact_id | contact id of jobs | value  company_id | company id of jobs | value  hot_end_date | hot end date of jobs | date_time_range pay_interval | Pay Interval | value monthly_pay_rate | monthly pay rate | range monthly_salary_from | monthly salary from. Range search type | range  monthly_salary_to | monthly salary to. Range search type | range       List of job supporting returned fields.  Returned field | Description | sortable  ------------ | ----------- | -----------  id | ID of job | yes  photo | URL to logo | no job_title  | Job title  | yes  keywords | keywords | no  fe | list of functional expertise | no  sfe | list of sub functional expertise | no  industry | list of industry | no  owners | list of job owners | no  internal_description | internal description | no  public_description | public description | no  job_summary | Job summary | no  open_date | Job open date | yes  closed_date | Job closed date | yes  hot_end_date | hot end date | yes  head_count | head count | no  created_date | created date of job | yes  currency | currency type | yes  pay_rate | no - formatted payrate | yes  formatted_pay_rate | formatted | yes  salary_from | no - salary from | yes  salary_to | no - salary to | yes  formatted_salary_from | formatted salary from | no  formatted_salary_to | formatted salary to | no  contract_length | contract length | no  note | job note | no  location | job location object | no  job_type | job type enum values | no  employment_type | employment type | yes | private_job | private job value. (1/0) is returned | no  published_date | the date job is made public | yes  description | description of job. Summary, or in case of NULL value, public description is returned | no  contact | contact summary of the job | no  company | company summary of the job | no  last_update | Last update timestamp | yes salary_type | Salary Type for permanent jobs | no pay_interval | Pay interval for contract jobs | no  monthly_pay_rate | monthly payrate | yes formatted_monthly_pay_rate | formatted monthly payrate | no monthly_salary_from | formatted monthly salary from | yes  monthly_salary_to | monthly salary to | yes  formatted_monthly_salary_from | formatted monthly salary from | no  formatted_monthly_salary_to | formatted monthly salary to | no live_list_url | candidate live list url | no no_of_active_applications | number of active applications | no created_by | name of user creator job | no last_update_by | name of user job update job | no    **[See list of query params, matrix variables and response attributes](documentation.html#operation/searchGeneralInfo)**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchJob();
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUser**
> searchUser()

GET: Search User Records

Return a list of user records matched with the search criterias.  Example:  api/v2/user/search/fl=id,full_name,industries;language=ja;sort=full_name asc?q=id: 30154 %23  List of user supporting search fields.  Search field | Description | search_type ------------ | ----------- | ----------- id | ID of company | value text | common search fields (user's full name, email, job title)  | text full_name | user's full name | text email | user's email address | text entity | user's entity | text brands | the brands where user is assigned to. Note: Require the list of values of Brand. GET /def/brands | value primary_brand | the primary brands where user is assigned to. Note: Require the list of values of Brand. GET /def/brands | value divisions | the divisions where user is assigned to. Note: Require the list of values of Division. GET /def/divisions | value teams | the teams where user is assigned to. Note: Require the list of values of Team. GET /def/teams | value locations | the locations where user is assigned to. Note: Require the list of values of Location. GET /def/locations | value industries | the industries where user is assigned to. Note: Require the list of values of Industry. GET /def/industries | value functional_expertises | the functional_expertises where user is assigned to. Note: Require the list of values of Functional Expertises. GET /def/fe | value res_director | the responsibilities where user is assigned to. Set 1 if you want to search the boolean director users | value res_manager | the responsibilities where user is assigned to. Set 1 if you want to search the boolean manager users | value res_consultant | the responsibilities where user is assigned to. Set 1 if you want to search the boolean consultant users | value res_researcher | the responsibilities where user is assigned to. Set 1 if you want to search the boolean researcher users | value res_system_admin | the responsibilities where user is assigned to. Set 1 if you want to search the boolean system admin users | value deactivated | The status of the user. Set 1 if you want to search the boolean deactivated users. | value deleted | Set 1 if the user is deleted and 0 if it is not | value    List of user supporting returned fields.  Returned field | Description | sortable ------------ | ----------- | ----------- id | ID of user | yes photo | URL of the photo of the user | no full_name  | full name - First_Name Last_Name  | yes first_name  | first name  | yes last_name  | last name  | yes job_title  | job title  | yes phone  | phone number  | yes phone_ext  | extension  | yes email | email address | yes entity | entity of the user | yes brands | brands of the user | no primary_brand | primary brand of the user | no divisions | divisions of the user | no teams | teams of the user | no locations | locations of the user | no industries | industries of the user | no functional_expertises | functional expertises of the user | no res_director |  1 if the user is have responsibility director and 0 if it is not | no res_manager |  1 if the user is have responsibility consultant and 0 if it is not | no res_consultant |  1 if the user is have responsibility consultant and 0 if it is not | no res_researcher |  1 if the user is have responsibility researcher and 0 if it is not | no res_system_admin | 1 if the user is have responsibility system_admin and 0 if it is not | no deactivated | 1 if the user is inactive and 0 if it is active | no display_language | default language setting of the user | no email_is_integrated |  1 if the user is integrated and 0 if it is not | no insert_timestamp | the creation date of the user | no deleted_timestamp | the deleted_timestamp date of the user | no deleted |  1 if the user is deleted and 0 if it is not | no last_updated_timestamp | the updated date of the user | no timezone | the timezone settings of the user | yes user_location | address location of the user | yes    **[See list of query params, matrix variables and response attributes](documentation.html#operation/searchGeneralInfo)**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuthSample
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchUser();
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuthSample](../../README.md#oAuthSample)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

