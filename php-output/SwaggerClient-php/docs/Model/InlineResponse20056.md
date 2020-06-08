# InlineResponse20056

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed** | **bool** |  | [optional] 
**content** | **string** |  | [optional] 
**creator** | [**\Swagger\Client\Model\InlineResponse20041**](InlineResponse20041.md) |  | [optional] 
**custom_name** | **string** | this field is set value if the main_entity_type is not a known Contact, Candidate, Job. | [optional] 
**due_date_start** | **string** | the start time for due date | [optional] 
**due_date_end** | **string** | the end time for due date | [optional] 
**id** | **int** | internal comment id | [optional] 
**insert_timestamp** | **string** | Created Date | [optional] 
**kpi_action_id** | **float** | the ID of the kpi action in Vincere. Please refer to the reference section for KPI actions. | [optional] 
**main_entity_type** | **string** | The main entity of the activity. Based on the returned value, client can send request to another method to get details of the main entity.  For example, if return value is CANDIDATE, client can get details of the candidate by calling the api to get linked candidates. | [optional] 
**meeting_location** | **string** | location of meeting. | [optional] 
**meeting_room** | **string** | meeting room. | [optional] 
**other_attendee** | **string** | a comma-separated string of emails | [optional] 
**subject** | **string** |  | [optional] 
**assignee** | [**\Swagger\Client\Model\InlineResponse20041**](InlineResponse20041.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

