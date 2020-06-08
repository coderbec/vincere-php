<?php
/**
 * Body22
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
 * Body22 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body22 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_22';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_group_name' => 'string',
'business_number' => 'string',
'careersite_url' => 'string',
'company_name' => 'string',
'company_number' => 'string',
'company_owners' => 'float[]',
'creator_id' => 'int',
'employees_number' => 'int',
'external_id' => 'string',
'facebook_url' => 'string',
'fax' => 'string',
'general_po_number' => 'string',
'head_quarter' => 'string',
'id' => 'int',
'linkedin_url' => 'string',
'note' => 'string',
'parent_id' => 'int',
'phone' => 'string',
'registration_date' => 'string',
'rss_urls' => 'string',
'switch_board' => 'string',
'tax_exempt' => 'bool',
'trading_name' => 'string',
'website' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_group_name' => null,
'business_number' => null,
'careersite_url' => null,
'company_name' => null,
'company_number' => null,
'company_owners' => null,
'creator_id' => null,
'employees_number' => null,
'external_id' => null,
'facebook_url' => null,
'fax' => null,
'general_po_number' => null,
'head_quarter' => null,
'id' => null,
'linkedin_url' => null,
'note' => null,
'parent_id' => null,
'phone' => null,
'registration_date' => null,
'rss_urls' => null,
'switch_board' => null,
'tax_exempt' => null,
'trading_name' => null,
'website' => null    ];

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
        'billing_group_name' => 'billing_group_name',
'business_number' => 'business_number',
'careersite_url' => 'careersite_url',
'company_name' => 'company_name',
'company_number' => 'company_number',
'company_owners' => 'company_owners',
'creator_id' => 'creator_id',
'employees_number' => 'employees_number',
'external_id' => 'external_id',
'facebook_url' => 'facebook_url',
'fax' => 'fax',
'general_po_number' => 'general_PO_number',
'head_quarter' => 'head_quarter',
'id' => 'id',
'linkedin_url' => 'linkedin_url',
'note' => 'note',
'parent_id' => 'parent_id',
'phone' => 'phone',
'registration_date' => 'registration_date',
'rss_urls' => 'rss_urls',
'switch_board' => 'switch_board',
'tax_exempt' => 'tax_exempt',
'trading_name' => 'trading_name',
'website' => 'website'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_group_name' => 'setBillingGroupName',
'business_number' => 'setBusinessNumber',
'careersite_url' => 'setCareersiteUrl',
'company_name' => 'setCompanyName',
'company_number' => 'setCompanyNumber',
'company_owners' => 'setCompanyOwners',
'creator_id' => 'setCreatorId',
'employees_number' => 'setEmployeesNumber',
'external_id' => 'setExternalId',
'facebook_url' => 'setFacebookUrl',
'fax' => 'setFax',
'general_po_number' => 'setGeneralPoNumber',
'head_quarter' => 'setHeadQuarter',
'id' => 'setId',
'linkedin_url' => 'setLinkedinUrl',
'note' => 'setNote',
'parent_id' => 'setParentId',
'phone' => 'setPhone',
'registration_date' => 'setRegistrationDate',
'rss_urls' => 'setRssUrls',
'switch_board' => 'setSwitchBoard',
'tax_exempt' => 'setTaxExempt',
'trading_name' => 'setTradingName',
'website' => 'setWebsite'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_group_name' => 'getBillingGroupName',
'business_number' => 'getBusinessNumber',
'careersite_url' => 'getCareersiteUrl',
'company_name' => 'getCompanyName',
'company_number' => 'getCompanyNumber',
'company_owners' => 'getCompanyOwners',
'creator_id' => 'getCreatorId',
'employees_number' => 'getEmployeesNumber',
'external_id' => 'getExternalId',
'facebook_url' => 'getFacebookUrl',
'fax' => 'getFax',
'general_po_number' => 'getGeneralPoNumber',
'head_quarter' => 'getHeadQuarter',
'id' => 'getId',
'linkedin_url' => 'getLinkedinUrl',
'note' => 'getNote',
'parent_id' => 'getParentId',
'phone' => 'getPhone',
'registration_date' => 'getRegistrationDate',
'rss_urls' => 'getRssUrls',
'switch_board' => 'getSwitchBoard',
'tax_exempt' => 'getTaxExempt',
'trading_name' => 'getTradingName',
'website' => 'getWebsite'    ];

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
        $this->container['billing_group_name'] = isset($data['billing_group_name']) ? $data['billing_group_name'] : null;
        $this->container['business_number'] = isset($data['business_number']) ? $data['business_number'] : null;
        $this->container['careersite_url'] = isset($data['careersite_url']) ? $data['careersite_url'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['company_owners'] = isset($data['company_owners']) ? $data['company_owners'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['employees_number'] = isset($data['employees_number']) ? $data['employees_number'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['facebook_url'] = isset($data['facebook_url']) ? $data['facebook_url'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['general_po_number'] = isset($data['general_po_number']) ? $data['general_po_number'] : null;
        $this->container['head_quarter'] = isset($data['head_quarter']) ? $data['head_quarter'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['linkedin_url'] = isset($data['linkedin_url']) ? $data['linkedin_url'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['rss_urls'] = isset($data['rss_urls']) ? $data['rss_urls'] : null;
        $this->container['switch_board'] = isset($data['switch_board']) ? $data['switch_board'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['trading_name'] = isset($data['trading_name']) ? $data['trading_name'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['registration_date'] === null) {
            $invalidProperties[] = "'registration_date' can't be null";
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
     * Gets careersite_url
     *
     * @return string
     */
    public function getCareersiteUrl()
    {
        return $this->container['careersite_url'];
    }

    /**
     * Sets careersite_url
     *
     * @param string $careersite_url Career Site URL
     *
     * @return $this
     */
    public function setCareersiteUrl($careersite_url)
    {
        $this->container['careersite_url'] = $careersite_url;

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
     * Gets company_owners
     *
     * @return float[]
     */
    public function getCompanyOwners()
    {
        return $this->container['company_owners'];
    }

    /**
     * Sets company_owners
     *
     * @param float[] $company_owners list of owners id
     *
     * @return $this
     */
    public function setCompanyOwners($company_owners)
    {
        $this->container['company_owners'] = $company_owners;

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
     * Gets employees_number
     *
     * @return int
     */
    public function getEmployeesNumber()
    {
        return $this->container['employees_number'];
    }

    /**
     * Sets employees_number
     *
     * @param int $employees_number employees_number
     *
     * @return $this
     */
    public function setEmployeesNumber($employees_number)
    {
        $this->container['employees_number'] = $employees_number;

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
     * @param string $external_id company external id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets facebook_url
     *
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->container['facebook_url'];
    }

    /**
     * Sets facebook_url
     *
     * @param string $facebook_url Facebook URL
     *
     * @return $this
     */
    public function setFacebookUrl($facebook_url)
    {
        $this->container['facebook_url'] = $facebook_url;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax Fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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
     * Gets head_quarter
     *
     * @return string
     */
    public function getHeadQuarter()
    {
        return $this->container['head_quarter'];
    }

    /**
     * Sets head_quarter
     *
     * @param string $head_quarter Headquarters address
     *
     * @return $this
     */
    public function setHeadQuarter($head_quarter)
    {
        $this->container['head_quarter'] = $head_quarter;

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
     * @param int $id company internal id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets linkedin_url
     *
     * @return string
     */
    public function getLinkedinUrl()
    {
        return $this->container['linkedin_url'];
    }

    /**
     * Sets linkedin_url
     *
     * @param string $linkedin_url LinkedIn Url
     *
     * @return $this
     */
    public function setLinkedinUrl($linkedin_url)
    {
        $this->container['linkedin_url'] = $linkedin_url;

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
     * Gets parent_id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int $parent_id Parent Company
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone number
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * Gets rss_urls
     *
     * @return string
     */
    public function getRssUrls()
    {
        return $this->container['rss_urls'];
    }

    /**
     * Sets rss_urls
     *
     * @param string $rss_urls RSS Urls
     *
     * @return $this
     */
    public function setRssUrls($rss_urls)
    {
        $this->container['rss_urls'] = $rss_urls;

        return $this;
    }

    /**
     * Gets switch_board
     *
     * @return string
     */
    public function getSwitchBoard()
    {
        return $this->container['switch_board'];
    }

    /**
     * Sets switch_board
     *
     * @param string $switch_board Switch Board number
     *
     * @return $this
     */
    public function setSwitchBoard($switch_board)
    {
        $this->container['switch_board'] = $switch_board;

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
     * @param bool $tax_exempt true or false
     *
     * @return $this
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

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
     * @param string $trading_name trading_name
     *
     * @return $this
     */
    public function setTradingName($trading_name)
    {
        $this->container['trading_name'] = $trading_name;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website Website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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