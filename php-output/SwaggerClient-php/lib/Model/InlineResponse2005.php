<?php
/**
 * InlineResponse2005
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
 * InlineResponse2005 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2005 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_type' => 'string',
'user_id' => 'int',
'user_name' => 'string',
'log_date' => 'string',
'candidate_id' => 'int',
'job_id' => 'int',
'configurable_stage_id' => 'int',
'stage' => 'string',
'configurable_stage_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_type' => null,
'user_id' => null,
'user_name' => null,
'log_date' => null,
'candidate_id' => null,
'job_id' => null,
'configurable_stage_id' => null,
'stage' => null,
'configurable_stage_name' => null    ];

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
        'action_type' => 'action_type',
'user_id' => 'user_id',
'user_name' => 'user_name',
'log_date' => 'log_date',
'candidate_id' => 'candidate_id',
'job_id' => 'job_id',
'configurable_stage_id' => 'configurable_stage_id',
'stage' => 'stage',
'configurable_stage_name' => 'configurable_stage_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
'user_id' => 'setUserId',
'user_name' => 'setUserName',
'log_date' => 'setLogDate',
'candidate_id' => 'setCandidateId',
'job_id' => 'setJobId',
'configurable_stage_id' => 'setConfigurableStageId',
'stage' => 'setStage',
'configurable_stage_name' => 'setConfigurableStageName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
'user_id' => 'getUserId',
'user_name' => 'getUserName',
'log_date' => 'getLogDate',
'candidate_id' => 'getCandidateId',
'job_id' => 'getJobId',
'configurable_stage_id' => 'getConfigurableStageId',
'stage' => 'getStage',
'configurable_stage_name' => 'getConfigurableStageName'    ];

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
        $this->container['action_type'] = isset($data['action_type']) ? $data['action_type'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['log_date'] = isset($data['log_date']) ? $data['log_date'] : null;
        $this->container['candidate_id'] = isset($data['candidate_id']) ? $data['candidate_id'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['configurable_stage_id'] = isset($data['configurable_stage_id']) ? $data['configurable_stage_id'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['configurable_stage_name'] = isset($data['configurable_stage_name']) ? $data['configurable_stage_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets action_type
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string $action_type Action type of moving application is moved next stage as SHORTLISTED, MOVE_CANDIDATE_TO_SENT, MOVE_CANDIDATE_TO_1ST_INTERVIEW, MOVE_CANDIDATE_TO_2ND_PLUS_INTERVIEW, MOVE_CANDIDATE_TO_OFFERED, MOVE_CANDIDATE_TO_PLACED and MOVE_CANDIDATE_TO_CONFIG_STAGE
     *
     * @return $this
     */
    public function setActionType($action_type)
    {
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id internal id of an user in Vincere
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name internal name of an user in Vincere
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets log_date
     *
     * @return string
     */
    public function getLogDate()
    {
        return $this->container['log_date'];
    }

    /**
     * Sets log_date
     *
     * @param string $log_date The date time when the candidate moves next stage. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setLogDate($log_date)
    {
        $this->container['log_date'] = $log_date;

        return $this;
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
     * Gets configurable_stage_id
     *
     * @return int
     */
    public function getConfigurableStageId()
    {
        return $this->container['configurable_stage_id'];
    }

    /**
     * Sets configurable_stage_id
     *
     * @param int $configurable_stage_id Id of configurable stage
     *
     * @return $this
     */
    public function setConfigurableStageId($configurable_stage_id)
    {
        $this->container['configurable_stage_id'] = $configurable_stage_id;

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
     * @param string $stage Stage of application as SHORTLISTED, SENT, FIRST_INTERVIEW, SECOND_INTERVIEW, THIRD_INTERVIEW, FOURTH_INTERVIEW, FIFTH_INTERVIEW, LAST_INTERVIEW_ROUND, OFFERED, PLACEMENT_PERMANENT, PLACEMENT_CONTRACT, PLACEMENT_TEMP
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets configurable_stage_name
     *
     * @return string
     */
    public function getConfigurableStageName()
    {
        return $this->container['configurable_stage_name'];
    }

    /**
     * Sets configurable_stage_name
     *
     * @param string $configurable_stage_name Name of configurable stage
     *
     * @return $this
     */
    public function setConfigurableStageName($configurable_stage_name)
    {
        $this->container['configurable_stage_name'] = $configurable_stage_name;

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
