<?php
/**
 * InlineResponse200110ContentLayouts
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
 * InlineResponse200110ContentLayouts Class Doc Comment
 *
 * @category Class
 * @description Data of custom fields
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200110ContentLayouts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_110_content_layouts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
'index' => 'float',
'entity' => 'string',
'tab_id' => 'float',
'layout_elements' => '\Swagger\Client\Model\InlineResponse200110ContentLayoutElements[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
'index' => null,
'entity' => null,
'tab_id' => null,
'layout_elements' => null    ];

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
        'label' => 'label',
'index' => 'index',
'entity' => 'entity',
'tab_id' => 'tab_id',
'layout_elements' => 'layout_elements'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
'index' => 'setIndex',
'entity' => 'setEntity',
'tab_id' => 'setTabId',
'layout_elements' => 'setLayoutElements'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
'index' => 'getIndex',
'entity' => 'getEntity',
'tab_id' => 'getTabId',
'layout_elements' => 'getLayoutElements'    ];

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

    const ENTITY_CANDIDATE = 'candidate';
const ENTITY_CONTACT = 'contact';
const ENTITY_JOB = 'job';
const ENTITY_COMPANY = 'company';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityAllowableValues()
    {
        return [
            self::ENTITY_CANDIDATE,
self::ENTITY_CONTACT,
self::ENTITY_JOB,
self::ENTITY_COMPANY,        ];
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['tab_id'] = isset($data['tab_id']) ? $data['tab_id'] : null;
        $this->container['layout_elements'] = isset($data['layout_elements']) ? $data['layout_elements'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEntityAllowableValues();
        if (!is_null($this->container['entity']) && !in_array($this->container['entity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'entity', must be one of '%s'",
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label of element
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets index
     *
     * @return float
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param float $index index of tabs
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return string
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string $entity entity of objects
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $allowedValues = $this->getEntityAllowableValues();
        if (!is_null($entity) && !in_array($entity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets tab_id
     *
     * @return float
     */
    public function getTabId()
    {
        return $this->container['tab_id'];
    }

    /**
     * Sets tab_id
     *
     * @param float $tab_id tab_id of tab on layout setting
     *
     * @return $this
     */
    public function setTabId($tab_id)
    {
        $this->container['tab_id'] = $tab_id;

        return $this;
    }

    /**
     * Gets layout_elements
     *
     * @return \Swagger\Client\Model\InlineResponse200110ContentLayoutElements[]
     */
    public function getLayoutElements()
    {
        return $this->container['layout_elements'];
    }

    /**
     * Sets layout_elements
     *
     * @param \Swagger\Client\Model\InlineResponse200110ContentLayoutElements[] $layout_elements chidren of element of custom field
     *
     * @return $this
     */
    public function setLayoutElements($layout_elements)
    {
        $this->container['layout_elements'] = $layout_elements;

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
