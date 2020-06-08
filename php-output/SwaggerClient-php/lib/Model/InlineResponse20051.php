<?php
/**
 * InlineResponse20051
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Vincere REST API
 *
 * Last updated date: **2019-12-03**  Change log on **[GitHub](https://github.com/vincere-io/restful-api-support)**
 *
 * OpenAPI spec version: 2-oas3
 * Contact: integration@vincere.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse20051 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20051 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_51';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_submit_candidate' => 'bool',
'close_date' => 'string',
'company_id' => 'int',
'company_location_id' => 'int',
'compensation' => '\Swagger\Client\Model\ActivitycommentcommentIdpositionsCompensation',
'contact_id' => 'int',
'contract_length' => 'float',
'creator_id' => 'int',
'difficulty_level' => 'int',
'employment_type' => 'string',
'external_id' => 'string',
'floated_job' => 'bool',
'forecast_annual_fee' => 'float',
'forecast_annual_fee_currency' => 'string',
'head_count' => 'int',
'hiring_line_manager' => 'string',
'hot_end_date' => 'string',
'id' => 'int',
'indeed_published_date' => 'string',
'industry_id' => 'int',
'internal_description' => 'string',
'internal_recruiter_contact_id' => 'int',
'job_title' => 'string',
'job_type' => 'string',
'note' => 'string',
'open_date' => 'string',
'pay_rate' => 'float',
'percentage_placement' => 'float',
'projected_placement_date' => 'string',
'private_job' => 'bool',
'public_description' => 'string',
'reason_for_difficulty' => 'string',
'registration_date' => 'string',
'site_manager_contact_id' => 'int',
'skill_keywords' => 'string',
'sourcing_difficulty' => 'int',
'summary' => 'string',
'update_user_id' => 'int',
'updated_timestamp' => 'string',
'visible_to_all' => 'bool',
'live_list_url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_submit_candidate' => null,
'close_date' => null,
'company_id' => null,
'company_location_id' => null,
'compensation' => null,
'contact_id' => null,
'contract_length' => null,
'creator_id' => null,
'difficulty_level' => null,
'employment_type' => null,
'external_id' => null,
'floated_job' => null,
'forecast_annual_fee' => null,
'forecast_annual_fee_currency' => null,
'head_count' => null,
'hiring_line_manager' => null,
'hot_end_date' => null,
'id' => null,
'indeed_published_date' => null,
'industry_id' => null,
'internal_description' => null,
'internal_recruiter_contact_id' => null,
'job_title' => null,
'job_type' => null,
'note' => null,
'open_date' => null,
'pay_rate' => null,
'percentage_placement' => null,
'projected_placement_date' => null,
'private_job' => null,
'public_description' => null,
'reason_for_difficulty' => null,
'registration_date' => null,
'site_manager_contact_id' => null,
'skill_keywords' => null,
'sourcing_difficulty' => null,
'summary' => null,
'update_user_id' => null,
'updated_timestamp' => null,
'visible_to_all' => null,
'live_list_url' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'auto_submit_candidate' => 'auto_submit_candidate',
'close_date' => 'close_date',
'company_id' => 'company_id',
'company_location_id' => 'company_location_id',
'compensation' => 'compensation',
'contact_id' => 'contact_id',
'contract_length' => 'contract_length',
'creator_id' => 'creator_id',
'difficulty_level' => 'difficulty_level',
'employment_type' => 'employment_type',
'external_id' => 'external_id',
'floated_job' => 'floated_job',
'forecast_annual_fee' => 'forecast_annual_fee',
'forecast_annual_fee_currency' => 'forecast_annual_fee_currency',
'head_count' => 'head_count',
'hiring_line_manager' => 'hiring_line_manager',
'hot_end_date' => 'hot_end_date',
'id' => 'id',
'indeed_published_date' => 'indeed_published_date',
'industry_id' => 'industry_id',
'internal_description' => 'internal_description',
'internal_recruiter_contact_id' => 'internal_recruiter_contact_id',
'job_title' => 'job_title',
'job_type' => 'job_type',
'note' => 'note',
'open_date' => 'open_date',
'pay_rate' => 'pay_rate',
'percentage_placement' => 'percentage_placement',
'projected_placement_date' => 'projected_placement_date',
'private_job' => 'private_job',
'public_description' => 'public_description',
'reason_for_difficulty' => 'reason_for_difficulty',
'registration_date' => 'registration_date',
'site_manager_contact_id' => 'site_manager_contact_id',
'skill_keywords' => 'skill_keywords',
'sourcing_difficulty' => 'sourcing_difficulty',
'summary' => 'summary',
'update_user_id' => 'update_user_id',
'updated_timestamp' => 'updated_timestamp',
'visible_to_all' => 'visible_to_all',
'live_list_url' => 'live_list_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_submit_candidate' => 'setAutoSubmitCandidate',
'close_date' => 'setCloseDate',
'company_id' => 'setCompanyId',
'company_location_id' => 'setCompanyLocationId',
'compensation' => 'setCompensation',
'contact_id' => 'setContactId',
'contract_length' => 'setContractLength',
'creator_id' => 'setCreatorId',
'difficulty_level' => 'setDifficultyLevel',
'employment_type' => 'setEmploymentType',
'external_id' => 'setExternalId',
'floated_job' => 'setFloatedJob',
'forecast_annual_fee' => 'setForecastAnnualFee',
'forecast_annual_fee_currency' => 'setForecastAnnualFeeCurrency',
'head_count' => 'setHeadCount',
'hiring_line_manager' => 'setHiringLineManager',
'hot_end_date' => 'setHotEndDate',
'id' => 'setId',
'indeed_published_date' => 'setIndeedPublishedDate',
'industry_id' => 'setIndustryId',
'internal_description' => 'setInternalDescription',
'internal_recruiter_contact_id' => 'setInternalRecruiterContactId',
'job_title' => 'setJobTitle',
'job_type' => 'setJobType',
'note' => 'setNote',
'open_date' => 'setOpenDate',
'pay_rate' => 'setPayRate',
'percentage_placement' => 'setPercentagePlacement',
'projected_placement_date' => 'setProjectedPlacementDate',
'private_job' => 'setPrivateJob',
'public_description' => 'setPublicDescription',
'reason_for_difficulty' => 'setReasonForDifficulty',
'registration_date' => 'setRegistrationDate',
'site_manager_contact_id' => 'setSiteManagerContactId',
'skill_keywords' => 'setSkillKeywords',
'sourcing_difficulty' => 'setSourcingDifficulty',
'summary' => 'setSummary',
'update_user_id' => 'setUpdateUserId',
'updated_timestamp' => 'setUpdatedTimestamp',
'visible_to_all' => 'setVisibleToAll',
'live_list_url' => 'setLiveListUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_submit_candidate' => 'getAutoSubmitCandidate',
'close_date' => 'getCloseDate',
'company_id' => 'getCompanyId',
'company_location_id' => 'getCompanyLocationId',
'compensation' => 'getCompensation',
'contact_id' => 'getContactId',
'contract_length' => 'getContractLength',
'creator_id' => 'getCreatorId',
'difficulty_level' => 'getDifficultyLevel',
'employment_type' => 'getEmploymentType',
'external_id' => 'getExternalId',
'floated_job' => 'getFloatedJob',
'forecast_annual_fee' => 'getForecastAnnualFee',
'forecast_annual_fee_currency' => 'getForecastAnnualFeeCurrency',
'head_count' => 'getHeadCount',
'hiring_line_manager' => 'getHiringLineManager',
'hot_end_date' => 'getHotEndDate',
'id' => 'getId',
'indeed_published_date' => 'getIndeedPublishedDate',
'industry_id' => 'getIndustryId',
'internal_description' => 'getInternalDescription',
'internal_recruiter_contact_id' => 'getInternalRecruiterContactId',
'job_title' => 'getJobTitle',
'job_type' => 'getJobType',
'note' => 'getNote',
'open_date' => 'getOpenDate',
'pay_rate' => 'getPayRate',
'percentage_placement' => 'getPercentagePlacement',
'projected_placement_date' => 'getProjectedPlacementDate',
'private_job' => 'getPrivateJob',
'public_description' => 'getPublicDescription',
'reason_for_difficulty' => 'getReasonForDifficulty',
'registration_date' => 'getRegistrationDate',
'site_manager_contact_id' => 'getSiteManagerContactId',
'skill_keywords' => 'getSkillKeywords',
'sourcing_difficulty' => 'getSourcingDifficulty',
'summary' => 'getSummary',
'update_user_id' => 'getUpdateUserId',
'updated_timestamp' => 'getUpdatedTimestamp',
'visible_to_all' => 'getVisibleToAll',
'live_list_url' => 'getLiveListUrl'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const JOB_TYPE_PERMANENT = 'PERMANENT';
const JOB_TYPE_PART_TIME = 'PART_TIME';
const JOB_TYPE_TEMPORARY = 'TEMPORARY';
const JOB_TYPE_CONTRACT = 'CONTRACT';
const JOB_TYPE_TEMP_TO_PERM = 'TEMP_TO_PERM';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_PERMANENT,
self::JOB_TYPE_PART_TIME,
self::JOB_TYPE_TEMPORARY,
self::JOB_TYPE_CONTRACT,
self::JOB_TYPE_TEMP_TO_PERM,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['auto_submit_candidate'] = isset($data['auto_submit_candidate']) ? $data['auto_submit_candidate'] : null;
        $this->container['close_date'] = isset($data['close_date']) ? $data['close_date'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['company_location_id'] = isset($data['company_location_id']) ? $data['company_location_id'] : null;
        $this->container['compensation'] = isset($data['compensation']) ? $data['compensation'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['contract_length'] = isset($data['contract_length']) ? $data['contract_length'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['difficulty_level'] = isset($data['difficulty_level']) ? $data['difficulty_level'] : null;
        $this->container['employment_type'] = isset($data['employment_type']) ? $data['employment_type'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['floated_job'] = isset($data['floated_job']) ? $data['floated_job'] : null;
        $this->container['forecast_annual_fee'] = isset($data['forecast_annual_fee']) ? $data['forecast_annual_fee'] : null;
        $this->container['forecast_annual_fee_currency'] = isset($data['forecast_annual_fee_currency']) ? $data['forecast_annual_fee_currency'] : null;
        $this->container['head_count'] = isset($data['head_count']) ? $data['head_count'] : null;
        $this->container['hiring_line_manager'] = isset($data['hiring_line_manager']) ? $data['hiring_line_manager'] : null;
        $this->container['hot_end_date'] = isset($data['hot_end_date']) ? $data['hot_end_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['indeed_published_date'] = isset($data['indeed_published_date']) ? $data['indeed_published_date'] : null;
        $this->container['industry_id'] = isset($data['industry_id']) ? $data['industry_id'] : null;
        $this->container['internal_description'] = isset($data['internal_description']) ? $data['internal_description'] : null;
        $this->container['internal_recruiter_contact_id'] = isset($data['internal_recruiter_contact_id']) ? $data['internal_recruiter_contact_id'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['job_type'] = isset($data['job_type']) ? $data['job_type'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['open_date'] = isset($data['open_date']) ? $data['open_date'] : null;
        $this->container['pay_rate'] = isset($data['pay_rate']) ? $data['pay_rate'] : null;
        $this->container['percentage_placement'] = isset($data['percentage_placement']) ? $data['percentage_placement'] : null;
        $this->container['projected_placement_date'] = isset($data['projected_placement_date']) ? $data['projected_placement_date'] : null;
        $this->container['private_job'] = isset($data['private_job']) ? $data['private_job'] : null;
        $this->container['public_description'] = isset($data['public_description']) ? $data['public_description'] : null;
        $this->container['reason_for_difficulty'] = isset($data['reason_for_difficulty']) ? $data['reason_for_difficulty'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['site_manager_contact_id'] = isset($data['site_manager_contact_id']) ? $data['site_manager_contact_id'] : null;
        $this->container['skill_keywords'] = isset($data['skill_keywords']) ? $data['skill_keywords'] : null;
        $this->container['sourcing_difficulty'] = isset($data['sourcing_difficulty']) ? $data['sourcing_difficulty'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['update_user_id'] = isset($data['update_user_id']) ? $data['update_user_id'] : null;
        $this->container['updated_timestamp'] = isset($data['updated_timestamp']) ? $data['updated_timestamp'] : null;
        $this->container['visible_to_all'] = isset($data['visible_to_all']) ? $data['visible_to_all'] : null;
        $this->container['live_list_url'] = isset($data['live_list_url']) ? $data['live_list_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getJobTypeAllowableValues();
        if (!is_null($this->container['job_type']) && !in_array($this->container['job_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'job_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets auto_submit_candidate
     *
     * @return bool
     */
    public function getAutoSubmitCandidate()
    {
        return $this->container['auto_submit_candidate'];
    }

    /**
     * Sets auto_submit_candidate
     *
     * @param bool $auto_submit_candidate auto_submit_candidate
     *
     * @return $this
     */
    public function setAutoSubmitCandidate($auto_submit_candidate)
    {
        $this->container['auto_submit_candidate'] = $auto_submit_candidate;

        return $this;
    }

    /**
     * Gets close_date
     *
     * @return string
     */
    public function getCloseDate()
    {
        return $this->container['close_date'];
    }

    /**
     * Sets close_date
     *
     * @param string $close_date Close Date for the job. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setCloseDate($close_date)
    {
        $this->container['close_date'] = $close_date;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id company internal id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets company_location_id
     *
     * @return int
     */
    public function getCompanyLocationId()
    {
        return $this->container['company_location_id'];
    }

    /**
     * Sets company_location_id
     *
     * @param int $company_location_id internal id of location in Vincere
     *
     * @return $this
     */
    public function setCompanyLocationId($company_location_id)
    {
        $this->container['company_location_id'] = $company_location_id;

        return $this;
    }

    /**
     * Gets compensation
     *
     * @return \Swagger\Client\Model\ActivitycommentcommentIdpositionsCompensation
     */
    public function getCompensation()
    {
        return $this->container['compensation'];
    }

    /**
     * Sets compensation
     *
     * @param \Swagger\Client\Model\ActivitycommentcommentIdpositionsCompensation $compensation compensation
     *
     * @return $this
     */
    public function setCompensation($compensation)
    {
        $this->container['compensation'] = $compensation;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id contact internal id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets contract_length
     *
     * @return float
     */
    public function getContractLength()
    {
        return $this->container['contract_length'];
    }

    /**
     * Sets contract_length
     *
     * @param float $contract_length Contract Length
     *
     * @return $this
     */
    public function setContractLength($contract_length)
    {
        $this->container['contract_length'] = $contract_length;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int $creator_id internal id of an user in Vincere
     *
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets difficulty_level
     *
     * @return int
     */
    public function getDifficultyLevel()
    {
        return $this->container['difficulty_level'];
    }

    /**
     * Sets difficulty_level
     *
     * @param int $difficulty_level difficulty_level
     *
     * @return $this
     */
    public function setDifficultyLevel($difficulty_level)
    {
        $this->container['difficulty_level'] = $difficulty_level;

        return $this;
    }

    /**
     * Gets employment_type
     *
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->container['employment_type'];
    }

    /**
     * Sets employment_type
     *
     * @param string $employment_type Employment Type. Please refer to reference section of employment type for possible values.
     *
     * @return $this
     */
    public function setEmploymentType($employment_type)
    {
        $this->container['employment_type'] = $employment_type;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external Reference id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets floated_job
     *
     * @return bool
     */
    public function getFloatedJob()
    {
        return $this->container['floated_job'];
    }

    /**
     * Sets floated_job
     *
     * @param bool $floated_job true if this is a floated job.
     *
     * @return $this
     */
    public function setFloatedJob($floated_job)
    {
        $this->container['floated_job'] = $floated_job;

        return $this;
    }

    /**
     * Gets forecast_annual_fee
     *
     * @return float
     */
    public function getForecastAnnualFee()
    {
        return $this->container['forecast_annual_fee'];
    }

    /**
     * Sets forecast_annual_fee
     *
     * @param float $forecast_annual_fee forecast_annual_fee
     *
     * @return $this
     */
    public function setForecastAnnualFee($forecast_annual_fee)
    {
        $this->container['forecast_annual_fee'] = $forecast_annual_fee;

        return $this;
    }

    /**
     * Gets forecast_annual_fee_currency
     *
     * @return string
     */
    public function getForecastAnnualFeeCurrency()
    {
        return $this->container['forecast_annual_fee_currency'];
    }

    /**
     * Sets forecast_annual_fee_currency
     *
     * @param string $forecast_annual_fee_currency Currency. Please refer to reference list for the currency values.
     *
     * @return $this
     */
    public function setForecastAnnualFeeCurrency($forecast_annual_fee_currency)
    {
        $this->container['forecast_annual_fee_currency'] = $forecast_annual_fee_currency;

        return $this;
    }

    /**
     * Gets head_count
     *
     * @return int
     */
    public function getHeadCount()
    {
        return $this->container['head_count'];
    }

    /**
     * Sets head_count
     *
     * @param int $head_count Head count
     *
     * @return $this
     */
    public function setHeadCount($head_count)
    {
        $this->container['head_count'] = $head_count;

        return $this;
    }

    /**
     * Gets hiring_line_manager
     *
     * @return string
     */
    public function getHiringLineManager()
    {
        return $this->container['hiring_line_manager'];
    }

    /**
     * Sets hiring_line_manager
     *
     * @param string $hiring_line_manager hiring_line_manager
     *
     * @return $this
     */
    public function setHiringLineManager($hiring_line_manager)
    {
        $this->container['hiring_line_manager'] = $hiring_line_manager;

        return $this;
    }

    /**
     * Gets hot_end_date
     *
     * @return string
     */
    public function getHotEndDate()
    {
        return $this->container['hot_end_date'];
    }

    /**
     * Sets hot_end_date
     *
     * @param string $hot_end_date Hot End Date Time for the job. Must be in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setHotEndDate($hot_end_date)
    {
        $this->container['hot_end_date'] = $hot_end_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id internal id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets indeed_published_date
     *
     * @return string
     */
    public function getIndeedPublishedDate()
    {
        return $this->container['indeed_published_date'];
    }

    /**
     * Sets indeed_published_date
     *
     * @param string $indeed_published_date The last date the job is posted in Indeed. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setIndeedPublishedDate($indeed_published_date)
    {
        $this->container['indeed_published_date'] = $indeed_published_date;

        return $this;
    }

    /**
     * Gets industry_id
     *
     * @return int
     */
    public function getIndustryId()
    {
        return $this->container['industry_id'];
    }

    /**
     * Sets industry_id
     *
     * @param int $industry_id internal id of industry in Vincere. Please refer to reference section of industry.
     *
     * @return $this
     */
    public function setIndustryId($industry_id)
    {
        $this->container['industry_id'] = $industry_id;

        return $this;
    }

    /**
     * Gets internal_description
     *
     * @return string
     */
    public function getInternalDescription()
    {
        return $this->container['internal_description'];
    }

    /**
     * Sets internal_description
     *
     * @param string $internal_description Internal Description
     *
     * @return $this
     */
    public function setInternalDescription($internal_description)
    {
        $this->container['internal_description'] = $internal_description;

        return $this;
    }

    /**
     * Gets internal_recruiter_contact_id
     *
     * @return int
     */
    public function getInternalRecruiterContactId()
    {
        return $this->container['internal_recruiter_contact_id'];
    }

    /**
     * Sets internal_recruiter_contact_id
     *
     * @param int $internal_recruiter_contact_id contact internal id
     *
     * @return $this
     */
    public function setInternalRecruiterContactId($internal_recruiter_contact_id)
    {
        $this->container['internal_recruiter_contact_id'] = $internal_recruiter_contact_id;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title Job Title
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets job_type
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->container['job_type'];
    }

    /**
     * Sets job_type
     *
     * @param string $job_type Job Type. Please refer to reference section of job types for possible values.
     *
     * @return $this
     */
    public function setJobType($job_type)
    {
        $allowedValues = $this->getJobTypeAllowableValues();
        if (!is_null($job_type) && !in_array($job_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'job_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['job_type'] = $job_type;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string $open_date Open Date for the job. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setOpenDate($open_date)
    {
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets pay_rate
     *
     * @return float
     */
    public function getPayRate()
    {
        return $this->container['pay_rate'];
    }

    /**
     * Sets pay_rate
     *
     * @param float $pay_rate Pay Rate of job
     *
     * @return $this
     */
    public function setPayRate($pay_rate)
    {
        $this->container['pay_rate'] = $pay_rate;

        return $this;
    }

    /**
     * Gets percentage_placement
     *
     * @return float
     */
    public function getPercentagePlacement()
    {
        return $this->container['percentage_placement'];
    }

    /**
     * Sets percentage_placement
     *
     * @param float $percentage_placement percentage_placement
     *
     * @return $this
     */
    public function setPercentagePlacement($percentage_placement)
    {
        $this->container['percentage_placement'] = $percentage_placement;

        return $this;
    }

    /**
     * Gets projected_placement_date
     *
     * @return string
     */
    public function getProjectedPlacementDate()
    {
        return $this->container['projected_placement_date'];
    }

    /**
     * Sets projected_placement_date
     *
     * @param string $projected_placement_date projected placement date for the job. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setProjectedPlacementDate($projected_placement_date)
    {
        $this->container['projected_placement_date'] = $projected_placement_date;

        return $this;
    }

    /**
     * Gets private_job
     *
     * @return bool
     */
    public function getPrivateJob()
    {
        return $this->container['private_job'];
    }

    /**
     * Sets private_job
     *
     * @param bool $private_job private_job
     *
     * @return $this
     */
    public function setPrivateJob($private_job)
    {
        $this->container['private_job'] = $private_job;

        return $this;
    }

    /**
     * Gets public_description
     *
     * @return string
     */
    public function getPublicDescription()
    {
        return $this->container['public_description'];
    }

    /**
     * Sets public_description
     *
     * @param string $public_description Public Description
     *
     * @return $this
     */
    public function setPublicDescription($public_description)
    {
        $this->container['public_description'] = $public_description;

        return $this;
    }

    /**
     * Gets reason_for_difficulty
     *
     * @return string
     */
    public function getReasonForDifficulty()
    {
        return $this->container['reason_for_difficulty'];
    }

    /**
     * Sets reason_for_difficulty
     *
     * @param string $reason_for_difficulty reason_for_difficulty
     *
     * @return $this
     */
    public function setReasonForDifficulty($reason_for_difficulty)
    {
        $this->container['reason_for_difficulty'] = $reason_for_difficulty;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param string $registration_date Registration Date. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
     *
     * @return $this
     */
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets site_manager_contact_id
     *
     * @return int
     */
    public function getSiteManagerContactId()
    {
        return $this->container['site_manager_contact_id'];
    }

    /**
     * Sets site_manager_contact_id
     *
     * @param int $site_manager_contact_id contact internal id
     *
     * @return $this
     */
    public function setSiteManagerContactId($site_manager_contact_id)
    {
        $this->container['site_manager_contact_id'] = $site_manager_contact_id;

        return $this;
    }

    /**
     * Gets skill_keywords
     *
     * @return string
     */
    public function getSkillKeywords()
    {
        return $this->container['skill_keywords'];
    }

    /**
     * Sets skill_keywords
     *
     * @param string $skill_keywords Skill Summary, skills are deliminated by comma, i.e. \",\"
     *
     * @return $this
     */
    public function setSkillKeywords($skill_keywords)
    {
        $this->container['skill_keywords'] = $skill_keywords;

        return $this;
    }

    /**
     * Gets sourcing_difficulty
     *
     * @return int
     */
    public function getSourcingDifficulty()
    {
        return $this->container['sourcing_difficulty'];
    }

    /**
     * Sets sourcing_difficulty
     *
     * @param int $sourcing_difficulty from 1 to 10.
     *
     * @return $this
     */
    public function setSourcingDifficulty($sourcing_difficulty)
    {
        $this->container['sourcing_difficulty'] = $sourcing_difficulty;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary Summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets update_user_id
     *
     * @return int
     */
    public function getUpdateUserId()
    {
        return $this->container['update_user_id'];
    }

    /**
     * Sets update_user_id
     *
     * @param int $update_user_id internal id of an user in Vincere
     *
     * @return $this
     */
    public function setUpdateUserId($update_user_id)
    {
        $this->container['update_user_id'] = $update_user_id;

        return $this;
    }

    /**
     * Gets updated_timestamp
     *
     * @return string
     */
    public function getUpdatedTimestamp()
    {
        return $this->container['updated_timestamp'];
    }

    /**
     * Sets updated_timestamp
     *
     * @param string $updated_timestamp last update date. Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
     *
     * @return $this
     */
    public function setUpdatedTimestamp($updated_timestamp)
    {
        $this->container['updated_timestamp'] = $updated_timestamp;

        return $this;
    }

    /**
     * Gets visible_to_all
     *
     * @return bool
     */
    public function getVisibleToAll()
    {
        return $this->container['visible_to_all'];
    }

    /**
     * Sets visible_to_all
     *
     * @param bool $visible_to_all visible_to_all
     *
     * @return $this
     */
    public function setVisibleToAll($visible_to_all)
    {
        $this->container['visible_to_all'] = $visible_to_all;

        return $this;
    }

    /**
     * Gets live_list_url
     *
     * @return string
     */
    public function getLiveListUrl()
    {
        return $this->container['live_list_url'];
    }

    /**
     * Sets live_list_url
     *
     * @param string $live_list_url candidate live list url
     *
     * @return $this
     */
    public function setLiveListUrl($live_list_url)
    {
        $this->container['live_list_url'] = $live_list_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
