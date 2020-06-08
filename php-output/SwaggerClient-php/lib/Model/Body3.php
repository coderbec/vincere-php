<?php
/**
 * Body3
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
 * Body3 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_stage' => 'string',
'destination_stage_associated_date' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_stage' => null,
'destination_stage_associated_date' => null    ];

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
        'destination_stage' => 'destination_stage',
'destination_stage_associated_date' => 'destination_stage_associated_date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_stage' => 'setDestinationStage',
'destination_stage_associated_date' => 'setDestinationStageAssociatedDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_stage' => 'getDestinationStage',
'destination_stage_associated_date' => 'getDestinationStageAssociatedDate'    ];

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

    const DESTINATION_STAGE_FIRST_INTERVIEW = 'FIRST_INTERVIEW';
const DESTINATION_STAGE_SECOND_INTERVIEW = 'SECOND_INTERVIEW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationStageAllowableValues()
    {
        return [
            self::DESTINATION_STAGE_FIRST_INTERVIEW,
self::DESTINATION_STAGE_SECOND_INTERVIEW,        ];
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
        $this->container['destination_stage'] = isset($data['destination_stage']) ? $data['destination_stage'] : null;
        $this->container['destination_stage_associated_date'] = isset($data['destination_stage_associated_date']) ? $data['destination_stage_associated_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destination_stage'] === null) {
            $invalidProperties[] = "'destination_stage' can't be null";
        }
        $allowedValues = $this->getDestinationStageAllowableValues();
        if (!is_null($this->container['destination_stage']) && !in_array($this->container['destination_stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['destination_stage_associated_date'] === null) {
            $invalidProperties[] = "'destination_stage_associated_date' can't be null";
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
     * Gets destination_stage
     *
     * @return string
     */
    public function getDestinationStage()
    {
        return $this->container['destination_stage'];
    }

    /**
     * Sets destination_stage
     *
     * @param string $destination_stage The stage this application is at.
     *
     * @return $this
     */
    public function setDestinationStage($destination_stage)
    {
        $allowedValues = $this->getDestinationStageAllowableValues();
        if (!in_array($destination_stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_stage'] = $destination_stage;

        return $this;
    }

    /**
     * Gets destination_stage_associated_date
     *
     * @return string
     */
    public function getDestinationStageAssociatedDate()
    {
        return $this->container['destination_stage_associated_date'];
    }

    /**
     * Sets destination_stage_associated_date
     *
     * @param string $destination_stage_associated_date The date time when the application is moved into this stage. Value is in this format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setDestinationStageAssociatedDate($destination_stage_associated_date)
    {
        $this->container['destination_stage_associated_date'] = $destination_stage_associated_date;

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
