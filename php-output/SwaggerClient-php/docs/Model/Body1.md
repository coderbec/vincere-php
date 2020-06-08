# Body1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**candidate_ids** | **int[]** |  | 
**creator_id** | **int** | internal id of an user in Vincere | [optional] 
**shortlisted_stage_associated_date** | **string** | The date time when the candidate is shortlisted to the job.  If not specified, and the application is created with &#x60;stage&#x60; SHORTLISTED, it will default to the current time.  If not specified, and the application is created with &#x60;stage&#x60; SENT, it will default to take the same value as cv_sent_stage_associated_date.  Date time must be is in this format \&quot;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSS&#x27;Z&#x27;\&quot; | [optional] 
**external_id** | **string** | external Reference id | [optional] 
**job_ids** | **int[]** |  | 
**registration_date** | **string** | Registration Date. Must be in format \&quot;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSS&#x27;Z&#x27;. | 
**cv_sent_stage_associated_date** | **string** | The date time when the candidate&#x27;s CV is sent to the company.  This field is only taken into account if the application is created with &#x60;stage&#x60; SENT.  It will default to the current time if not specified.  Date time must be is in this format \&quot;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSS&#x27;Z&#x27;\&quot; | [optional] 
**stage** | **string** | The stage this Application is at. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

