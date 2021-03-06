<?php
/**
 * Body1
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
 * Body1 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'candidate_ids' => 'int[]',
'creator_id' => 'int',
'shortlisted_stage_associated_date' => 'string',
'external_id' => 'string',
'job_ids' => 'int[]',
'registration_date' => 'string',
'cv_sent_stage_associated_date' => 'string',
'stage' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'candidate_ids' => null,
'creator_id' => null,
'shortlisted_stage_associated_date' => null,
'external_id' => null,
'job_ids' => null,
'registration_date' => null,
'cv_sent_stage_associated_date' => null,
'stage' => null    ];

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
        'candidate_ids' => 'candidate_ids',
'creator_id' => 'creator_id',
'shortlisted_stage_associated_date' => 'shortlisted_stage_associated_date',
'external_id' => 'external_id',
'job_ids' => 'job_ids',
'registration_date' => 'registration_date',
'cv_sent_stage_associated_date' => 'cv_sent_stage_associated_date',
'stage' => 'stage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'candidate_ids' => 'setCandidateIds',
'creator_id' => 'setCreatorId',
'shortlisted_stage_associated_date' => 'setShortlistedStageAssociatedDate',
'external_id' => 'setExternalId',
'job_ids' => 'setJobIds',
'registration_date' => 'setRegistrationDate',
'cv_sent_stage_associated_date' => 'setCvSentStageAssociatedDate',
'stage' => 'setStage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'candidate_ids' => 'getCandidateIds',
'creator_id' => 'getCreatorId',
'shortlisted_stage_associated_date' => 'getShortlistedStageAssociatedDate',
'external_id' => 'getExternalId',
'job_ids' => 'getJobIds',
'registration_date' => 'getRegistrationDate',
'cv_sent_stage_associated_date' => 'getCvSentStageAssociatedDate',
'stage' => 'getStage'    ];

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

    const STAGE_SHORTLISTED = 'SHORTLISTED';
const STAGE_SENT = 'SENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStageAllowableValues()
    {
        return [
            self::STAGE_SHORTLISTED,
self::STAGE_SENT,        ];
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
        $this->container['candidate_ids'] = isset($data['candidate_ids']) ? $data['candidate_ids'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['shortlisted_stage_associated_date'] = isset($data['shortlisted_stage_associated_date']) ? $data['shortlisted_stage_associated_date'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['job_ids'] = isset($data['job_ids']) ? $data['job_ids'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['cv_sent_stage_associated_date'] = isset($data['cv_sent_stage_associated_date']) ? $data['cv_sent_stage_associated_date'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['candidate_ids'] === null) {
            $invalidProperties[] = "'candidate_ids' can't be null";
        }
        if ($this->container['job_ids'] === null) {
            $invalidProperties[] = "'job_ids' can't be null";
        }
        if ($this->container['registration_date'] === null) {
            $invalidProperties[] = "'registration_date' can't be null";
        }
        if ($this->container['stage'] === null) {
            $invalidProperties[] = "'stage' can't be null";
        }
        $allowedValues = $this->getStageAllowableValues();
        if (!is_null($this->container['stage']) && !in_array($this->container['stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stage', must be one of '%s'",
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
     * Gets candidate_ids
     *
     * @return int[]
     */
    public function getCandidateIds()
    {
        return $this->container['candidate_ids'];
    }

    /**
     * Sets candidate_ids
     *
     * @param int[] $candidate_ids candidate_ids
     *
     * @return $this
     */
    public function setCandidateIds($candidate_ids)
    {
        $this->container['candidate_ids'] = $candidate_ids;

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
     * @param string $shortlisted_stage_associated_date The date time when the candidate is shortlisted to the job.  If not specified, and the application is created with `stage` SHORTLISTED, it will default to the current time.  If not specified, and the application is created with `stage` SENT, it will default to take the same value as cv_sent_stage_associated_date.  Date time must be is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setShortlistedStageAssociatedDate($shortlisted_stage_associated_date)
    {
        $this->container['shortlisted_stage_associated_date'] = $shortlisted_stage_associated_date;

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
     * Gets job_ids
     *
     * @return int[]
     */
    public function getJobIds()
    {
        return $this->container['job_ids'];
    }

    /**
     * Sets job_ids
     *
     * @param int[] $job_ids job_ids
     *
     * @return $this
     */
    public function setJobIds($job_ids)
    {
        $this->container['job_ids'] = $job_ids;

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
     * @param string $cv_sent_stage_associated_date The date time when the candidate's CV is sent to the company.  This field is only taken into account if the application is created with `stage` SENT.  It will default to the current time if not specified.  Date time must be is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setCvSentStageAssociatedDate($cv_sent_stage_associated_date)
    {
        $this->container['cv_sent_stage_associated_date'] = $cv_sent_stage_associated_date;

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
     * @param string $stage The stage this Application is at.
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $allowedValues = $this->getStageAllowableValues();
        if (!in_array($stage, $allowedValues, true)) {
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
