<?php
/**
 * InlineResponse20038PayAndChargeInclOvertimes
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
 * InlineResponse20038PayAndChargeInclOvertimes Class Doc Comment
 *
 * @category Class
 * @description pay_and_charge_incl_overtime in system
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20038PayAndChargeInclOvertimes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_38_pay_and_charge_incl_overtimes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pay_name' => 'string',
'pay_rate' => 'float',
'formatted_pay_rate' => 'string',
'on_costs_number' => 'float',
'formatted_on_costs_number' => 'string',
'total_pay_rate' => 'float',
'formatted_total_pay_rate' => 'string',
'charge_rate' => 'float',
'formatted_charge_rate' => 'string',
'profit_margin' => 'float',
'formatted_profit_margin' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pay_name' => null,
'pay_rate' => null,
'formatted_pay_rate' => null,
'on_costs_number' => null,
'formatted_on_costs_number' => null,
'total_pay_rate' => null,
'formatted_total_pay_rate' => null,
'charge_rate' => null,
'formatted_charge_rate' => null,
'profit_margin' => null,
'formatted_profit_margin' => null    ];

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
        'pay_name' => 'pay_name',
'pay_rate' => 'pay_rate',
'formatted_pay_rate' => 'formatted_pay_rate',
'on_costs_number' => 'on_costs_number',
'formatted_on_costs_number' => 'formatted_on_costs_number',
'total_pay_rate' => 'total_pay_rate',
'formatted_total_pay_rate' => 'formatted_total_pay_rate',
'charge_rate' => 'charge_rate',
'formatted_charge_rate' => 'formatted_charge_rate',
'profit_margin' => 'profit_margin',
'formatted_profit_margin' => 'formatted_profit_margin'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_name' => 'setPayName',
'pay_rate' => 'setPayRate',
'formatted_pay_rate' => 'setFormattedPayRate',
'on_costs_number' => 'setOnCostsNumber',
'formatted_on_costs_number' => 'setFormattedOnCostsNumber',
'total_pay_rate' => 'setTotalPayRate',
'formatted_total_pay_rate' => 'setFormattedTotalPayRate',
'charge_rate' => 'setChargeRate',
'formatted_charge_rate' => 'setFormattedChargeRate',
'profit_margin' => 'setProfitMargin',
'formatted_profit_margin' => 'setFormattedProfitMargin'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_name' => 'getPayName',
'pay_rate' => 'getPayRate',
'formatted_pay_rate' => 'getFormattedPayRate',
'on_costs_number' => 'getOnCostsNumber',
'formatted_on_costs_number' => 'getFormattedOnCostsNumber',
'total_pay_rate' => 'getTotalPayRate',
'formatted_total_pay_rate' => 'getFormattedTotalPayRate',
'charge_rate' => 'getChargeRate',
'formatted_charge_rate' => 'getFormattedChargeRate',
'profit_margin' => 'getProfitMargin',
'formatted_profit_margin' => 'getFormattedProfitMargin'    ];

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
        $this->container['pay_name'] = isset($data['pay_name']) ? $data['pay_name'] : null;
        $this->container['pay_rate'] = isset($data['pay_rate']) ? $data['pay_rate'] : null;
        $this->container['formatted_pay_rate'] = isset($data['formatted_pay_rate']) ? $data['formatted_pay_rate'] : null;
        $this->container['on_costs_number'] = isset($data['on_costs_number']) ? $data['on_costs_number'] : null;
        $this->container['formatted_on_costs_number'] = isset($data['formatted_on_costs_number']) ? $data['formatted_on_costs_number'] : null;
        $this->container['total_pay_rate'] = isset($data['total_pay_rate']) ? $data['total_pay_rate'] : null;
        $this->container['formatted_total_pay_rate'] = isset($data['formatted_total_pay_rate']) ? $data['formatted_total_pay_rate'] : null;
        $this->container['charge_rate'] = isset($data['charge_rate']) ? $data['charge_rate'] : null;
        $this->container['formatted_charge_rate'] = isset($data['formatted_charge_rate']) ? $data['formatted_charge_rate'] : null;
        $this->container['profit_margin'] = isset($data['profit_margin']) ? $data['profit_margin'] : null;
        $this->container['formatted_profit_margin'] = isset($data['formatted_profit_margin']) ? $data['formatted_profit_margin'] : null;
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
     * Gets pay_name
     *
     * @return string
     */
    public function getPayName()
    {
        return $this->container['pay_name'];
    }

    /**
     * Sets pay_name
     *
     * @param string $pay_name pay_name
     *
     * @return $this
     */
    public function setPayName($pay_name)
    {
        $this->container['pay_name'] = $pay_name;

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
     * Gets on_costs_number
     *
     * @return float
     */
    public function getOnCostsNumber()
    {
        return $this->container['on_costs_number'];
    }

    /**
     * Sets on_costs_number
     *
     * @param float $on_costs_number cost number
     *
     * @return $this
     */
    public function setOnCostsNumber($on_costs_number)
    {
        $this->container['on_costs_number'] = $on_costs_number;

        return $this;
    }

    /**
     * Gets formatted_on_costs_number
     *
     * @return string
     */
    public function getFormattedOnCostsNumber()
    {
        return $this->container['formatted_on_costs_number'];
    }

    /**
     * Sets formatted_on_costs_number
     *
     * @param string $formatted_on_costs_number formatted_on_costs_number
     *
     * @return $this
     */
    public function setFormattedOnCostsNumber($formatted_on_costs_number)
    {
        $this->container['formatted_on_costs_number'] = $formatted_on_costs_number;

        return $this;
    }

    /**
     * Gets total_pay_rate
     *
     * @return float
     */
    public function getTotalPayRate()
    {
        return $this->container['total_pay_rate'];
    }

    /**
     * Sets total_pay_rate
     *
     * @param float $total_pay_rate pay rate with include tax and allowances
     *
     * @return $this
     */
    public function setTotalPayRate($total_pay_rate)
    {
        $this->container['total_pay_rate'] = $total_pay_rate;

        return $this;
    }

    /**
     * Gets formatted_total_pay_rate
     *
     * @return string
     */
    public function getFormattedTotalPayRate()
    {
        return $this->container['formatted_total_pay_rate'];
    }

    /**
     * Sets formatted_total_pay_rate
     *
     * @param string $formatted_total_pay_rate formatted_total_pay_rate
     *
     * @return $this
     */
    public function setFormattedTotalPayRate($formatted_total_pay_rate)
    {
        $this->container['formatted_total_pay_rate'] = $formatted_total_pay_rate;

        return $this;
    }

    /**
     * Gets charge_rate
     *
     * @return float
     */
    public function getChargeRate()
    {
        return $this->container['charge_rate'];
    }

    /**
     * Sets charge_rate
     *
     * @param float $charge_rate pay rate with include tax and allowances
     *
     * @return $this
     */
    public function setChargeRate($charge_rate)
    {
        $this->container['charge_rate'] = $charge_rate;

        return $this;
    }

    /**
     * Gets formatted_charge_rate
     *
     * @return string
     */
    public function getFormattedChargeRate()
    {
        return $this->container['formatted_charge_rate'];
    }

    /**
     * Sets formatted_charge_rate
     *
     * @param string $formatted_charge_rate formatted_charge_rate
     *
     * @return $this
     */
    public function setFormattedChargeRate($formatted_charge_rate)
    {
        $this->container['formatted_charge_rate'] = $formatted_charge_rate;

        return $this;
    }

    /**
     * Gets profit_margin
     *
     * @return float
     */
    public function getProfitMargin()
    {
        return $this->container['profit_margin'];
    }

    /**
     * Sets profit_margin
     *
     * @param float $profit_margin profit and margin percentage
     *
     * @return $this
     */
    public function setProfitMargin($profit_margin)
    {
        $this->container['profit_margin'] = $profit_margin;

        return $this;
    }

    /**
     * Gets formatted_profit_margin
     *
     * @return string
     */
    public function getFormattedProfitMargin()
    {
        return $this->container['formatted_profit_margin'];
    }

    /**
     * Sets formatted_profit_margin
     *
     * @param string $formatted_profit_margin formatted_profit_margin
     *
     * @return $this
     */
    public function setFormattedProfitMargin($formatted_profit_margin)
    {
        $this->container['formatted_profit_margin'] = $formatted_profit_margin;

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
