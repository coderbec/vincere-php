# Body38

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignee_id** | **int** | ID of the user who is assigned with this task | 
**attendee_ids** | **float[]** |  | [optional] 
**candidate_ids** | **float[]** |  | [optional] 
**category_ids** | **float[]** |  | [optional] 
**company_ids** | **float[]** |  | [optional] 
**contact_ids** | **float[]** |  | [optional] 
**content** | **string** | the content of this activity | 
**creator_id** | **int** | internal id of an user in Vincere | [optional] 
**custom_name** | **string** | use this field to set value if the main_entity_type is not a known Contact, Candidate. | [optional] 
**due_date_start** | **string** | the start time for due date | [optional] 
**due_date_end** | **string** | the end time for due date | [optional] 
**insert_timestamp** | **string** | Created Date | 
**kpi_action_id** | **float** | the ID of the kpi action in Vincere. Please refer to the reference section for KPI actions. | [optional] 
**main_entity_type** | **string** | the main target of this meeting. | 
**meeting_location** | **string** | location of meeting. | [optional] 
**meeting_room** | **string** | meeting room. | [optional] 
**position_ids** | **float[]** |  | [optional] 
**other_attendee** | **string** | a comma-separated string of emails | [optional] 
**send_invitation** | **bool** | If the value is true and **assignee’s email is connected to Vincere calendar**, an event is added in the assignee’s calendar as well as an email is sent to the assignee and attendee. | [optional] 
**subject** | **string** | subject of the meeting | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

