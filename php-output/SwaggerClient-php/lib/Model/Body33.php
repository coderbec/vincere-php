<?php
/**
 * Body33
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
 * Body33 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body33 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_33';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_id' => 'int',
'completed' => 'bool',
'text' => 'string',
'creator_id' => 'int',
'include_comment' => 'bool',
'include_meeting' => 'bool',
'include_task' => 'bool',
'index' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_id' => null,
'completed' => null,
'text' => null,
'creator_id' => null,
'include_comment' => null,
'include_meeting' => null,
'include_task' => null,
'index' => null    ];

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
        'contact_id' => 'contact_id',
'completed' => 'completed',
'text' => 'text',
'creator_id' => 'creator_id',
'include_comment' => 'include_comment',
'include_meeting' => 'include_meeting',
'include_task' => 'include_task',
'index' => 'index'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
'completed' => 'setCompleted',
'text' => 'setText',
'creator_id' => 'setCreatorId',
'include_comment' => 'setIncludeComment',
'include_meeting' => 'setIncludeMeeting',
'include_task' => 'setIncludeTask',
'index' => 'setIndex'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
'completed' => 'getCompleted',
'text' => 'getText',
'creator_id' => 'getCreatorId',
'include_comment' => 'getIncludeComment',
'include_meeting' => 'getIncludeMeeting',
'include_task' => 'getIncludeTask',
'index' => 'getIndex'    ];

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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['include_comment'] = isset($data['include_comment']) ? $data['include_comment'] : null;
        $this->container['include_meeting'] = isset($data['include_meeting']) ? $data['include_meeting'] : null;
        $this->container['include_task'] = isset($data['include_task']) ? $data['include_task'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact_id'] === null) {
            $invalidProperties[] = "'contact_id' can't be null";
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
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id contact internal id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool $completed If the value is true, the task or meeting must be completed.  If the value is false, the task or meeting must not be completed yet.
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text the text that included (case-insensitive) in the field content or subject of the activity
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
     * Gets include_comment
     *
     * @return bool
     */
    public function getIncludeComment()
    {
        return $this->container['include_comment'];
    }

    /**
     * Sets include_comment
     *
     * @param bool $include_comment include_comment
     *
     * @return $this
     */
    public function setIncludeComment($include_comment)
    {
        $this->container['include_comment'] = $include_comment;

        return $this;
    }

    /**
     * Gets include_meeting
     *
     * @return bool
     */
    public function getIncludeMeeting()
    {
        return $this->container['include_meeting'];
    }

    /**
     * Sets include_meeting
     *
     * @param bool $include_meeting include_meeting
     *
     * @return $this
     */
    public function setIncludeMeeting($include_meeting)
    {
        $this->container['include_meeting'] = $include_meeting;

        return $this;
    }

    /**
     * Gets include_task
     *
     * @return bool
     */
    public function getIncludeTask()
    {
        return $this->container['include_task'];
    }

    /**
     * Sets include_task
     *
     * @param bool $include_task include_task
     *
     * @return $this
     */
    public function setIncludeTask($include_task)
    {
        $this->container['include_task'] = $include_task;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index index of the slice to get, start at 0 and increase by 1.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

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
