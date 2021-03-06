<?php
/**
 * ResponsesHostGroupV1
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CrowdStrike API Specification
 *
 * Use this API specification as a reference for the API endpoints you can use to interact with your Falcon environment. These endpoints support authentication via OAuth2 and interact with detections and network containment. For detailed usage guides and examples, see our [documentation inside the Falcon console](https://falcon.eu-1.crowdstrike.com/support/documentation).     To use the APIs described below, combine the base URL with the path shown for each API endpoint. For commercial cloud customers, your base URL is `https://api.eu-1.crowdstrike.com`.    Each API endpoint requires authorization via an OAuth2 token. Your first API request should retrieve an OAuth2 token using the `oauth2/token` endpoint, such as `https://api.eu-1.crowdstrike.com/oauth2/token`. For subsequent requests, include the OAuth2 token in an HTTP authorization header. Tokens expire after 30 minutes, after which you should make a new token request to continue making API requests.
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ResponsesHostGroupV1 Class Doc Comment
 *
 * @category Class
 * @description A host group which targets a set of devices either through a dynamic assignment rule or a static set of hosts
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ResponsesHostGroupV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'responses.HostGroupV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assignment_rule' => 'string',
        'created_by' => 'string',
        'created_timestamp' => '\DateTime',
        'description' => 'string',
        'group_type' => 'string',
        'id' => 'string',
        'modified_by' => 'string',
        'modified_timestamp' => '\DateTime',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assignment_rule' => null,
        'created_by' => null,
        'created_timestamp' => 'date-time',
        'description' => null,
        'group_type' => null,
        'id' => null,
        'modified_by' => null,
        'modified_timestamp' => 'date-time',
        'name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'assignment_rule' => 'assignment_rule',
        'created_by' => 'created_by',
        'created_timestamp' => 'created_timestamp',
        'description' => 'description',
        'group_type' => 'group_type',
        'id' => 'id',
        'modified_by' => 'modified_by',
        'modified_timestamp' => 'modified_timestamp',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignment_rule' => 'setAssignmentRule',
        'created_by' => 'setCreatedBy',
        'created_timestamp' => 'setCreatedTimestamp',
        'description' => 'setDescription',
        'group_type' => 'setGroupType',
        'id' => 'setId',
        'modified_by' => 'setModifiedBy',
        'modified_timestamp' => 'setModifiedTimestamp',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignment_rule' => 'getAssignmentRule',
        'created_by' => 'getCreatedBy',
        'created_timestamp' => 'getCreatedTimestamp',
        'description' => 'getDescription',
        'group_type' => 'getGroupType',
        'id' => 'getId',
        'modified_by' => 'getModifiedBy',
        'modified_timestamp' => 'getModifiedTimestamp',
        'name' => 'getName'
    ];

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
        return self::$openAPIModelName;
    }

    const GROUP_TYPE__STATIC = 'static';
    const GROUP_TYPE_DYNAMIC = 'dynamic';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupTypeAllowableValues()
    {
        return [
            self::GROUP_TYPE__STATIC,
            self::GROUP_TYPE_DYNAMIC,
        ];
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
        $this->container['assignment_rule'] = $data['assignment_rule'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_timestamp'] = $data['created_timestamp'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['group_type'] = $data['group_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['modified_by'] = $data['modified_by'] ?? null;
        $this->container['modified_timestamp'] = $data['modified_timestamp'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_by'] === null) {
            $invalidProperties[] = "'created_by' can't be null";
        }
        if ($this->container['created_timestamp'] === null) {
            $invalidProperties[] = "'created_timestamp' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!is_null($this->container['group_type']) && !in_array($this->container['group_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'group_type', must be one of '%s'",
                $this->container['group_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['modified_by'] === null) {
            $invalidProperties[] = "'modified_by' can't be null";
        }
        if ($this->container['modified_timestamp'] === null) {
            $invalidProperties[] = "'modified_timestamp' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets assignment_rule
     *
     * @return string|null
     */
    public function getAssignmentRule()
    {
        return $this->container['assignment_rule'];
    }

    /**
     * Sets assignment_rule
     *
     * @param string|null $assignment_rule The assignment rule of a group
     *
     * @return self
     */
    public function setAssignmentRule($assignment_rule)
    {
        $this->container['assignment_rule'] = $assignment_rule;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by The email of the user which created the policy
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_timestamp
     *
     * @return \DateTime
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param \DateTime $created_timestamp The time at which the policy was created
     *
     * @return self
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description An additional description of the group or the devices it targets
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets group_type
     *
     * @return string|null
     */
    public function getGroupType()
    {
        return $this->container['group_type'];
    }

    /**
     * Sets group_type
     *
     * @param string|null $group_type The method by which this host group is managed
     *
     * @return self
     */
    public function setGroupType($group_type)
    {
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!is_null($group_type) && !in_array($group_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'group_type', must be one of '%s'",
                    $group_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['group_type'] = $group_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The identifier of this host group
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param string $modified_by The email of the user which last modified the policy
     *
     * @return self
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets modified_timestamp
     *
     * @return \DateTime
     */
    public function getModifiedTimestamp()
    {
        return $this->container['modified_timestamp'];
    }

    /**
     * Sets modified_timestamp
     *
     * @param \DateTime $modified_timestamp The time at which the policy was last modified
     *
     * @return self
     */
    public function setModifiedTimestamp($modified_timestamp)
    {
        $this->container['modified_timestamp'] = $modified_timestamp;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the group
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


