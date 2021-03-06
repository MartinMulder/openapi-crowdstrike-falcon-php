<?php
/**
 * DomainIncident
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
 * DomainIncident Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DomainIncident implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domain.Incident';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assigned_to' => 'string',
        'assigned_to_name' => 'string',
        'cid' => 'string',
        'created' => '\DateTime',
        'description' => 'string',
        'end' => '\DateTime',
        'events_histogram' => '\OpenAPI\Client\Model\DomainEventHistogram[]',
        'fine_score' => 'int',
        'host_ids' => 'string[]',
        'hosts' => '\OpenAPI\Client\Model\DetectsDeviceDetailIndexed[]',
        'incident_id' => 'string',
        'incident_type' => 'int',
        'lm_host_ids' => 'string[]',
        'lm_hosts_capped' => 'bool',
        'modified_timestamp' => '\DateTime',
        'name' => 'string',
        'objectives' => 'string[]',
        'start' => '\DateTime',
        'state' => 'string',
        'status' => 'int',
        'tactics' => 'string[]',
        'tags' => 'string[]',
        'techniques' => 'string[]',
        'users' => 'string[]',
        'visibility' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assigned_to' => null,
        'assigned_to_name' => null,
        'cid' => null,
        'created' => 'date-time',
        'description' => null,
        'end' => 'date-time',
        'events_histogram' => null,
        'fine_score' => 'int32',
        'host_ids' => null,
        'hosts' => null,
        'incident_id' => null,
        'incident_type' => null,
        'lm_host_ids' => null,
        'lm_hosts_capped' => null,
        'modified_timestamp' => 'date-time',
        'name' => null,
        'objectives' => null,
        'start' => 'date-time',
        'state' => null,
        'status' => 'int32',
        'tactics' => null,
        'tags' => null,
        'techniques' => null,
        'users' => null,
        'visibility' => 'int32'
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
        'assigned_to' => 'assigned_to',
        'assigned_to_name' => 'assigned_to_name',
        'cid' => 'cid',
        'created' => 'created',
        'description' => 'description',
        'end' => 'end',
        'events_histogram' => 'events_histogram',
        'fine_score' => 'fine_score',
        'host_ids' => 'host_ids',
        'hosts' => 'hosts',
        'incident_id' => 'incident_id',
        'incident_type' => 'incident_type',
        'lm_host_ids' => 'lm_host_ids',
        'lm_hosts_capped' => 'lm_hosts_capped',
        'modified_timestamp' => 'modified_timestamp',
        'name' => 'name',
        'objectives' => 'objectives',
        'start' => 'start',
        'state' => 'state',
        'status' => 'status',
        'tactics' => 'tactics',
        'tags' => 'tags',
        'techniques' => 'techniques',
        'users' => 'users',
        'visibility' => 'visibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assigned_to' => 'setAssignedTo',
        'assigned_to_name' => 'setAssignedToName',
        'cid' => 'setCid',
        'created' => 'setCreated',
        'description' => 'setDescription',
        'end' => 'setEnd',
        'events_histogram' => 'setEventsHistogram',
        'fine_score' => 'setFineScore',
        'host_ids' => 'setHostIds',
        'hosts' => 'setHosts',
        'incident_id' => 'setIncidentId',
        'incident_type' => 'setIncidentType',
        'lm_host_ids' => 'setLmHostIds',
        'lm_hosts_capped' => 'setLmHostsCapped',
        'modified_timestamp' => 'setModifiedTimestamp',
        'name' => 'setName',
        'objectives' => 'setObjectives',
        'start' => 'setStart',
        'state' => 'setState',
        'status' => 'setStatus',
        'tactics' => 'setTactics',
        'tags' => 'setTags',
        'techniques' => 'setTechniques',
        'users' => 'setUsers',
        'visibility' => 'setVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assigned_to' => 'getAssignedTo',
        'assigned_to_name' => 'getAssignedToName',
        'cid' => 'getCid',
        'created' => 'getCreated',
        'description' => 'getDescription',
        'end' => 'getEnd',
        'events_histogram' => 'getEventsHistogram',
        'fine_score' => 'getFineScore',
        'host_ids' => 'getHostIds',
        'hosts' => 'getHosts',
        'incident_id' => 'getIncidentId',
        'incident_type' => 'getIncidentType',
        'lm_host_ids' => 'getLmHostIds',
        'lm_hosts_capped' => 'getLmHostsCapped',
        'modified_timestamp' => 'getModifiedTimestamp',
        'name' => 'getName',
        'objectives' => 'getObjectives',
        'start' => 'getStart',
        'state' => 'getState',
        'status' => 'getStatus',
        'tactics' => 'getTactics',
        'tags' => 'getTags',
        'techniques' => 'getTechniques',
        'users' => 'getUsers',
        'visibility' => 'getVisibility'
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
        $this->container['assigned_to'] = $data['assigned_to'] ?? null;
        $this->container['assigned_to_name'] = $data['assigned_to_name'] ?? null;
        $this->container['cid'] = $data['cid'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['events_histogram'] = $data['events_histogram'] ?? null;
        $this->container['fine_score'] = $data['fine_score'] ?? null;
        $this->container['host_ids'] = $data['host_ids'] ?? null;
        $this->container['hosts'] = $data['hosts'] ?? null;
        $this->container['incident_id'] = $data['incident_id'] ?? null;
        $this->container['incident_type'] = $data['incident_type'] ?? null;
        $this->container['lm_host_ids'] = $data['lm_host_ids'] ?? null;
        $this->container['lm_hosts_capped'] = $data['lm_hosts_capped'] ?? null;
        $this->container['modified_timestamp'] = $data['modified_timestamp'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['objectives'] = $data['objectives'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tactics'] = $data['tactics'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['techniques'] = $data['techniques'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
        $this->container['visibility'] = $data['visibility'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cid'] === null) {
            $invalidProperties[] = "'cid' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
        if ($this->container['fine_score'] === null) {
            $invalidProperties[] = "'fine_score' can't be null";
        }
        if ($this->container['host_ids'] === null) {
            $invalidProperties[] = "'host_ids' can't be null";
        }
        if ($this->container['incident_id'] === null) {
            $invalidProperties[] = "'incident_id' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
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
     * Gets assigned_to
     *
     * @return string|null
     */
    public function getAssignedTo()
    {
        return $this->container['assigned_to'];
    }

    /**
     * Sets assigned_to
     *
     * @param string|null $assigned_to assigned_to
     *
     * @return self
     */
    public function setAssignedTo($assigned_to)
    {
        $this->container['assigned_to'] = $assigned_to;

        return $this;
    }

    /**
     * Gets assigned_to_name
     *
     * @return string|null
     */
    public function getAssignedToName()
    {
        return $this->container['assigned_to_name'];
    }

    /**
     * Sets assigned_to_name
     *
     * @param string|null $assigned_to_name assigned_to_name
     *
     * @return self
     */
    public function setAssignedToName($assigned_to_name)
    {
        $this->container['assigned_to_name'] = $assigned_to_name;

        return $this;
    }

    /**
     * Gets cid
     *
     * @return string
     */
    public function getCid()
    {
        return $this->container['cid'];
    }

    /**
     * Sets cid
     *
     * @param string $cid cid
     *
     * @return self
     */
    public function setCid($cid)
    {
        $this->container['cid'] = $cid;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets events_histogram
     *
     * @return \OpenAPI\Client\Model\DomainEventHistogram[]|null
     */
    public function getEventsHistogram()
    {
        return $this->container['events_histogram'];
    }

    /**
     * Sets events_histogram
     *
     * @param \OpenAPI\Client\Model\DomainEventHistogram[]|null $events_histogram events_histogram
     *
     * @return self
     */
    public function setEventsHistogram($events_histogram)
    {
        $this->container['events_histogram'] = $events_histogram;

        return $this;
    }

    /**
     * Gets fine_score
     *
     * @return int
     */
    public function getFineScore()
    {
        return $this->container['fine_score'];
    }

    /**
     * Sets fine_score
     *
     * @param int $fine_score fine_score
     *
     * @return self
     */
    public function setFineScore($fine_score)
    {
        $this->container['fine_score'] = $fine_score;

        return $this;
    }

    /**
     * Gets host_ids
     *
     * @return string[]
     */
    public function getHostIds()
    {
        return $this->container['host_ids'];
    }

    /**
     * Sets host_ids
     *
     * @param string[] $host_ids host_ids
     *
     * @return self
     */
    public function setHostIds($host_ids)
    {
        $this->container['host_ids'] = $host_ids;

        return $this;
    }

    /**
     * Gets hosts
     *
     * @return \OpenAPI\Client\Model\DetectsDeviceDetailIndexed[]|null
     */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
     * Sets hosts
     *
     * @param \OpenAPI\Client\Model\DetectsDeviceDetailIndexed[]|null $hosts hosts
     *
     * @return self
     */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;

        return $this;
    }

    /**
     * Gets incident_id
     *
     * @return string
     */
    public function getIncidentId()
    {
        return $this->container['incident_id'];
    }

    /**
     * Sets incident_id
     *
     * @param string $incident_id incident_id
     *
     * @return self
     */
    public function setIncidentId($incident_id)
    {
        $this->container['incident_id'] = $incident_id;

        return $this;
    }

    /**
     * Gets incident_type
     *
     * @return int|null
     */
    public function getIncidentType()
    {
        return $this->container['incident_type'];
    }

    /**
     * Sets incident_type
     *
     * @param int|null $incident_type incident_type
     *
     * @return self
     */
    public function setIncidentType($incident_type)
    {
        $this->container['incident_type'] = $incident_type;

        return $this;
    }

    /**
     * Gets lm_host_ids
     *
     * @return string[]|null
     */
    public function getLmHostIds()
    {
        return $this->container['lm_host_ids'];
    }

    /**
     * Sets lm_host_ids
     *
     * @param string[]|null $lm_host_ids lm_host_ids
     *
     * @return self
     */
    public function setLmHostIds($lm_host_ids)
    {
        $this->container['lm_host_ids'] = $lm_host_ids;

        return $this;
    }

    /**
     * Gets lm_hosts_capped
     *
     * @return bool|null
     */
    public function getLmHostsCapped()
    {
        return $this->container['lm_hosts_capped'];
    }

    /**
     * Sets lm_hosts_capped
     *
     * @param bool|null $lm_hosts_capped lm_hosts_capped
     *
     * @return self
     */
    public function setLmHostsCapped($lm_hosts_capped)
    {
        $this->container['lm_hosts_capped'] = $lm_hosts_capped;

        return $this;
    }

    /**
     * Gets modified_timestamp
     *
     * @return \DateTime|null
     */
    public function getModifiedTimestamp()
    {
        return $this->container['modified_timestamp'];
    }

    /**
     * Sets modified_timestamp
     *
     * @param \DateTime|null $modified_timestamp modified_timestamp
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return string[]|null
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param string[]|null $objectives objectives
     *
     * @return self
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tactics
     *
     * @return string[]|null
     */
    public function getTactics()
    {
        return $this->container['tactics'];
    }

    /**
     * Sets tactics
     *
     * @param string[]|null $tactics tactics
     *
     * @return self
     */
    public function setTactics($tactics)
    {
        $this->container['tactics'] = $tactics;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets techniques
     *
     * @return string[]|null
     */
    public function getTechniques()
    {
        return $this->container['techniques'];
    }

    /**
     * Sets techniques
     *
     * @param string[]|null $techniques techniques
     *
     * @return self
     */
    public function setTechniques($techniques)
    {
        $this->container['techniques'] = $techniques;

        return $this;
    }

    /**
     * Gets users
     *
     * @return string[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param string[]|null $users users
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return int|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param int|null $visibility visibility
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

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


