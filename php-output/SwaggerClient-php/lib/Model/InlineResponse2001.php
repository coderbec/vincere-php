<?php
/**
 * InlineResponse2001
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
 * InlineResponse2001 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'candidate_id' => 'int',
'candidate_first_name' => 'string',
'candidate_last_name' => 'string',
'candidate_middle_name' => 'string',
'company_id' => 'int',
'company_name' => 'string',
'creator_id' => 'int',
'cv_sent_stage_associated_date' => 'string',
'external_id' => 'string',
'id' => 'int',
'interview_1_stage_associated_date' => 'string',
'interview_2_plus_stage_associated_date' => 'string',
'invoice_stage_associated_date' => 'string',
'job_id' => 'int',
'job_title' => 'string',
'job_type' => 'string',
'offer_stage_associated_date' => 'string',
'placed_stage_associated_date' => 'string',
'work_start_date' => 'string',
'work_end_date' => 'string',
'registration_date' => 'string',
'shortlisted_stage_associated_date' => 'string',
'substatus' => '\Swagger\Client\Model\InlineResponse20098',
'stage' => 'string',
'status' => 'string',
'valid_move_forward_stages' => 'string[]',
'customer_portal_document_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'candidate_id' => null,
'candidate_first_name' => null,
'candidate_last_name' => null,
'candidate_middle_name' => null,
'company_id' => null,
'company_name' => null,
'creator_id' => null,
'cv_sent_stage_associated_date' => null,
'external_id' => null,
'id' => null,
'interview_1_stage_associated_date' => null,
'interview_2_plus_stage_associated_date' => null,
'invoice_stage_associated_date' => null,
'job_id' => null,
'job_title' => null,
'job_type' => null,
'offer_stage_associated_date' => null,
'placed_stage_associated_date' => null,
'work_start_date' => null,
'work_end_date' => null,
'registration_date' => null,
'shortlisted_stage_associated_date' => null,
'substatus' => null,
'stage' => null,
'status' => null,
'valid_move_forward_stages' => null,
'customer_portal_document_count' => null    ];

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
        'candidate_id' => 'candidate_id',
'candidate_first_name' => 'candidate_first_name',
'candidate_last_name' => 'candidate_last_name',
'candidate_middle_name' => 'candidate_middle_name',
'company_id' => 'company_id',
'company_name' => 'company_name',
'creator_id' => 'creator_id',
'cv_sent_stage_associated_date' => 'cv_sent_stage_associated_date',
'external_id' => 'external_id',
'id' => 'id',
'interview_1_stage_associated_date' => 'interview_1_stage_associated_date',
'interview_2_plus_stage_associated_date' => 'interview_2_plus_stage_associated_date',
'invoice_stage_associated_date' => 'invoice_stage_associated_date',
'job_id' => 'job_id',
'job_title' => 'job_title',
'job_type' => 'job_type',
'offer_stage_associated_date' => 'offer_stage_associated_date',
'placed_stage_associated_date' => 'placed_stage_associated_date',
'work_start_date' => 'work_start_date',
'work_end_date' => 'work_end_date',
'registration_date' => 'registration_date',
'shortlisted_stage_associated_date' => 'shortlisted_stage_associated_date',
'substatus' => 'substatus',
'stage' => 'stage',
'status' => 'status',
'valid_move_forward_stages' => 'valid_move_forward_stages',
'customer_portal_document_count' => 'customer_portal_document_count'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'candidate_id' => 'setCandidateId',
'candidate_first_name' => 'setCandidateFirstName',
'candidate_last_name' => 'setCandidateLastName',
'candidate_middle_name' => 'setCandidateMiddleName',
'company_id' => 'setCompanyId',
'company_name' => 'setCompanyName',
'creator_id' => 'setCreatorId',
'cv_sent_stage_associated_date' => 'setCvSentStageAssociatedDate',
'external_id' => 'setExternalId',
'id' => 'setId',
'interview_1_stage_associated_date' => 'setInterview1StageAssociatedDate',
'interview_2_plus_stage_associated_date' => 'setInterview2PlusStageAssociatedDate',
'invoice_stage_associated_date' => 'setInvoiceStageAssociatedDate',
'job_id' => 'setJobId',
'job_title' => 'setJobTitle',
'job_type' => 'setJobType',
'offer_stage_associated_date' => 'setOfferStageAssociatedDate',
'placed_stage_associated_date' => 'setPlacedStageAssociatedDate',
'work_start_date' => 'setWorkStartDate',
'work_end_date' => 'setWorkEndDate',
'registration_date' => 'setRegistrationDate',
'shortlisted_stage_associated_date' => 'setShortlistedStageAssociatedDate',
'substatus' => 'setSubstatus',
'stage' => 'setStage',
'status' => 'setStatus',
'valid_move_forward_stages' => 'setValidMoveForwardStages',
'customer_portal_document_count' => 'setCustomerPortalDocumentCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'candidate_id' => 'getCandidateId',
'candidate_first_name' => 'getCandidateFirstName',
'candidate_last_name' => 'getCandidateLastName',
'candidate_middle_name' => 'getCandidateMiddleName',
'company_id' => 'getCompanyId',
'company_name' => 'getCompanyName',
'creator_id' => 'getCreatorId',
'cv_sent_stage_associated_date' => 'getCvSentStageAssociatedDate',
'external_id' => 'getExternalId',
'id' => 'getId',
'interview_1_stage_associated_date' => 'getInterview1StageAssociatedDate',
'interview_2_plus_stage_associated_date' => 'getInterview2PlusStageAssociatedDate',
'invoice_stage_associated_date' => 'getInvoiceStageAssociatedDate',
'job_id' => 'getJobId',
'job_title' => 'getJobTitle',
'job_type' => 'getJobType',
'offer_stage_associated_date' => 'getOfferStageAssociatedDate',
'placed_stage_associated_date' => 'getPlacedStageAssociatedDate',
'work_start_date' => 'getWorkStartDate',
'work_end_date' => 'getWorkEndDate',
'registration_date' => 'getRegistrationDate',
'shortlisted_stage_associated_date' => 'getShortlistedStageAssociatedDate',
'substatus' => 'getSubstatus',
'stage' => 'getStage',
'status' => 'getStatus',
'valid_move_forward_stages' => 'getValidMoveForwardStages',
'customer_portal_document_count' => 'getCustomerPortalDocumentCount'    ];

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
const STAGE_SHORTLISTED = 'SHORTLISTED';
const STAGE_SENT = 'SENT';
const STAGE_FIRST_INTERVIEW = 'FIRST_INTERVIEW';
const STAGE_SECOND_INTERVIEW = 'SECOND_INTERVIEW';
const STAGE_THIRD_INTERVIEW = 'THIRD_INTERVIEW';
const STAGE_FOURTH_INTERVIEW = 'FOURTH_INTERVIEW';
const STAGE_FIFTH_INTERVIEW = 'FIFTH_INTERVIEW';
const STAGE_LAST_INTERVIEW_ROUND = 'LAST_INTERVIEW_ROUND';
const STAGE_OFFERED = 'OFFERED';
const STAGE_PLACED = 'PLACED';
const STAGE_PLACEMENT_PERMANENT = 'PLACEMENT_PERMANENT';
const STAGE_PLACEMENT_CONTRACT = 'PLACEMENT_CONTRACT';
const STAGE_PLACEMENT_TEMP = 'PLACEMENT_TEMP';
const STAGE_INVOICED = 'INVOICED';
const STATUS_SHORTLISTED_RESUMES_SELECTED = 'SHORTLISTED_RESUMES_SELECTED';
const STATUS_SHORTLISTED_AWAITING_CANDIDATE_CONFIRM = 'SHORTLISTED_AWAITING_CANDIDATE_CONFIRM';
const STATUS_SHORTLISTED_CANDIDATE_ACCEPTED = 'SHORTLISTED_CANDIDATE_ACCEPTED';
const STATUS_SHORTLISTED_CANDIDATE_REJECTED = 'SHORTLISTED_CANDIDATE_REJECTED';
const STATUS_CV_SENT_AWAITING_COMPANY_CONFIRM = 'CV_SENT_AWAITING_COMPANY_CONFIRM';
const STATUS_CV_SENT_COMPANY_PENDING = 'CV_SENT_COMPANY_PENDING';
const STATUS_CV_SENT_COMPANY_ACCEPTED_RESUME = 'CV_SENT_COMPANY_ACCEPTED_RESUME';
const STATUS_CV_SENT_COMPANY_REJECTED_RESUME = 'CV_SENT_COMPANY_REJECTED_RESUME';
const STATUS_CV_RECEIVED_KEEP_IN_VIEW = 'CV_RECEIVED_KEEP_IN_VIEW';
const STATUS_INTERVIEW_AWAITING_SCHEDULE = 'INTERVIEW_AWAITING_SCHEDULE';
const STATUS_INTERVIEW_SCHEDULED = 'INTERVIEW_SCHEDULED';
const STATUS_INTERVIEW_CANDIDATE_RESCHEDULED = 'INTERVIEW_CANDIDATE_RESCHEDULED';
const STATUS_INTERVIEW_AWAITING_DATETIME_CONFIRM = 'INTERVIEW_AWAITING_DATETIME_CONFIRM';
const STATUS_INTERVIEW_COMPLETED = 'INTERVIEW_COMPLETED';
const STATUS_OFFER_ACCEPTED = 'OFFER_ACCEPTED';
const STATUS_OFFER_REJECTED = 'OFFER_REJECTED';
const STATUS_OFFERED_PENDING = 'OFFERED_PENDING';
const STATUS_PLACED = 'PLACED';
const STATUS_INVOICED_PAID = 'INVOICED_PAID';
const STATUS_INVOICED_PENDING = 'INVOICED_PENDING';
const STATUS_INVOICED_OVERDUE = 'INVOICED_OVERDUE';
const STATUS_REJECTED = 'REJECTED';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStageAllowableValues()
    {
        return [
            self::STAGE_SHORTLISTED,
self::STAGE_SENT,
self::STAGE_FIRST_INTERVIEW,
self::STAGE_SECOND_INTERVIEW,
self::STAGE_THIRD_INTERVIEW,
self::STAGE_FOURTH_INTERVIEW,
self::STAGE_FIFTH_INTERVIEW,
self::STAGE_LAST_INTERVIEW_ROUND,
self::STAGE_OFFERED,
self::STAGE_PLACED,
self::STAGE_PLACEMENT_PERMANENT,
self::STAGE_PLACEMENT_CONTRACT,
self::STAGE_PLACEMENT_TEMP,
self::STAGE_INVOICED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SHORTLISTED_RESUMES_SELECTED,
self::STATUS_SHORTLISTED_AWAITING_CANDIDATE_CONFIRM,
self::STATUS_SHORTLISTED_CANDIDATE_ACCEPTED,
self::STATUS_SHORTLISTED_CANDIDATE_REJECTED,
self::STATUS_CV_SENT_AWAITING_COMPANY_CONFIRM,
self::STATUS_CV_SENT_COMPANY_PENDING,
self::STATUS_CV_SENT_COMPANY_ACCEPTED_RESUME,
self::STATUS_CV_SENT_COMPANY_REJECTED_RESUME,
self::STATUS_CV_RECEIVED_KEEP_IN_VIEW,
self::STATUS_INTERVIEW_AWAITING_SCHEDULE,
self::STATUS_INTERVIEW_SCHEDULED,
self::STATUS_INTERVIEW_CANDIDATE_RESCHEDULED,
self::STATUS_INTERVIEW_AWAITING_DATETIME_CONFIRM,
self::STATUS_INTERVIEW_COMPLETED,
self::STATUS_OFFER_ACCEPTED,
self::STATUS_OFFER_REJECTED,
self::STATUS_OFFERED_PENDING,
self::STATUS_PLACED,
self::STATUS_INVOICED_PAID,
self::STATUS_INVOICED_PENDING,
self::STATUS_INVOICED_OVERDUE,
self::STATUS_REJECTED,        ];
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
        $this->container['candidate_id'] = isset($data['candidate_id']) ? $data['candidate_id'] : null;
        $this->container['candidate_first_name'] = isset($data['candidate_first_name']) ? $data['candidate_first_name'] : null;
        $this->container['candidate_last_name'] = isset($data['candidate_last_name']) ? $data['candidate_last_name'] : null;
        $this->container['candidate_middle_name'] = isset($data['candidate_middle_name']) ? $data['candidate_middle_name'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['cv_sent_stage_associated_date'] = isset($data['cv_sent_stage_associated_date']) ? $data['cv_sent_stage_associated_date'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['interview_1_stage_associated_date'] = isset($data['interview_1_stage_associated_date']) ? $data['interview_1_stage_associated_date'] : null;
        $this->container['interview_2_plus_stage_associated_date'] = isset($data['interview_2_plus_stage_associated_date']) ? $data['interview_2_plus_stage_associated_date'] : null;
        $this->container['invoice_stage_associated_date'] = isset($data['invoice_stage_associated_date']) ? $data['invoice_stage_associated_date'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['job_type'] = isset($data['job_type']) ? $data['job_type'] : null;
        $this->container['offer_stage_associated_date'] = isset($data['offer_stage_associated_date']) ? $data['offer_stage_associated_date'] : null;
        $this->container['placed_stage_associated_date'] = isset($data['placed_stage_associated_date']) ? $data['placed_stage_associated_date'] : null;
        $this->container['work_start_date'] = isset($data['work_start_date']) ? $data['work_start_date'] : null;
        $this->container['work_end_date'] = isset($data['work_end_date']) ? $data['work_end_date'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['shortlisted_stage_associated_date'] = isset($data['shortlisted_stage_associated_date']) ? $data['shortlisted_stage_associated_date'] : null;
        $this->container['substatus'] = isset($data['substatus']) ? $data['substatus'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['valid_move_forward_stages'] = isset($data['valid_move_forward_stages']) ? $data['valid_move_forward_stages'] : null;
        $this->container['customer_portal_document_count'] = isset($data['customer_portal_document_count']) ? $data['customer_portal_document_count'] : null;
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

        $allowedValues = $this->getStageAllowableValues();
        if (!is_null($this->container['stage']) && !in_array($this->container['stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets candidate_id
     *
     * @return int
     */
    public function getCandidateId()
    {
        return $this->container['candidate_id'];
    }

    /**
     * Sets candidate_id
     *
     * @param int $candidate_id candidate internal id
     *
     * @return $this
     */
    public function setCandidateId($candidate_id)
    {
        $this->container['candidate_id'] = $candidate_id;

        return $this;
    }

    /**
     * Gets candidate_first_name
     *
     * @return string
     */
    public function getCandidateFirstName()
    {
        return $this->container['candidate_first_name'];
    }

    /**
     * Sets candidate_first_name
     *
     * @param string $candidate_first_name candidate_first_name
     *
     * @return $this
     */
    public function setCandidateFirstName($candidate_first_name)
    {
        $this->container['candidate_first_name'] = $candidate_first_name;

        return $this;
    }

    /**
     * Gets candidate_last_name
     *
     * @return string
     */
    public function getCandidateLastName()
    {
        return $this->container['candidate_last_name'];
    }

    /**
     * Sets candidate_last_name
     *
     * @param string $candidate_last_name candidate_last_name
     *
     * @return $this
     */
    public function setCandidateLastName($candidate_last_name)
    {
        $this->container['candidate_last_name'] = $candidate_last_name;

        return $this;
    }

    /**
     * Gets candidate_middle_name
     *
     * @return string
     */
    public function getCandidateMiddleName()
    {
        return $this->container['candidate_middle_name'];
    }

    /**
     * Sets candidate_middle_name
     *
     * @param string $candidate_middle_name candidate_middle_name
     *
     * @return $this
     */
    public function setCandidateMiddleName($candidate_middle_name)
    {
        $this->container['candidate_middle_name'] = $candidate_middle_name;

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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * Gets cv_sent_stage_associated_date
     *
     * @return string
     */
    public function getCvSentStageAssociatedDate()
    {
        return $this->container['cv_sent_stage_associated_date'];
    }

    /**
     * Sets cv_sent_stage_associated_date
     *
     * @param string $cv_sent_stage_associated_date The date time when the candidate's CV is sent to the company. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setCvSentStageAssociatedDate($cv_sent_stage_associated_date)
    {
        $this->container['cv_sent_stage_associated_date'] = $cv_sent_stage_associated_date;

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
     * Gets interview_1_stage_associated_date
     *
     * @return string
     */
    public function getInterview1StageAssociatedDate()
    {
        return $this->container['interview_1_stage_associated_date'];
    }

    /**
     * Sets interview_1_stage_associated_date
     *
     * @param string $interview_1_stage_associated_date The date time when the schedule for the first interview is sent. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setInterview1StageAssociatedDate($interview_1_stage_associated_date)
    {
        $this->container['interview_1_stage_associated_date'] = $interview_1_stage_associated_date;

        return $this;
    }

    /**
     * Gets interview_2_plus_stage_associated_date
     *
     * @return string
     */
    public function getInterview2PlusStageAssociatedDate()
    {
        return $this->container['interview_2_plus_stage_associated_date'];
    }

    /**
     * Sets interview_2_plus_stage_associated_date
     *
     * @param string $interview_2_plus_stage_associated_date The date time when the schedule for the second or later interview is sent. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setInterview2PlusStageAssociatedDate($interview_2_plus_stage_associated_date)
    {
        $this->container['interview_2_plus_stage_associated_date'] = $interview_2_plus_stage_associated_date;

        return $this;
    }

    /**
     * Gets invoice_stage_associated_date
     *
     * @return string
     */
    public function getInvoiceStageAssociatedDate()
    {
        return $this->container['invoice_stage_associated_date'];
    }

    /**
     * Sets invoice_stage_associated_date
     *
     * @param string $invoice_stage_associated_date The date time when the invoice is created for this job application. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setInvoiceStageAssociatedDate($invoice_stage_associated_date)
    {
        $this->container['invoice_stage_associated_date'] = $invoice_stage_associated_date;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param int $job_id job internal id
     *
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

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
     * @param string $job_title job_title
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
     * Gets offer_stage_associated_date
     *
     * @return string
     */
    public function getOfferStageAssociatedDate()
    {
        return $this->container['offer_stage_associated_date'];
    }

    /**
     * Sets offer_stage_associated_date
     *
     * @param string $offer_stage_associated_date The date time when the offer is created. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setOfferStageAssociatedDate($offer_stage_associated_date)
    {
        $this->container['offer_stage_associated_date'] = $offer_stage_associated_date;

        return $this;
    }

    /**
     * Gets placed_stage_associated_date
     *
     * @return string
     */
    public function getPlacedStageAssociatedDate()
    {
        return $this->container['placed_stage_associated_date'];
    }

    /**
     * Sets placed_stage_associated_date
     *
     * @param string $placed_stage_associated_date The date time when the candidate is placed for the job. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setPlacedStageAssociatedDate($placed_stage_associated_date)
    {
        $this->container['placed_stage_associated_date'] = $placed_stage_associated_date;

        return $this;
    }

    /**
     * Gets work_start_date
     *
     * @return string
     */
    public function getWorkStartDate()
    {
        return $this->container['work_start_date'];
    }

    /**
     * Sets work_start_date
     *
     * @param string $work_start_date The date time when the candidate starts working for the job. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setWorkStartDate($work_start_date)
    {
        $this->container['work_start_date'] = $work_start_date;

        return $this;
    }

    /**
     * Gets work_end_date
     *
     * @return string
     */
    public function getWorkEndDate()
    {
        return $this->container['work_end_date'];
    }

    /**
     * Sets work_end_date
     *
     * @param string $work_end_date The date time when the candidate ends working for the job. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setWorkEndDate($work_end_date)
    {
        $this->container['work_end_date'] = $work_end_date;

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
     * Gets shortlisted_stage_associated_date
     *
     * @return string
     */
    public function getShortlistedStageAssociatedDate()
    {
        return $this->container['shortlisted_stage_associated_date'];
    }

    /**
     * Sets shortlisted_stage_associated_date
     *
     * @param string $shortlisted_stage_associated_date The date time when the candidate is shortlisted to the job. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setShortlistedStageAssociatedDate($shortlisted_stage_associated_date)
    {
        $this->container['shortlisted_stage_associated_date'] = $shortlisted_stage_associated_date;

        return $this;
    }

    /**
     * Gets substatus
     *
     * @return \Swagger\Client\Model\InlineResponse20098
     */
    public function getSubstatus()
    {
        return $this->container['substatus'];
    }

    /**
     * Sets substatus
     *
     * @param \Swagger\Client\Model\InlineResponse20098 $substatus substatus
     *
     * @return $this
     */
    public function setSubstatus($substatus)
    {
        $this->container['substatus'] = $substatus;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return string
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param string $stage The stage this application is at.
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $allowedValues = $this->getStageAllowableValues();
        if (!is_null($stage) && !in_array($stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the job in the corresponding stage.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets valid_move_forward_stages
     *
     * @return string[]
     */
    public function getValidMoveForwardStages()
    {
        return $this->container['valid_move_forward_stages'];
    }

    /**
     * Sets valid_move_forward_stages
     *
     * @param string[] $valid_move_forward_stages valid_move_forward_stages
     *
     * @return $this
     */
    public function setValidMoveForwardStages($valid_move_forward_stages)
    {
        $this->container['valid_move_forward_stages'] = $valid_move_forward_stages;

        return $this;
    }

    /**
     * Gets customer_portal_document_count
     *
     * @return int
     */
    public function getCustomerPortalDocumentCount()
    {
        return $this->container['customer_portal_document_count'];
    }

    /**
     * Sets customer_portal_document_count
     *
     * @param int $customer_portal_document_count Number of candidate's documents shared to customer portal.
     *
     * @return $this
     */
    public function setCustomerPortalDocumentCount($customer_portal_document_count)
    {
        $this->container['customer_portal_document_count'] = $customer_portal_document_count;

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
