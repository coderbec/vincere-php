<?php
/**
 * InlineResponse20039
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
 * InlineResponse20039 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20039 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_39';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'placement_id' => 'int',
'candidate_id' => 'int',
'placed_date' => 'string',
'placed_by' => 'float',
'offer_date' => 'string',
'placement_date' => 'string',
'start_date' => 'string',
'end_date' => 'string',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'placement_id' => null,
'candidate_id' => null,
'placed_date' => null,
'placed_by' => null,
'offer_date' => null,
'placement_date' => null,
'start_date' => null,
'end_date' => null,
'status' => null    ];

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
        'placement_id' => 'placement_id',
'candidate_id' => 'candidate_id',
'placed_date' => 'placed_date',
'placed_by' => 'placed_by',
'offer_date' => 'offer_date',
'placement_date' => 'placement_date',
'start_date' => 'start_date',
'end_date' => 'end_date',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'placement_id' => 'setPlacementId',
'candidate_id' => 'setCandidateId',
'placed_date' => 'setPlacedDate',
'placed_by' => 'setPlacedBy',
'offer_date' => 'setOfferDate',
'placement_date' => 'setPlacementDate',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'placement_id' => 'getPlacementId',
'candidate_id' => 'getCandidateId',
'placed_date' => 'getPlacedDate',
'placed_by' => 'getPlacedBy',
'offer_date' => 'getOfferDate',
'placement_date' => 'getPlacementDate',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'status' => 'getStatus'    ];

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

    const STATUS_PLACEMENT_ACTIVE = 'PLACEMENT_ACTIVE';
const STATUS_TERMINATED = 'TERMINATED';
const STATUS_RENEWAL_PENDING = 'RENEWAL_PENDING';
const STATUS_PLACEMENT_STARTING = 'PLACEMENT_STARTING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PLACEMENT_ACTIVE,
self::STATUS_TERMINATED,
self::STATUS_RENEWAL_PENDING,
self::STATUS_PLACEMENT_STARTING,        ];
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
        $this->container['placement_id'] = isset($data['placement_id']) ? $data['placement_id'] : null;
        $this->container['candidate_id'] = isset($data['candidate_id']) ? $data['candidate_id'] : null;
        $this->container['placed_date'] = isset($data['placed_date']) ? $data['placed_date'] : null;
        $this->container['placed_by'] = isset($data['placed_by']) ? $data['placed_by'] : null;
        $this->container['offer_date'] = isset($data['offer_date']) ? $data['offer_date'] : null;
        $this->container['placement_date'] = isset($data['placement_date']) ? $data['placement_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets placement_id
     *
     * @return int
     */
    public function getPlacementId()
    {
        return $this->container['placement_id'];
    }

    /**
     * Sets placement_id
     *
     * @param int $placement_id internal id
     *
     * @return $this
     */
    public function setPlacementId($placement_id)
    {
        $this->container['placement_id'] = $placement_id;

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
     * Gets placed_date
     *
     * @return string
     */
    public function getPlacedDate()
    {
        return $this->container['placed_date'];
    }

    /**
     * Sets placed_date
     *
     * @param string $placed_date This is date move candidate offer to Placed Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setPlacedDate($placed_date)
    {
        $this->container['placed_date'] = $placed_date;

        return $this;
    }

    /**
     * Gets placed_by
     *
     * @return float
     */
    public function getPlacedBy()
    {
        return $this->container['placed_by'];
    }

    /**
     * Sets placed_by
     *
     * @param float $placed_by Pay Rate of job
     *
     * @return $this
     */
    public function setPlacedBy($placed_by)
    {
        $this->container['placed_by'] = $placed_by;

        return $this;
    }

    /**
     * Gets offer_date
     *
     * @return string
     */
    public function getOfferDate()
    {
        return $this->container['offer_date'];
    }

    /**
     * Sets offer_date
     *
     * @param string $offer_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setOfferDate($offer_date)
    {
        $this->container['offer_date'] = $offer_date;

        return $this;
    }

    /**
     * Gets placement_date
     *
     * @return string
     */
    public function getPlacementDate()
    {
        return $this->container['placement_date'];
    }

    /**
     * Sets placement_date
     *
     * @param string $placement_date This is date working Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setPlacementDate($placement_date)
    {
        $this->container['placement_date'] = $placement_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date Must be in format \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param string $status This is status of placed
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