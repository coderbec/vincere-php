# ApplicationidstagenextonboardingPermanentJobOffer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**annual_paid_holiday** | **float** |  | [optional] 
**annual_paid_sick_day** | **float** |  | [optional] 
**annual_salary** | **float** |  | 
**currency_type** | **string** | The user&#x27;s currency setting. Please see reference list for currency | 
**exempt_incentives** | [**\Swagger\Client\Model\ApplicationidstagenextofferedPermanentJobOfferExemptIncentives[]**](ApplicationidstagenextofferedPermanentJobOfferExemptIncentives.md) |  | [optional] 
**guarantee_incentives** | [**\Swagger\Client\Model\ApplicationidstagenextofferedPermanentJobOfferExemptIncentives[]**](ApplicationidstagenextofferedPermanentJobOfferExemptIncentives.md) |  | [optional] 
**months_per_year** | **float** | **mandatory if salary_type is MONTHLY, but ignored if salary_type is ANNUAL** | [optional] 
**other_costs** | [**\Swagger\Client\Model\ApplicationidstagenextofferedPermanentJobOfferOtherCosts[]**](ApplicationidstagenextofferedPermanentJobOfferOtherCosts.md) |  | [optional] 
**percentage_of_annual_salary** | **float** | percentage of Annual salary use for quick fee forecast | [optional] 
**personal_info** | [**\Swagger\Client\Model\ApplicationidstagenextofferedPermanentJobOfferPersonalInfo**](ApplicationidstagenextofferedPermanentJobOfferPersonalInfo.md) |  | [optional] 
**salary_from** | **float** |  | [optional] 
**salary_to** | **float** |  | [optional] 
**salary_type** | **string** | salary type for permanent job | 
**statutory_govt_tax** | [**\Swagger\Client\Model\ApplicationidstagenextofferedPermanentJobOfferStatutoryGovtTax[]**](ApplicationidstagenextofferedPermanentJobOfferStatutoryGovtTax.md) |  | [optional] 
**use_quick_fee_forecast** | **bool** | **NOTICE: If true, use % of annual salary instead of fee mode calculation.**  **And, all the fields except for percentage_of_annual_salary will be ignored.** | [optional] 
**working_day_per_month** | **float** |  | 
**working_day_per_week** | **float** |  | 
**working_hour_per_day** | **float** |  | 
**working_week_per_month** | **float** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

