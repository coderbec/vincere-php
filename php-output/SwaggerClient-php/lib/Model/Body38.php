<?php
/**
 * Body38
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
 * Body38 Class Doc Comment
 *
 * @category Class
 * @description request body
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body38 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_38';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assignee_id' => 'int',
'attendee_ids' => 'float[]',
'candidate_ids' => 'float[]',
'category_ids' => 'float[]',
'company_ids' => 'float[]',
'contact_ids' => 'float[]',
'content' => 'string',
'creator_id' => 'int',
'custom_name' => 'string',
'due_date_start' => 'string',
'due_date_end' => 'string',
'insert_timestamp' => 'string',
'kpi_action_id' => 'float',
'main_entity_type' => 'string',
'meeting_location' => 'string',
'meeting_room' => 'string',
'position_ids' => 'float[]',
'other_attendee' => 'string',
'send_invitation' => 'bool',
'subject' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assignee_id' => null,
'attendee_ids' => null,
'candidate_ids' => null,
'category_ids' => null,
'company_ids' => null,
'contact_ids' => null,
'content' => null,
'creator_id' => null,
'custom_name' => null,
'due_date_start' => null,
'due_date_end' => null,
'insert_timestamp' => null,
'kpi_action_id' => null,
'main_entity_type' => null,
'meeting_location' => null,
'meeting_room' => null,
'position_ids' => null,
'other_attendee' => null,
'send_invitation' => null,
'subject' => null    ];

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
        'assignee_id' => 'assignee_id',
'attendee_ids' => 'attendee_ids',
'candidate_ids' => 'candidate_ids',
'category_ids' => 'category_ids',
'company_ids' => 'company_ids',
'contact_ids' => 'contact_ids',
'content' => 'content',
'creator_id' => 'creator_id',
'custom_name' => 'custom_name',
'due_date_start' => 'due_date_start',
'due_date_end' => 'due_date_end',
'insert_timestamp' => 'insert_timestamp',
'kpi_action_id' => 'kpi_action_id',
'main_entity_type' => 'main_entity_type',
'meeting_location' => 'meeting_location',
'meeting_room' => 'meeting_room',
'position_ids' => 'position_ids',
'other_attendee' => 'other_attendee',
'send_invitation' => 'send_invitation',
'subject' => 'subject'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignee_id' => 'setAssigneeId',
'attendee_ids' => 'setAttendeeIds',
'candidate_ids' => 'setCandidateIds',
'category_ids' => 'setCategoryIds',
'company_ids' => 'setCompanyIds',
'contact_ids' => 'setContactIds',
'content' => 'setContent',
'creator_id' => 'setCreatorId',
'custom_name' => 'setCustomName',
'due_date_start' => 'setDueDateStart',
'due_date_end' => 'setDueDateEnd',
'insert_timestamp' => 'setInsertTimestamp',
'kpi_action_id' => 'setKpiActionId',
'main_entity_type' => 'setMainEntityType',
'meeting_location' => 'setMeetingLocation',
'meeting_room' => 'setMeetingRoom',
'position_ids' => 'setPositionIds',
'other_attendee' => 'setOtherAttendee',
'send_invitation' => 'setSendInvitation',
'subject' => 'setSubject'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignee_id' => 'getAssigneeId',
'attendee_ids' => 'getAttendeeIds',
'candidate_ids' => 'getCandidateIds',
'category_ids' => 'getCategoryIds',
'company_ids' => 'getCompanyIds',
'contact_ids' => 'getContactIds',
'content' => 'getContent',
'creator_id' => 'getCreatorId',
'custom_name' => 'getCustomName',
'due_date_start' => 'getDueDateStart',
'due_date_end' => 'getDueDateEnd',
'insert_timestamp' => 'getInsertTimestamp',
'kpi_action_id' => 'getKpiActionId',
'main_entity_type' => 'getMainEntityType',
'meeting_location' => 'getMeetingLocation',
'meeting_room' => 'getMeetingRoom',
'position_ids' => 'getPositionIds',
'other_attendee' => 'getOtherAttendee',
'send_invitation' => 'getSendInvitation',
'subject' => 'getSubject'    ];

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

    const MAIN_ENTITY_TYPE_CANDIDATE = 'CANDIDATE';
const MAIN_ENTITY_TYPE_CONTACT = 'CONTACT';
const MAIN_ENTITY_TYPE_OTHER_MEETING = 'OTHER_MEETING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMainEntityTypeAllowableValues()
    {
        return [
            self::MAIN_ENTITY_TYPE_CANDIDATE,
self::MAIN_ENTITY_TYPE_CONTACT,
self::MAIN_ENTITY_TYPE_OTHER_MEETING,        ];
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
        $this->container['assignee_id'] = isset($data['assignee_id']) ? $data['assignee_id'] : null;
        $this->container['attendee_ids'] = isset($data['attendee_ids']) ? $data['attendee_ids'] : null;
        $this->container['candidate_ids'] = isset($data['candidate_ids']) ? $data['candidate_ids'] : null;
        $this->container['category_ids'] = isset($data['category_ids']) ? $data['category_ids'] : null;
        $this->container['company_ids'] = isset($data['company_ids']) ? $data['company_ids'] : null;
        $this->container['contact_ids'] = isset($data['contact_ids']) ? $data['contact_ids'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['custom_name'] = isset($data['custom_name']) ? $data['custom_name'] : null;
        $this->container['due_date_start'] = isset($data['due_date_start']) ? $data['due_date_start'] : null;
        $this->container['due_date_end'] = isset($data['due_date_end']) ? $data['due_date_end'] : null;
        $this->container['insert_timestamp'] = isset($data['insert_timestamp']) ? $data['insert_timestamp'] : null;
        $this->container['kpi_action_id'] = isset($data['kpi_action_id']) ? $data['kpi_action_id'] : null;
        $this->container['main_entity_type'] = isset($data['main_entity_type']) ? $data['main_entity_type'] : null;
        $this->container['meeting_location'] = isset($data['meeting_location']) ? $data['meeting_location'] : null;
        $this->container['meeting_room'] = isset($data['meeting_room']) ? $data['meeting_room'] : null;
        $this->container['position_ids'] = isset($data['position_ids']) ? $data['position_ids'] : null;
        $this->container['other_attendee'] = isset($data['other_attendee']) ? $data['other_attendee'] : null;
        $this->container['send_invitation'] = isset($data['send_invitation']) ? $data['send_invitation'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['assignee_id'] === null) {
            $invalidProperties[] = "'assignee_id' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['insert_timestamp'] === null) {
            $invalidProperties[] = "'insert_timestamp' can't be null";
        }
        if ($this->container['main_entity_type'] === null) {
            $invalidProperties[] = "'main_entity_type' can't be null";
        }
        $allowedValues = $this->getMainEntityTypeAllowableValues();
        if (!is_null($this->container['main_entity_type']) && !in_array($this->container['main_entity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'main_entity_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
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
     * Gets assignee_id
     *
     * @return int
     */
    public function getAssigneeId()
    {
        return $this->container['assignee_id'];
    }

    /**
     * Sets assignee_id
     *
     * @param int $assignee_id ID of the user who is assigned with this task
     *
     * @return $this
     */
    public function setAssigneeId($assignee_id)
    {
        $this->container['assignee_id'] = $assignee_id;

        return $this;
    }

    /**
     * Gets attendee_ids
     *
     * @return float[]
     */
    public function getAttendeeIds()
    {
        return $this->container['attendee_ids'];
    }

    /**
     * Sets attendee_ids
     *
     * @param float[] $attendee_ids attendee_ids
     *
     * @return $this
     */
    public function setAttendeeIds($attendee_ids)
    {
        $this->container['attendee_ids'] = $attendee_ids;

        return $this;
    }

    /**
     * Gets candidate_ids
     *
     * @return float[]
     */
    public function getCandidateIds()
    {
        return $this->container['candidate_ids'];
    }

    /**
     * Sets candidate_ids
     *
     * @param float[] $candidate_ids candidate_ids
     *
     * @return $this
     */
    public function setCandidateIds($candidate_ids)
    {
        $this->container['candidate_ids'] = $candidate_ids;

        return $this;
    }

    /**
     * Gets category_ids
     *
     * @return float[]
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param float[] $category_ids category_ids
     *
     * @return $this
     */
    public function setCategoryIds($category_ids)
    {
        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets company_ids
     *
     * @return float[]
     */
    public function getCompanyIds()
    {
        return $this->container['company_ids'];
    }

    /**
     * Sets company_ids
     *
     * @param float[] $company_ids company_ids
     *
     * @return $this
     */
    public function setCompanyIds($company_ids)
    {
        $this->container['company_ids'] = $company_ids;

        return $this;
    }

    /**
     * Gets contact_ids
     *
     * @return float[]
     */
    public function getContactIds()
    {
        return $this->container['contact_ids'];
    }

    /**
     * Sets contact_ids
     *
     * @param float[] $contact_ids contact_ids
     *
     * @return $this
     */
    public function setContactIds($contact_ids)
    {
        $this->container['contact_ids'] = $contact_ids;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content the content of this activity
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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
     * Gets custom_name
     *
     * @return string
     */
    public function getCustomName()
    {
        return $this->container['custom_name'];
    }

    /**
     * Sets custom_name
     *
     * @param string $custom_name use this field to set value if the main_entity_type is not a known Contact, Candidate.
     *
     * @return $this
     */
    public function setCustomName($custom_name)
    {
        $this->container['custom_name'] = $custom_name;

        return $this;
    }

    /**
     * Gets due_date_start
     *
     * @return string
     */
    public function getDueDateStart()
    {
        return $this->container['due_date_start'];
    }

    /**
     * Sets due_date_start
     *
     * @param string $due_date_start the start time for due date
     *
     * @return $this
     */
    public function setDueDateStart($due_date_start)
    {
        $this->container['due_date_start'] = $due_date_start;

        return $this;
    }

    /**
     * Gets due_date_end
     *
     * @return string
     */
    public function getDueDateEnd()
    {
        return $this->container['due_date_end'];
    }

    /**
     * Sets due_date_end
     *
     * @param string $due_date_end the end time for due date
     *
     * @return $this
     */
    public function setDueDateEnd($due_date_end)
    {
        $this->container['due_date_end'] = $due_date_end;

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
     * @param string $insert_timestamp Created Date
     *
     * @return $this
     */
    public function setInsertTimestamp($insert_timestamp)
    {
        $this->container['insert_timestamp'] = $insert_timestamp;

        return $this;
    }

    /**
     * Gets kpi_action_id
     *
     * @return float
     */
    public function getKpiActionId()
    {
        return $this->container['kpi_action_id'];
    }

    /**
     * Sets kpi_action_id
     *
     * @param float $kpi_action_id the ID of the kpi action in Vincere. Please refer to the reference section for KPI actions.
     *
     * @return $this
     */
    public function setKpiActionId($kpi_action_id)
    {
        $this->container['kpi_action_id'] = $kpi_action_id;

        return $this;
    }

    /**
     * Gets main_entity_type
     *
     * @return string
     */
    public function getMainEntityType()
    {
        return $this->container['main_entity_type'];
    }

    /**
     * Sets main_entity_type
     *
     * @param string $main_entity_type the main target of this meeting.
     *
     * @return $this
     */
    public function setMainEntityType($main_entity_type)
    {
        $allowedValues = $this->getMainEntityTypeAllowableValues();
        if (!in_array($main_entity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'main_entity_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['main_entity_type'] = $main_entity_type;

        return $this;
    }

    /**
     * Gets meeting_location
     *
     * @return string
     */
    public function getMeetingLocation()
    {
        return $this->container['meeting_location'];
    }

    /**
     * Sets meeting_location
     *
     * @param string $meeting_location location of meeting.
     *
     * @return $this
     */
    public function setMeetingLocation($meeting_location)
    {
        $this->container['meeting_location'] = $meeting_location;

        return $this;
    }

    /**
     * Gets meeting_room
     *
     * @return string
     */
    public function getMeetingRoom()
    {
        return $this->container['meeting_room'];
    }

    /**
     * Sets meeting_room
     *
     * @param string $meeting_room meeting room.
     *
     * @return $this
     */
    public function setMeetingRoom($meeting_room)
    {
        $this->container['meeting_room'] = $meeting_room;

        return $this;
    }

    /**
     * Gets position_ids
     *
     * @return float[]
     */
    public function getPositionIds()
    {
        return $this->container['position_ids'];
    }

    /**
     * Sets position_ids
     *
     * @param float[] $position_ids position_ids
     *
     * @return $this
     */
    public function setPositionIds($position_ids)
    {
        $this->container['position_ids'] = $position_ids;

        return $this;
    }

    /**
     * Gets other_attendee
     *
     * @return string
     */
    public function getOtherAttendee()
    {
        return $this->container['other_attendee'];
    }

    /**
     * Sets other_attendee
     *
     * @param string $other_attendee a comma-separated string of emails
     *
     * @return $this
     */
    public function setOtherAttendee($other_attendee)
    {
        $this->container['other_attendee'] = $other_attendee;

        return $this;
    }

    /**
     * Gets send_invitation
     *
     * @return bool
     */
    public function getSendInvitation()
    {
        return $this->container['send_invitation'];
    }

    /**
     * Sets send_invitation
     *
     * @param bool $send_invitation If the value is true and **assignee’s email is connected to Vincere calendar**, an event is added in the assignee’s calendar as well as an email is sent to the assignee and attendee.
     *
     * @return $this
     */
    public function setSendInvitation($send_invitation)
    {
        $this->container['send_invitation'] = $send_invitation;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject of the meeting
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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
