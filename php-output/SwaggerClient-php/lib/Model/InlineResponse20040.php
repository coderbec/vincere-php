<?php
/**
 * InlineResponse20040
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
 * InlineResponse20040 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20040 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_40';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency' => 'string',
'date_format' => 'string',
'deactivated' => 'int',
'display_language' => 'string',
'email' => 'string',
'email_is_integrated' => 'bool',
'full_name' => 'string',
'id' => 'int',
'insert_timestamp' => 'string',
'last_updated_timestamp' => 'string',
'permission' => 'string[]',
'responsibility' => 'string[]',
'timezone' => 'string',
'user_location' => 'string',
'photo_url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency' => null,
'date_format' => null,
'deactivated' => null,
'display_language' => null,
'email' => null,
'email_is_integrated' => null,
'full_name' => null,
'id' => null,
'insert_timestamp' => null,
'last_updated_timestamp' => null,
'permission' => null,
'responsibility' => null,
'timezone' => null,
'user_location' => null,
'photo_url' => null    ];

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
        'currency' => 'currency',
'date_format' => 'date_format',
'deactivated' => 'deactivated',
'display_language' => 'display_language',
'email' => 'email',
'email_is_integrated' => 'email_is_integrated',
'full_name' => 'full_name',
'id' => 'id',
'insert_timestamp' => 'insert_timestamp',
'last_updated_timestamp' => 'last_updated_timestamp',
'permission' => 'permission',
'responsibility' => 'responsibility',
'timezone' => 'timezone',
'user_location' => 'user_location',
'photo_url' => 'photo_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
'date_format' => 'setDateFormat',
'deactivated' => 'setDeactivated',
'display_language' => 'setDisplayLanguage',
'email' => 'setEmail',
'email_is_integrated' => 'setEmailIsIntegrated',
'full_name' => 'setFullName',
'id' => 'setId',
'insert_timestamp' => 'setInsertTimestamp',
'last_updated_timestamp' => 'setLastUpdatedTimestamp',
'permission' => 'setPermission',
'responsibility' => 'setResponsibility',
'timezone' => 'setTimezone',
'user_location' => 'setUserLocation',
'photo_url' => 'setPhotoUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
'date_format' => 'getDateFormat',
'deactivated' => 'getDeactivated',
'display_language' => 'getDisplayLanguage',
'email' => 'getEmail',
'email_is_integrated' => 'getEmailIsIntegrated',
'full_name' => 'getFullName',
'id' => 'getId',
'insert_timestamp' => 'getInsertTimestamp',
'last_updated_timestamp' => 'getLastUpdatedTimestamp',
'permission' => 'getPermission',
'responsibility' => 'getResponsibility',
'timezone' => 'getTimezone',
'user_location' => 'getUserLocation',
'photo_url' => 'getPhotoUrl'    ];

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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['date_format'] = isset($data['date_format']) ? $data['date_format'] : null;
        $this->container['deactivated'] = isset($data['deactivated']) ? $data['deactivated'] : null;
        $this->container['display_language'] = isset($data['display_language']) ? $data['display_language'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_is_integrated'] = isset($data['email_is_integrated']) ? $data['email_is_integrated'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['insert_timestamp'] = isset($data['insert_timestamp']) ? $data['insert_timestamp'] : null;
        $this->container['last_updated_timestamp'] = isset($data['last_updated_timestamp']) ? $data['last_updated_timestamp'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['responsibility'] = isset($data['responsibility']) ? $data['responsibility'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['user_location'] = isset($data['user_location']) ? $data['user_location'] : null;
        $this->container['photo_url'] = isset($data['photo_url']) ? $data['photo_url'] : null;
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
     * @param string $currency The user's currency setting. Please see reference list for currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets date_format
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param string $date_format The user's date format setting
     *
     * @return $this
     */
    public function setDateFormat($date_format)
    {
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Gets deactivated
     *
     * @return int
     */
    public function getDeactivated()
    {
        return $this->container['deactivated'];
    }

    /**
     * Sets deactivated
     *
     * @param int $deactivated Returns true if the user is deactivated. Otherwise, returns false.
     *
     * @return $this
     */
    public function setDeactivated($deactivated)
    {
        $this->container['deactivated'] = $deactivated;

        return $this;
    }

    /**
     * Gets display_language
     *
     * @return string
     */
    public function getDisplayLanguage()
    {
        return $this->container['display_language'];
    }

    /**
     * Sets display_language
     *
     * @param string $display_language The user's display language code in setting.
     *
     * @return $this
     */
    public function setDisplayLanguage($display_language)
    {
        $this->container['display_language'] = $display_language;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The user's unique email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_is_integrated
     *
     * @return bool
     */
    public function getEmailIsIntegrated()
    {
        return $this->container['email_is_integrated'];
    }

    /**
     * Sets email_is_integrated
     *
     * @param bool $email_is_integrated return true if the email is connected to Vincere. Otherwise, return false.
     *
     * @return $this
     */
    public function setEmailIsIntegrated($email_is_integrated)
    {
        $this->container['email_is_integrated'] = $email_is_integrated;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name The user's fullname
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

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
     * @param int $id The user's unique identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets insert_timestamp
     *
     * @return string
     */
    public function getInsertTimestamp()
    {
        return $this->container['insert_timestamp'];
    }

    /**
     * Sets insert_timestamp
     *
     * @param string $insert_timestamp The date when user is created
     *
     * @return $this
     */
    public function setInsertTimestamp($insert_timestamp)
    {
        $this->container['insert_timestamp'] = $insert_timestamp;

        return $this;
    }

    /**
     * Gets last_updated_timestamp
     *
     * @return string
     */
    public function getLastUpdatedTimestamp()
    {
        return $this->container['last_updated_timestamp'];
    }

    /**
     * Sets last_updated_timestamp
     *
     * @param string $last_updated_timestamp The last update on user's information
     *
     * @return $this
     */
    public function setLastUpdatedTimestamp($last_updated_timestamp)
    {
        $this->container['last_updated_timestamp'] = $last_updated_timestamp;

        return $this;
    }

    /**
     * Gets permission
     *
     * @return string[]
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     *
     * @param string[] $permission The user's permission settings
     *
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;

        return $this;
    }

    /**
     * Gets responsibility
     *
     * @return string[]
     */
    public function getResponsibility()
    {
        return $this->container['responsibility'];
    }

    /**
     * Sets responsibility
     *
     * @param string[] $responsibility The user's responsibility settings
     *
     * @return $this
     */
    public function setResponsibility($responsibility)
    {
        $this->container['responsibility'] = $responsibility;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone The user's timezone setting
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets user_location
     *
     * @return string
     */
    public function getUserLocation()
    {
        return $this->container['user_location'];
    }

    /**
     * Sets user_location
     *
     * @param string $user_location The user's location setting
     *
     * @return $this
     */
    public function setUserLocation($user_location)
    {
        $this->container['user_location'] = $user_location;

        return $this;
    }

    /**
     * Gets photo_url
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string $photo_url Download url of the document.
     *
     * @return $this
     */
    public function setPhotoUrl($photo_url)
    {
        $this->container['photo_url'] = $photo_url;

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