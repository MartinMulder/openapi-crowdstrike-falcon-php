<?php
/**
 * DomainCIDPolicyAssignments
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
 * DomainCIDPolicyAssignments Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DomainCIDPolicyAssignments implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domain.CIDPolicyAssignments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cid' => 'string',
        'cloud_service' => 'string',
        'cloud_service_subtype' => 'string',
        'default_severity' => 'string',
        'enabled' => 'bool',
        'name' => 'string',
        'policy_id' => 'int',
        'policy_severity' => 'int',
        'policy_timestamp' => '\DateTime',
        'severity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cid' => null,
        'cloud_service' => null,
        'cloud_service_subtype' => null,
        'default_severity' => null,
        'enabled' => null,
        'name' => null,
        'policy_id' => 'int32',
        'policy_severity' => 'int32',
        'policy_timestamp' => 'date-time',
        'severity' => null
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
        'cid' => 'cid',
        'cloud_service' => 'cloud_service',
        'cloud_service_subtype' => 'cloud_service_subtype',
        'default_severity' => 'default_severity',
        'enabled' => 'enabled',
        'name' => 'name',
        'policy_id' => 'policy_id',
        'policy_severity' => 'policy_severity',
        'policy_timestamp' => 'policy_timestamp',
        'severity' => 'severity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cid' => 'setCid',
        'cloud_service' => 'setCloudService',
        'cloud_service_subtype' => 'setCloudServiceSubtype',
        'default_severity' => 'setDefaultSeverity',
        'enabled' => 'setEnabled',
        'name' => 'setName',
        'policy_id' => 'setPolicyId',
        'policy_severity' => 'setPolicySeverity',
        'policy_timestamp' => 'setPolicyTimestamp',
        'severity' => 'setSeverity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cid' => 'getCid',
        'cloud_service' => 'getCloudService',
        'cloud_service_subtype' => 'getCloudServiceSubtype',
        'default_severity' => 'getDefaultSeverity',
        'enabled' => 'getEnabled',
        'name' => 'getName',
        'policy_id' => 'getPolicyId',
        'policy_severity' => 'getPolicySeverity',
        'policy_timestamp' => 'getPolicyTimestamp',
        'severity' => 'getSeverity'
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
        $this->container['cid'] = $data['cid'] ?? null;
        $this->container['cloud_service'] = $data['cloud_service'] ?? null;
        $this->container['cloud_service_subtype'] = $data['cloud_service_subtype'] ?? null;
        $this->container['default_severity'] = $data['default_severity'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['policy_id'] = $data['policy_id'] ?? null;
        $this->container['policy_severity'] = $data['policy_severity'] ?? null;
        $this->container['policy_timestamp'] = $data['policy_timestamp'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
     * Gets cid
     *
     * @return string|null
     */
    public function getCid()
    {
        return $this->container['cid'];
    }

    /**
     * Sets cid
     *
     * @param string|null $cid cid
     *
     * @return self
     */
    public function setCid($cid)
    {
        $this->container['cid'] = $cid;

        return $this;
    }

    /**
     * Gets cloud_service
     *
     * @return string|null
     */
    public function getCloudService()
    {
        return $this->container['cloud_service'];
    }

    /**
     * Sets cloud_service
     *
     * @param string|null $cloud_service cloud_service
     *
     * @return self
     */
    public function setCloudService($cloud_service)
    {
        $this->container['cloud_service'] = $cloud_service;

        return $this;
    }

    /**
     * Gets cloud_service_subtype
     *
     * @return string|null
     */
    public function getCloudServiceSubtype()
    {
        return $this->container['cloud_service_subtype'];
    }

    /**
     * Sets cloud_service_subtype
     *
     * @param string|null $cloud_service_subtype cloud_service_subtype
     *
     * @return self
     */
    public function setCloudServiceSubtype($cloud_service_subtype)
    {
        $this->container['cloud_service_subtype'] = $cloud_service_subtype;

        return $this;
    }

    /**
     * Gets default_severity
     *
     * @return string|null
     */
    public function getDefaultSeverity()
    {
        return $this->container['default_severity'];
    }

    /**
     * Sets default_severity
     *
     * @param string|null $default_severity default_severity
     *
     * @return self
     */
    public function setDefaultSeverity($default_severity)
    {
        $this->container['default_severity'] = $default_severity;

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
     * Gets policy_id
     *
     * @return int|null
     */
    public function getPolicyId()
    {
        return $this->container['policy_id'];
    }

    /**
     * Sets policy_id
     *
     * @param int|null $policy_id policy_id
     *
     * @return self
     */
    public function setPolicyId($policy_id)
    {
        $this->container['policy_id'] = $policy_id;

        return $this;
    }

    /**
     * Gets policy_severity
     *
     * @return int|null
     */
    public function getPolicySeverity()
    {
        return $this->container['policy_severity'];
    }

    /**
     * Sets policy_severity
     *
     * @param int|null $policy_severity policy_severity
     *
     * @return self
     */
    public function setPolicySeverity($policy_severity)
    {
        $this->container['policy_severity'] = $policy_severity;

        return $this;
    }

    /**
     * Gets policy_timestamp
     *
     * @return \DateTime|null
     */
    public function getPolicyTimestamp()
    {
        return $this->container['policy_timestamp'];
    }

    /**
     * Sets policy_timestamp
     *
     * @param \DateTime|null $policy_timestamp policy_timestamp
     *
     * @return self
     */
    public function setPolicyTimestamp($policy_timestamp)
    {
        $this->container['policy_timestamp'] = $policy_timestamp;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

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


