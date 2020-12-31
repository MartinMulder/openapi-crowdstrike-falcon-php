<?php
/**
 * ApiRuleCreateV1
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
 * ApiRuleCreateV1 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ApiRuleCreateV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'api.RuleCreateV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment' => 'string',
        'description' => 'string',
        'disposition_id' => 'int',
        'field_values' => '\OpenAPI\Client\Model\DomainFieldValue[]',
        'name' => 'string',
        'pattern_severity' => 'string',
        'rulegroup_id' => 'string',
        'ruletype_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comment' => null,
        'description' => null,
        'disposition_id' => 'int32',
        'field_values' => null,
        'name' => null,
        'pattern_severity' => null,
        'rulegroup_id' => null,
        'ruletype_id' => null
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
        'comment' => 'comment',
        'description' => 'description',
        'disposition_id' => 'disposition_id',
        'field_values' => 'field_values',
        'name' => 'name',
        'pattern_severity' => 'pattern_severity',
        'rulegroup_id' => 'rulegroup_id',
        'ruletype_id' => 'ruletype_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'description' => 'setDescription',
        'disposition_id' => 'setDispositionId',
        'field_values' => 'setFieldValues',
        'name' => 'setName',
        'pattern_severity' => 'setPatternSeverity',
        'rulegroup_id' => 'setRulegroupId',
        'ruletype_id' => 'setRuletypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'description' => 'getDescription',
        'disposition_id' => 'getDispositionId',
        'field_values' => 'getFieldValues',
        'name' => 'getName',
        'pattern_severity' => 'getPatternSeverity',
        'rulegroup_id' => 'getRulegroupId',
        'ruletype_id' => 'getRuletypeId'
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
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['disposition_id'] = $data['disposition_id'] ?? null;
        $this->container['field_values'] = $data['field_values'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['pattern_severity'] = $data['pattern_severity'] ?? null;
        $this->container['rulegroup_id'] = $data['rulegroup_id'] ?? null;
        $this->container['ruletype_id'] = $data['ruletype_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['disposition_id'] === null) {
            $invalidProperties[] = "'disposition_id' can't be null";
        }
        if ($this->container['field_values'] === null) {
            $invalidProperties[] = "'field_values' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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

