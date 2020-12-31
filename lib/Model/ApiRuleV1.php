<?php
/**
 * ApiRuleV1
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
 * ApiRuleV1 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ApiRuleV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'api.RuleV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_label' => 'string',
        'comment' => 'string',
        'committed_on' => '\DateTime',
        'created_by' => 'string',
        'created_on' => '\DateTime',
        'customer_id' => 'string',
        'deleted' => 'bool',
        'description' => 'string',
        'disposition_id' => 'int',
        'enabled' => 'bool',
        'field_values' => '\OpenAPI\Client\Model\DomainFieldValue[]',
        'instance_id' => 'string',
        'instance_version' => 'int',
        'magic_cookie' => 'int',
        'modified_by' => 'string',
        'modified_on' => '\DateTime',
        'name' => 'string',
        'pattern_id' => 'string',
        'pattern_severity' => 'string',
        'rulegroup_id' => 'string',
        'ruletype_id' => 'string',
        'ruletype_name' => 'string',
        'version_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_label' => null,
        'comment' => null,
        'committed_on' => 'date-time',
        'created_by' => null,
        'created_on' => 'date-time',
        'customer_id' => null,
        'deleted' => null,
        'description' => null,
        'disposition_id' => 'int32',
        'enabled' => null,
        'field_values' => null,
        'instance_id' => null,
        'instance_version' => null,
        'magic_cookie' => 'int64',
        'modified_by' => null,
        'modified_on' => 'date-time',
        'name' => null,
        'pattern_id' => null,
        'pattern_severity' => null,
        'rulegroup_id' => null,
        'ruletype_id' => null,
        'ruletype_name' => null,
        'version_ids' => null
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
        'action_label' => 'action_label',
        'comment' => 'comment',
        'committed_on' => 'committed_on',
        'created_by' => 'created_by',
        'created_on' => 'created_on',
        'customer_id' => 'customer_id',
        'deleted' => 'deleted',
        'description' => 'description',
        'disposition_id' => 'disposition_id',
        'enabled' => 'enabled',
        'field_values' => 'field_values',
        'instance_id' => 'instance_id',
        'instance_version' => 'instance_version',
        'magic_cookie' => 'magic_cookie',
        'modified_by' => 'modified_by',
        'modified_on' => 'modified_on',
        'name' => 'name',
        'pattern_id' => 'pattern_id',
        'pattern_severity' => 'pattern_severity',
        'rulegroup_id' => 'rulegroup_id',
        'ruletype_id' => 'ruletype_id',
        'ruletype_name' => 'ruletype_name',
        'version_ids' => 'version_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_label' => 'setActionLabel',
        'comment' => 'setComment',
        'committed_on' => 'setCommittedOn',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'customer_id' => 'setCustomerId',
        'deleted' => 'setDeleted',
        'description' => 'setDescription',
        'disposition_id' => 'setDispositionId',
        'enabled' => 'setEnabled',
        'field_values' => 'setFieldValues',
        'instance_id' => 'setInstanceId',
        'instance_version' => 'setInstanceVersion',
        'magic_cookie' => 'setMagicCookie',
        'modified_by' => 'setModifiedBy',
        'modified_on' => 'setModifiedOn',
        'name' => 'setName',
        'pattern_id' => 'setPatternId',
        'pattern_severity' => 'setPatternSeverity',
        'rulegroup_id' => 'setRulegroupId',
        'ruletype_id' => 'setRuletypeId',
        'ruletype_name' => 'setRuletypeName',
        'version_ids' => 'setVersionIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_label' => 'getActionLabel',
        'comment' => 'getComment',
        'committed_on' => 'getCommittedOn',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'customer_id' => 'getCustomerId',
        'deleted' => 'getDeleted',
        'description' => 'getDescription',
        'disposition_id' => 'getDispositionId',
        'enabled' => 'getEnabled',
        'field_values' => 'getFieldValues',
        'instance_id' => 'getInstanceId',
        'instance_version' => 'getInstanceVersion',
        'magic_cookie' => 'getMagicCookie',
        'modified_by' => 'getModifiedBy',
        'modified_on' => 'getModifiedOn',
        'name' => 'getName',
        'pattern_id' => 'getPatternId',
        'pattern_severity' => 'getPatternSeverity',
        'rulegroup_id' => 'getRulegroupId',
        'ruletype_id' => 'getRuletypeId',
        'ruletype_name' => 'getRuletypeName',
        'version_ids' => 'getVersionIds'
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
        $this->container['action_label'] = $data['action_label'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['committed_on'] = $data['committed_on'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['disposition_id'] = $data['disposition_id'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['field_values'] = $data['field_values'] ?? null;
        $this->container['instance_id'] = $data['instance_id'] ?? null;
        $this->container['instance_version'] = $data['instance_version'] ?? null;
        $this->container['magic_cookie'] = $data['magic_cookie'] ?? null;
        $this->container['modified_by'] = $data['modified_by'] ?? null;
        $this->container['modified_on'] = $data['modified_on'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['pattern_id'] = $data['pattern_id'] ?? null;
        $this->container['pattern_severity'] = $data['pattern_severity'] ?? null;
        $this->container['rulegroup_id'] = $data['rulegroup_id'] ?? null;
        $this->container['ruletype_id'] = $data['ruletype_id'] ?? null;
        $this->container['ruletype_name'] = $data['ruletype_name'] ?? null;
        $this->container['version_ids'] = $data['version_ids'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action_label'] === null) {
            $invalidProperties[] = "'action_label' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['committed_on'] === null) {
            $invalidProperties[] = "'committed_on' can't be null";
        }
        if ($this->container['created_by'] === null) {
            $invalidProperties[] = "'created_by' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['disposition_id'] === null) {
            $invalidProperties[] = "'disposition_id' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['field_values'] === null) {
            $invalidProperties[] = "'field_values' can't be null";
        }
        if ($this->container['instance_id'] === null) {
            $invalidProperties[] = "'instance_id' can't be null";
        }
        if ($this->container['instance_version'] === null) {
            $invalidProperties[] = "'instance_version' can't be null";
        }
        if ($this->container['magic_cookie'] === null) {
            $invalidProperties[] = "'magic_cookie' can't be null";
        }
        if ($this->container['modified_by'] === null) {
            $invalidProperties[] = "'modified_by' can't be null";
        }
        if ($this->container['modified_on'] === null) {
            $invalidProperties[] = "'modified_on' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['pattern_id'] === null) {
            $invalidProperties[] = "'pattern_id' can't be null";
        }
        if ($this->container['pattern_severity'] === null) {
            $invalidProperties[] = "'pattern_severity' can't be null";
        }
        if ($this->container['rulegroup_id'] === null) {
            $invalidProperties[] = "'rulegroup_id' can't be null";
        }
        if ($this->container['ruletype_id'] === null) {
            $invalidProperties[] = "'ruletype_id' can't be null";
        }
        if ($this->container['ruletype_name'] === null) {
            $invalidProperties[] = "'ruletype_name' can't be null";
        }
        if ($this->container['version_ids'] === null) {
            $invalidProperties[] = "'version_ids' can't be null";
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
     * Gets action_label
     *
     * @return string
     */
    public function getActionLabel()
    {
        return $this->container['action_label'];
    }

    /**
     * Sets action_label
     *
     * @param string $action_label action_label
     *
     * @return self
     */
    public function setActionLabel($action_label)
    {
        $this->container['action_label'] = $action_label;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets committed_on
     *
     * @return \DateTime
     */
    public function getCommittedOn()
    {
        return $this->container['committed_on'];
    }

    /**
     * Sets committed_on
     *
     * @param \DateTime $committed_on committed_on
     *
     * @return self
     */
    public function setCommittedOn($committed_on)
    {
        $this->container['committed_on'] = $committed_on;

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
     * @param string $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets disposition_id
     *
     * @return int
     */
    public function getDispositionId()
    {
        return $this->container['disposition_id'];
    }

    /**
     * Sets disposition_id
     *
     * @param int $disposition_id disposition_id
     *
     * @return self
     */
    public function setDispositionId($disposition_id)
    {
        $this->container['disposition_id'] = $disposition_id;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets field_values
     *
     * @return \OpenAPI\Client\Model\DomainFieldValue[]
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     *
     * @param \OpenAPI\Client\Model\DomainFieldValue[] $field_values field_values
     *
     * @return self
     */
    public function setFieldValues($field_values)
    {
        $this->container['field_values'] = $field_values;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id instance_id
     *
     * @return self
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets instance_version
     *
     * @return int
     */
    public function getInstanceVersion()
    {
        return $this->container['instance_version'];
    }

    /**
     * Sets instance_version
     *
     * @param int $instance_version instance_version
     *
     * @return self
     */
    public function setInstanceVersion($instance_version)
    {
        $this->container['instance_version'] = $instance_version;

        return $this;
    }

    /**
     * Gets magic_cookie
     *
     * @return int
     */
    public function getMagicCookie()
    {
        return $this->container['magic_cookie'];
    }

    /**
     * Sets magic_cookie
     *
     * @param int $magic_cookie magic_cookie
     *
     * @return self
     */
    public function setMagicCookie($magic_cookie)
    {
        $this->container['magic_cookie'] = $magic_cookie;

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
     * @param string $modified_by modified_by
     *
     * @return self
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets modified_on
     *
     * @return \DateTime
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     *
     * @param \DateTime $modified_on modified_on
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pattern_id
     *
     * @return string
     */
    public function getPatternId()
    {
        return $this->container['pattern_id'];
    }

    /**
     * Sets pattern_id
     *
     * @param string $pattern_id pattern_id
     *
     * @return self
     */
    public function setPatternId($pattern_id)
    {
        $this->container['pattern_id'] = $pattern_id;

        return $this;
    }

    /**
     * Gets pattern_severity
     *
     * @return string
     */
    public function getPatternSeverity()
    {
        return $this->container['pattern_severity'];
    }

    /**
     * Sets pattern_severity
     *
     * @param string $pattern_severity pattern_severity
     *
     * @return self
     */
    public function setPatternSeverity($pattern_severity)
    {
        $this->container['pattern_severity'] = $pattern_severity;

        return $this;
    }

    /**
     * Gets rulegroup_id
     *
     * @return string
     */
    public function getRulegroupId()
    {
        return $this->container['rulegroup_id'];
    }

    /**
     * Sets rulegroup_id
     *
     * @param string $rulegroup_id rulegroup_id
     *
     * @return self
     */
    public function setRulegroupId($rulegroup_id)
    {
        $this->container['rulegroup_id'] = $rulegroup_id;

        return $this;
    }

    /**
     * Gets ruletype_id
     *
     * @return string
     */
    public function getRuletypeId()
    {
        return $this->container['ruletype_id'];
    }

    /**
     * Sets ruletype_id
     *
     * @param string $ruletype_id ruletype_id
     *
     * @return self
     */
    public function setRuletypeId($ruletype_id)
    {
        $this->container['ruletype_id'] = $ruletype_id;

        return $this;
    }

    /**
     * Gets ruletype_name
     *
     * @return string
     */
    public function getRuletypeName()
    {
        return $this->container['ruletype_name'];
    }

    /**
     * Sets ruletype_name
     *
     * @param string $ruletype_name ruletype_name
     *
     * @return self
     */
    public function setRuletypeName($ruletype_name)
    {
        $this->container['ruletype_name'] = $ruletype_name;

        return $this;
    }

    /**
     * Gets version_ids
     *
     * @return string[]
     */
    public function getVersionIds()
    {
        return $this->container['version_ids'];
    }

    /**
     * Sets version_ids
     *
     * @param string[] $version_ids version_ids
     *
     * @return self
     */
    public function setVersionIds($version_ids)
    {
        $this->container['version_ids'] = $version_ids;

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


