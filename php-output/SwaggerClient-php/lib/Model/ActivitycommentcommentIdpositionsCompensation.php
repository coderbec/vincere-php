<?php
/**
 * ActivitycommentcommentIdpositionsCompensation
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
 * ActivitycommentcommentIdpositionsCompensation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivitycommentcommentIdpositionsCompensation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'activitycommentcomment_idpositions_compensation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_length' => 'float',
'currency' => 'string',
'formatted_pay_rate' => 'string',
'formatted_salary_from' => 'string',
'formatted_salary_to' => 'string',
'id' => 'int',
'pay_rate' => 'float',
'salary_from' => 'string',
'salary_to' => 'string',
'salary_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_length' => null,
'currency' => null,
'formatted_pay_rate' => null,
'formatted_salary_from' => null,
'formatted_salary_to' => null,
'id' => null,
'pay_rate' => null,
'salary_from' => null,
'salary_to' => null,
'salary_type' => null    ];

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
        'contract_length' => 'contract_length',
'currency' => 'currency',
'formatted_pay_rate' => 'formatted_pay_rate',
'formatted_salary_from' => 'formatted_salary_from',
'formatted_salary_to' => 'formatted_salary_to',
'id' => 'id',
'pay_rate' => 'pay_rate',
'salary_from' => 'salary_from',
'salary_to' => 'salary_to',
'salary_type' => 'salary_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_length' => 'setContractLength',
'currency' => 'setCurrency',
'formatted_pay_rate' => 'setFormattedPayRate',
'formatted_salary_from' => 'setFormattedSalaryFrom',
'formatted_salary_to' => 'setFormattedSalaryTo',
'id' => 'setId',
'pay_rate' => 'setPayRate',
'salary_from' => 'setSalaryFrom',
'salary_to' => 'setSalaryTo',
'salary_type' => 'setSalaryType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_length' => 'getContractLength',
'currency' => 'getCurrency',
'formatted_pay_rate' => 'getFormattedPayRate',
'formatted_salary_from' => 'getFormattedSalaryFrom',
'formatted_salary_to' => 'getFormattedSalaryTo',
'id' => 'getId',
'pay_rate' => 'getPayRate',
'salary_from' => 'getSalaryFrom',
'salary_to' => 'getSalaryTo',
'salary_type' => 'getSalaryType'    ];

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

    const SALARY_TYPE_ANNUAL = 'ANNUAL';
const SALARY_TYPE_HOURLY = 'HOURLY';
const SALARY_TYPE_DAILY = 'DAILY';
const SALARY_TYPE_WEEKLY = 'WEEKLY';
const SALARY_TYPE_MONTHLY = 'MONTHLY';
const SALARY_TYPE_QUATERLY = 'QUATERLY';
const SALARY_TYPE_YEARLY = 'YEARLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalaryTypeAllowableValues()
    {
        return [
            self::SALARY_TYPE_ANNUAL,
self::SALARY_TYPE_HOURLY,
self::SALARY_TYPE_DAILY,
self::SALARY_TYPE_WEEKLY,
self::SALARY_TYPE_MONTHLY,
self::SALARY_TYPE_QUATERLY,
self::SALARY_TYPE_YEARLY,        ];
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
        $this->container['contract_length'] = isset($data['contract_length']) ? $data['contract_length'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['formatted_pay_rate'] = isset($data['formatted_pay_rate']) ? $data['formatted_pay_rate'] : null;
        $this->container['formatted_salary_from'] = isset($data['formatted_salary_from']) ? $data['formatted_salary_from'] : null;
        $this->container['formatted_salary_to'] = isset($data['formatted_salary_to']) ? $data['formatted_salary_to'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['pay_rate'] = isset($data['pay_rate']) ? $data['pay_rate'] : null;
        $this->container['salary_from'] = isset($data['salary_from']) ? $data['salary_from'] : null;
        $this->container['salary_to'] = isset($data['salary_to']) ? $data['salary_to'] : null;
        $this->container['salary_type'] = isset($data['salary_type']) ? $data['salary_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSalaryTypeAllowableValues();
        if (!is_null($this->container['salary_type']) && !in_array($this->container['salary_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'salary_type', must be one of '%s'",
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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency. Please refer to reference list for the currency values.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets formatted_pay_rate
     *
     * @return string
     */
    public function getFormattedPayRate()
    {
        return $this->container['formatted_pay_rate'];
    }

    /**
     * Sets formatted_pay_rate
     *
     * @param string $formatted_pay_rate Formatted Pay Rate (e.g. USD $55,000.00)
     *
     * @return $this
     */
    public function setFormattedPayRate($formatted_pay_rate)
    {
        $this->container['formatted_pay_rate'] = $formatted_pay_rate;

        return $this;
    }

    /**
     * Gets formatted_salary_from
     *
     * @return string
     */
    public function getFormattedSalaryFrom()
    {
        return $this->container['formatted_salary_from'];
    }

    /**
     * Sets formatted_salary_from
     *
     * @param string $formatted_salary_from Formatted Salary Range From
     *
     * @return $this
     */
    public function setFormattedSalaryFrom($formatted_salary_from)
    {
        $this->container['formatted_salary_from'] = $formatted_salary_from;

        return $this;
    }

    /**
     * Gets formatted_salary_to
     *
     * @return string
     */
    public function getFormattedSalaryTo()
    {
        return $this->container['formatted_salary_to'];
    }

    /**
     * Sets formatted_salary_to
     *
     * @param string $formatted_salary_to Formatted Salary Range To
     *
     * @return $this
     */
    public function setFormattedSalaryTo($formatted_salary_to)
    {
        $this->container['formatted_salary_to'] = $formatted_salary_to;

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
     * @param int $id internal id of compensation
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets salary_from
     *
     * @return string
     */
    public function getSalaryFrom()
    {
        return $this->container['salary_from'];
    }

    /**
     * Sets salary_from
     *
     * @param string $salary_from Salary Range From
     *
     * @return $this
     */
    public function setSalaryFrom($salary_from)
    {
        $this->container['salary_from'] = $salary_from;

        return $this;
    }

    /**
     * Gets salary_to
     *
     * @return string
     */
    public function getSalaryTo()
    {
        return $this->container['salary_to'];
    }

    /**
     * Sets salary_to
     *
     * @param string $salary_to Salary Range To
     *
     * @return $this
     */
    public function setSalaryTo($salary_to)
    {
        $this->container['salary_to'] = $salary_to;

        return $this;
    }

    /**
     * Gets salary_type
     *
     * @return string
     */
    public function getSalaryType()
    {
        return $this->container['salary_type'];
    }

    /**
     * Sets salary_type
     *
     * @param string $salary_type salary type
     *
     * @return $this
     */
    public function setSalaryType($salary_type)
    {
        $allowedValues = $this->getSalaryTypeAllowableValues();
        if (!is_null($salary_type) && !in_array($salary_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'salary_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salary_type'] = $salary_type;

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
