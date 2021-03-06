<?php
/**
 * FwmgrApiPolicyContainerUpsertRequestV1
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
 * FwmgrApiPolicyContainerUpsertRequestV1 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FwmgrApiPolicyContainerUpsertRequestV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fwmgr.api.PolicyContainerUpsertRequestV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_inbound' => 'string',
        'default_outbound' => 'string',
        'enforce' => 'bool',
        'is_default_policy' => 'bool',
        'platform_id' => 'string',
        'policy_id' => 'string',
        'rule_group_ids' => 'string[]',
        'test_mode' => 'bool',
        'tracking' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_inbound' => null,
        'default_outbound' => null,
        'enforce' => null,
        'is_default_policy' => null,
        'platform_id' => null,
        'policy_id' => null,
        'rule_group_ids' => null,
        'test_mode' => null,
        'tracking' => null
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
        'default_inbound' => 'default_inbound',
        'default_outbound' => 'default_outbound',
        'enforce' => 'enforce',
        'is_default_policy' => 'is_default_policy',
        'platform_id' => 'platform_id',
        'policy_id' => 'policy_id',
        'rule_group_ids' => 'rule_group_ids',
        'test_mode' => 'test_mode',
        'tracking' => 'tracking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_inbound' => 'setDefaultInbound',
        'default_outbound' => 'setDefaultOutbound',
        'enforce' => 'setEnforce',
        'is_default_policy' => 'setIsDefaultPolicy',
        'platform_id' => 'setPlatformId',
        'policy_id' => 'setPolicyId',
        'rule_group_ids' => 'setRuleGroupIds',
        'test_mode' => 'setTestMode',
        'tracking' => 'setTracking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_inbound' => 'getDefaultInbound',
        'default_outbound' => 'getDefaultOutbound',
        'enforce' => 'getEnforce',
        'is_default_policy' => 'getIsDefaultPolicy',
        'platform_id' => 'getPlatformId',
        'policy_id' => 'getPolicyId',
        'rule_group_ids' => 'getRuleGroupIds',
        'test_mode' => 'getTestMode',
        'tracking' => 'getTracking'
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
        $this->container['default_inbound'] = $data['default_inbound'] ?? null;
        $this->container['default_outbound'] = $data['default_outbound'] ?? null;
        $this->container['enforce'] = $data['enforce'] ?? null;
        $this->container['is_default_policy'] = $data['is_default_policy'] ?? null;
        $this->container['platform_id'] = $data['platform_id'] ?? null;
        $this->container['policy_id'] = $data['policy_id'] ?? null;
        $this->container['rule_group_ids'] = $data['rule_group_ids'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? null;
        $this->container['tracking'] = $data['tracking'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['default_inbound'] === null) {
            $invalidProperties[] = "'default_inbound' can't be null";
        }
        if ($this->container['default_outbound'] === null) {
            $invalidProperties[] = "'default_outbound' can't be null";
        }
        if ($this->container['enforce'] === null) {
            $invalidProperties[] = "'enforce' can't be null";
        }
        if ($this->container['platform_id'] === null) {
            $invalidProperties[] = "'platform_id' can't be null";
        }
        if ($this->container['policy_id'] === null) {
            $invalidProperties[] = "'policy_id' can't be null";
        }
        if ($this->container['rule_group_ids'] === null) {
            $invalidProperties[] = "'rule_group_ids' can't be null";
        }
        if ($this->container['test_mode'] === null) {
            $invalidProperties[] = "'test_mode' can't be null";
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
     * Gets default_inbound
     *
     * @return string
     */
    public function getDefaultInbound()
    {
        return $this->container['default_inbound'];
    }

    /**
     * Sets default_inbound
     *
     * @param string $default_inbound default_inbound
     *
     * @return self
     */
    public function setDefaultInbound($default_inbound)
    {
        $this->container['default_inbound'] = $default_inbound;

        return $this;
    }

    /**
     * Gets default_outbound
     *
     * @return string
     */
    public function getDefaultOutbound()
    {
        return $this->container['default_outbound'];
    }

    /**
     * Sets default_outbound
     *
     * @param string $default_outbound default_outbound
     *
     * @return self
     */
    public function setDefaultOutbound($default_outbound)
    {
        $this->container['default_outbound'] = $default_outbound;

        return $this;
    }

    /**
     * Gets enforce
     *
     * @return bool
     */
    public function getEnforce()
    {
        return $this->container['enforce'];
    }

    /**
     * Sets enforce
     *
     * @param bool $enforce enforce
     *
     * @return self
     */
    public function setEnforce($enforce)
    {
        $this->container['enforce'] = $enforce;

        return $this;
    }

    /**
     * Gets is_default_policy
     *
     * @return bool|null
     */
    public function getIsDefaultPolicy()
    {
        return $this->container['is_default_policy'];
    }

    /**
     * Sets is_default_policy
     *
     * @param bool|null $is_default_policy is_default_policy
     *
     * @return self
     */
    public function setIsDefaultPolicy($is_default_policy)
    {
        $this->container['is_default_policy'] = $is_default_policy;

        return $this;
    }

    /**
     * Gets platform_id
     *
     * @return string
     */
    public function getPlatformId()
    {
        return $this->container['platform_id'];
    }

    /**
     * Sets platform_id
     *
     * @param string $platform_id platform_id
     *
     * @return self
     */
    public function setPlatformId($platform_id)
    {
        $this->container['platform_id'] = $platform_id;

        return $this;
    }

    /**
     * Gets policy_id
     *
     * @return string
     */
    public function getPolicyId()
    {
        return $this->container['policy_id'];
    }

    /**
     * Sets policy_id
     *
     * @param string $policy_id policy_id
     *
     * @return self
     */
    public function setPolicyId($policy_id)
    {
        $this->container['policy_id'] = $policy_id;

        return $this;
    }

    /**
     * Gets rule_group_ids
     *
     * @return string[]
     */
    public function getRuleGroupIds()
    {
        return $this->container['rule_group_ids'];
    }

    /**
     * Sets rule_group_ids
     *
     * @param string[] $rule_group_ids rule_group_ids
     *
     * @return self
     */
    public function setRuleGroupIds($rule_group_ids)
    {
        $this->container['rule_group_ids'] = $rule_group_ids;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool $test_mode test_mode
     *
     * @return self
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return string|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param string|null $tracking tracking
     *
     * @return self
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

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


