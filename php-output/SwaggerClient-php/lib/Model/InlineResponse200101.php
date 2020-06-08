<?php
/**
 * InlineResponse200101
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
 * InlineResponse200101 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200101 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_101';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => 'int',
'company_name' => 'string',
'trading_name' => 'string',
'company_number' => 'string',
'business_number' => 'string',
'contact_name_billing_id' => 'int',
'contact_name_billing' => 'string',
'department' => 'string',
'contact_email_billing' => 'string',
'contact_phone_billing' => 'string',
'cost_center' => 'string',
'general_po_number' => 'string',
'purchase_order_number' => 'string',
'tax_exempt' => 'bool',
'address' => '\Swagger\Client\Model\InlineResponse200101Address'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => null,
'company_name' => null,
'trading_name' => null,
'company_number' => null,
'business_number' => null,
'contact_name_billing_id' => null,
'contact_name_billing' => null,
'department' => null,
'contact_email_billing' => null,
'contact_phone_billing' => null,
'cost_center' => null,
'general_po_number' => null,
'purchase_order_number' => null,
'tax_exempt' => null,
'address' => null    ];

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
        'company_id' => 'company_id',
'company_name' => 'company_name',
'trading_name' => 'trading_name',
'company_number' => 'company_number',
'business_number' => 'business_number',
'contact_name_billing_id' => 'contact_name_billing_id',
'contact_name_billing' => 'contact_name_billing',
'department' => 'department',
'contact_email_billing' => 'contact_email_billing',
'contact_phone_billing' => 'contact_phone_billing',
'cost_center' => 'cost_center',
'general_po_number' => 'general_po_number',
'purchase_order_number' => 'purchase_order_number',
'tax_exempt' => 'tax_exempt',
'address' => 'address'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
'company_name' => 'setCompanyName',
'trading_name' => 'setTradingName',
'company_number' => 'setCompanyNumber',
'business_number' => 'setBusinessNumber',
'contact_name_billing_id' => 'setContactNameBillingId',
'contact_name_billing' => 'setContactNameBilling',
'department' => 'setDepartment',
'contact_email_billing' => 'setContactEmailBilling',
'contact_phone_billing' => 'setContactPhoneBilling',
'cost_center' => 'setCostCenter',
'general_po_number' => 'setGeneralPoNumber',
'purchase_order_number' => 'setPurchaseOrderNumber',
'tax_exempt' => 'setTaxExempt',
'address' => 'setAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
'company_name' => 'getCompanyName',
'trading_name' => 'getTradingName',
'company_number' => 'getCompanyNumber',
'business_number' => 'getBusinessNumber',
'contact_name_billing_id' => 'getContactNameBillingId',
'contact_name_billing' => 'getContactNameBilling',
'department' => 'getDepartment',
'contact_email_billing' => 'getContactEmailBilling',
'contact_phone_billing' => 'getContactPhoneBilling',
'cost_center' => 'getCostCenter',
'general_po_number' => 'getGeneralPoNumber',
'purchase_order_number' => 'getPurchaseOrderNumber',
'tax_exempt' => 'getTaxExempt',
'address' => 'getAddress'    ];

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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['trading_name'] = isset($data['trading_name']) ? $data['trading_name'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['business_number'] = isset($data['business_number']) ? $data['business_number'] : null;
        $this->container['contact_name_billing_id'] = isset($data['contact_name_billing_id']) ? $data['contact_name_billing_id'] : null;
        $this->container['contact_name_billing'] = isset($data['contact_name_billing']) ? $data['contact_name_billing'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['contact_email_billing'] = isset($data['contact_email_billing']) ? $data['contact_email_billing'] : null;
        $this->container['contact_phone_billing'] = isset($data['contact_phone_billing']) ? $data['contact_phone_billing'] : null;
        $this->container['cost_center'] = isset($data['cost_center']) ? $data['cost_center'] : null;
        $this->container['general_po_number'] = isset($data['general_po_number']) ? $data['general_po_number'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['contact_name_billing_id'] === null) {
            $invalidProperties[] = "'contact_name_billing_id' can't be null";
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
     * @param string $company_name Company Name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets trading_name
     *
     * @return string
     */
    public function getTradingName()
    {
        return $this->container['trading_name'];
    }

    /**
     * Sets trading_name
     *
     * @param string $trading_name Company Name
     *
     * @return $this
     */
    public function setTradingName($trading_name)
    {
        $this->container['trading_name'] = $trading_name;

        return $this;
    }

    /**
     * Gets company_number
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param string $company_number company_number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets business_number
     *
     * @return string
     */
    public function getBusinessNumber()
    {
        return $this->container['business_number'];
    }

    /**
     * Sets business_number
     *
     * @param string $business_number business_number
     *
     * @return $this
     */
    public function setBusinessNumber($business_number)
    {
        $this->container['business_number'] = $business_number;

        return $this;
    }

    /**
     * Gets contact_name_billing_id
     *
     * @return int
     */
    public function getContactNameBillingId()
    {
        return $this->container['contact_name_billing_id'];
    }

    /**
     * Sets contact_name_billing_id
     *
     * @param int $contact_name_billing_id contact internal id
     *
     * @return $this
     */
    public function setContactNameBillingId($contact_name_billing_id)
    {
        $this->container['contact_name_billing_id'] = $contact_name_billing_id;

        return $this;
    }

    /**
     * Gets contact_name_billing
     *
     * @return string
     */
    public function getContactNameBilling()
    {
        return $this->container['contact_name_billing'];
    }

    /**
     * Sets contact_name_billing
     *
     * @param string $contact_name_billing contact_name_billing
     *
     * @return $this
     */
    public function setContactNameBilling($contact_name_billing)
    {
        $this->container['contact_name_billing'] = $contact_name_billing;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets contact_email_billing
     *
     * @return string
     */
    public function getContactEmailBilling()
    {
        return $this->container['contact_email_billing'];
    }

    /**
     * Sets contact_email_billing
     *
     * @param string $contact_email_billing email
     *
     * @return $this
     */
    public function setContactEmailBilling($contact_email_billing)
    {
        $this->container['contact_email_billing'] = $contact_email_billing;

        return $this;
    }

    /**
     * Gets contact_phone_billing
     *
     * @return string
     */
    public function getContactPhoneBilling()
    {
        return $this->container['contact_phone_billing'];
    }

    /**
     * Sets contact_phone_billing
     *
     * @param string $contact_phone_billing phone number
     *
     * @return $this
     */
    public function setContactPhoneBilling($contact_phone_billing)
    {
        $this->container['contact_phone_billing'] = $contact_phone_billing;

        return $this;
    }

    /**
     * Gets cost_center
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->container['cost_center'];
    }

    /**
     * Sets cost_center
     *
     * @param string $cost_center cost_center
     *
     * @return $this
     */
    public function setCostCenter($cost_center)
    {
        $this->container['cost_center'] = $cost_center;

        return $this;
    }

    /**
     * Gets general_po_number
     *
     * @return string
     */
    public function getGeneralPoNumber()
    {
        return $this->container['general_po_number'];
    }

    /**
     * Sets general_po_number
     *
     * @param string $general_po_number general_po_number
     *
     * @return $this
     */
    public function setGeneralPoNumber($general_po_number)
    {
        $this->container['general_po_number'] = $general_po_number;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number purchase_order_number
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets tax_exempt
     *
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     *
     * @param bool $tax_exempt tax_exempt
     *
     * @return $this
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\InlineResponse200101Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\InlineResponse200101Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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