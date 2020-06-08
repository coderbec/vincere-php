<?php
/**
 * InlineResponse200102
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
 * InlineResponse200102 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200102 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_102';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_through_entity' => 'string',
'pay_through_entity' => 'string',
'branch' => 'string',
'division_branch' => 'string',
'billing_group_name' => 'string',
'offer_letter_signatory_id' => 'int',
'offer_letter_signatory_name' => 'string',
'astute_bill_through_id' => 'float',
'astute_pay_through_id' => 'float',
'astute_billing_group_id' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_through_entity' => null,
'pay_through_entity' => null,
'branch' => null,
'division_branch' => null,
'billing_group_name' => null,
'offer_letter_signatory_id' => null,
'offer_letter_signatory_name' => null,
'astute_bill_through_id' => null,
'astute_pay_through_id' => null,
'astute_billing_group_id' => null    ];

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
        'bill_through_entity' => 'bill_through_entity',
'pay_through_entity' => 'pay_through_entity',
'branch' => 'branch',
'division_branch' => 'division_branch',
'billing_group_name' => 'billing_group_name',
'offer_letter_signatory_id' => 'offer_letter_signatory_id',
'offer_letter_signatory_name' => 'offer_letter_signatory_name',
'astute_bill_through_id' => 'astute_bill_through_id',
'astute_pay_through_id' => 'astute_pay_through_id',
'astute_billing_group_id' => 'astute_billing_group_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_through_entity' => 'setBillThroughEntity',
'pay_through_entity' => 'setPayThroughEntity',
'branch' => 'setBranch',
'division_branch' => 'setDivisionBranch',
'billing_group_name' => 'setBillingGroupName',
'offer_letter_signatory_id' => 'setOfferLetterSignatoryId',
'offer_letter_signatory_name' => 'setOfferLetterSignatoryName',
'astute_bill_through_id' => 'setAstuteBillThroughId',
'astute_pay_through_id' => 'setAstutePayThroughId',
'astute_billing_group_id' => 'setAstuteBillingGroupId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_through_entity' => 'getBillThroughEntity',
'pay_through_entity' => 'getPayThroughEntity',
'branch' => 'getBranch',
'division_branch' => 'getDivisionBranch',
'billing_group_name' => 'getBillingGroupName',
'offer_letter_signatory_id' => 'getOfferLetterSignatoryId',
'offer_letter_signatory_name' => 'getOfferLetterSignatoryName',
'astute_bill_through_id' => 'getAstuteBillThroughId',
'astute_pay_through_id' => 'getAstutePayThroughId',
'astute_billing_group_id' => 'getAstuteBillingGroupId'    ];

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
        $this->container['bill_through_entity'] = isset($data['bill_through_entity']) ? $data['bill_through_entity'] : null;
        $this->container['pay_through_entity'] = isset($data['pay_through_entity']) ? $data['pay_through_entity'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['division_branch'] = isset($data['division_branch']) ? $data['division_branch'] : null;
        $this->container['billing_group_name'] = isset($data['billing_group_name']) ? $data['billing_group_name'] : null;
        $this->container['offer_letter_signatory_id'] = isset($data['offer_letter_signatory_id']) ? $data['offer_letter_signatory_id'] : null;
        $this->container['offer_letter_signatory_name'] = isset($data['offer_letter_signatory_name']) ? $data['offer_letter_signatory_name'] : null;
        $this->container['astute_bill_through_id'] = isset($data['astute_bill_through_id']) ? $data['astute_bill_through_id'] : null;
        $this->container['astute_pay_through_id'] = isset($data['astute_pay_through_id']) ? $data['astute_pay_through_id'] : null;
        $this->container['astute_billing_group_id'] = isset($data['astute_billing_group_id']) ? $data['astute_billing_group_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['offer_letter_signatory_id'] === null) {
            $invalidProperties[] = "'offer_letter_signatory_id' can't be null";
        }
        if ($this->container['offer_letter_signatory_name'] === null) {
            $invalidProperties[] = "'offer_letter_signatory_name' can't be null";
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
     * Gets bill_through_entity
     *
     * @return string
     */
    public function getBillThroughEntity()
    {
        return $this->container['bill_through_entity'];
    }

    /**
     * Sets bill_through_entity
     *
     * @param string $bill_through_entity bill_through_entity
     *
     * @return $this
     */
    public function setBillThroughEntity($bill_through_entity)
    {
        $this->container['bill_through_entity'] = $bill_through_entity;

        return $this;
    }

    /**
     * Gets pay_through_entity
     *
     * @return string
     */
    public function getPayThroughEntity()
    {
        return $this->container['pay_through_entity'];
    }

    /**
     * Sets pay_through_entity
     *
     * @param string $pay_through_entity pay_through_entity
     *
     * @return $this
     */
    public function setPayThroughEntity($pay_through_entity)
    {
        $this->container['pay_through_entity'] = $pay_through_entity;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets division_branch
     *
     * @return string
     */
    public function getDivisionBranch()
    {
        return $this->container['division_branch'];
    }

    /**
     * Sets division_branch
     *
     * @param string $division_branch division_branch
     *
     * @return $this
     */
    public function setDivisionBranch($division_branch)
    {
        $this->container['division_branch'] = $division_branch;

        return $this;
    }

    /**
     * Gets billing_group_name
     *
     * @return string
     */
    public function getBillingGroupName()
    {
        return $this->container['billing_group_name'];
    }

    /**
     * Sets billing_group_name
     *
     * @param string $billing_group_name billing_group_name
     *
     * @return $this
     */
    public function setBillingGroupName($billing_group_name)
    {
        $this->container['billing_group_name'] = $billing_group_name;

        return $this;
    }

    /**
     * Gets offer_letter_signatory_id
     *
     * @return int
     */
    public function getOfferLetterSignatoryId()
    {
        return $this->container['offer_letter_signatory_id'];
    }

    /**
     * Sets offer_letter_signatory_id
     *
     * @param int $offer_letter_signatory_id internal id
     *
     * @return $this
     */
    public function setOfferLetterSignatoryId($offer_letter_signatory_id)
    {
        $this->container['offer_letter_signatory_id'] = $offer_letter_signatory_id;

        return $this;
    }

    /**
     * Gets offer_letter_signatory_name
     *
     * @return string
     */
    public function getOfferLetterSignatoryName()
    {
        return $this->container['offer_letter_signatory_name'];
    }

    /**
     * Sets offer_letter_signatory_name
     *
     * @param string $offer_letter_signatory_name offer_letter_signatory_name
     *
     * @return $this
     */
    public function setOfferLetterSignatoryName($offer_letter_signatory_name)
    {
        $this->container['offer_letter_signatory_name'] = $offer_letter_signatory_name;

        return $this;
    }

    /**
     * Gets astute_bill_through_id
     *
     * @return float
     */
    public function getAstuteBillThroughId()
    {
        return $this->container['astute_bill_through_id'];
    }

    /**
     * Sets astute_bill_through_id
     *
     * @param float $astute_bill_through_id id of astute value when option Time Management is Astute Payroll on Job Contract
     *
     * @return $this
     */
    public function setAstuteBillThroughId($astute_bill_through_id)
    {
        $this->container['astute_bill_through_id'] = $astute_bill_through_id;

        return $this;
    }

    /**
     * Gets astute_pay_through_id
     *
     * @return float
     */
    public function getAstutePayThroughId()
    {
        return $this->container['astute_pay_through_id'];
    }

    /**
     * Sets astute_pay_through_id
     *
     * @param float $astute_pay_through_id id of astute value when option Time Management is Astute Payroll on Job Contract
     *
     * @return $this
     */
    public function setAstutePayThroughId($astute_pay_through_id)
    {
        $this->container['astute_pay_through_id'] = $astute_pay_through_id;

        return $this;
    }

    /**
     * Gets astute_billing_group_id
     *
     * @return float
     */
    public function getAstuteBillingGroupId()
    {
        return $this->container['astute_billing_group_id'];
    }

    /**
     * Sets astute_billing_group_id
     *
     * @param float $astute_billing_group_id id of astute value when option Time Management is Astute Payroll on Job Contract
     *
     * @return $this
     */
    public function setAstuteBillingGroupId($astute_billing_group_id)
    {
        $this->container['astute_billing_group_id'] = $astute_billing_group_id;

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