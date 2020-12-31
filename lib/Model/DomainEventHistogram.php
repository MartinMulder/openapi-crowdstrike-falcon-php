<?php
/**
 * DomainEventHistogram
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
 * DomainEventHistogram Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DomainEventHistogram implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domain.EventHistogram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count' => 'int',
        'has_detect' => 'bool',
        'has_overwatch' => 'bool',
        'has_prevented' => 'bool',
        'timestamp_max' => 'int',
        'timestamp_min' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'has_detect' => null,
        'has_overwatch' => null,
        'has_prevented' => null,
        'timestamp_max' => 'int64',
        'timestamp_min' => 'int64'
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
        'count' => 'count',
        'has_detect' => 'has_detect',
        'has_overwatch' => 'has_overwatch',
        'has_prevented' => 'has_prevented',
        'timestamp_max' => 'timestamp_max',
        'timestamp_min' => 'timestamp_min'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'has_detect' => 'setHasDetect',
        'has_overwatch' => 'setHasOverwatch',
        'has_prevented' => 'setHasPrevented',
        'timestamp_max' => 'setTimestampMax',
        'timestamp_min' => 'setTimestampMin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'has_detect' => 'getHasDetect',
        'has_overwatch' => 'getHasOverwatch',
        'has_prevented' => 'getHasPrevented',
        'timestamp_max' => 'getTimestampMax',
        'timestamp_min' => 'getTimestampMin'
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
        $this->container['count'] = $data['count'] ?? null;
        $this->container['has_detect'] = $data['has_detect'] ?? null;
        $this->container['has_overwatch'] = $data['has_overwatch'] ?? null;
        $this->container['has_prevented'] = $data['has_prevented'] ?? null;
        $this->container['timestamp_max'] = $data['timestamp_max'] ?? null;
        $this->container['timestamp_min'] = $data['timestamp_min'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['has_detect'] === null) {
            $invalidProperties[] = "'has_detect' can't be null";
        }
        if ($this->container['has_overwatch'] === null) {
            $invalidProperties[] = "'has_overwatch' can't be null";
        }
        if ($this->container['has_prevented'] === null) {
            $invalidProperties[] = "'has_prevented' can't be null";
        }
        if ($this->container['timestamp_max'] === null) {
            $invalidProperties[] = "'timestamp_max' can't be null";
        }
        if ($this->container['timestamp_min'] === null) {
            $invalidProperties[] = "'timestamp_min' can't be null";
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets has_detect
     *
     * @return bool
     */
    public function getHasDetect()
    {
        return $this->container['has_detect'];
    }

    /**
     * Sets has_detect
     *
     * @param bool $has_detect has_detect
     *
     * @return self
     */
    public function setHasDetect($has_detect)
    {
        $this->container['has_detect'] = $has_detect;

        return $this;
    }

    /**
     * Gets has_overwatch
     *
     * @return bool
     */
    public function getHasOverwatch()
    {
        return $this->container['has_overwatch'];
    }

    /**
     * Sets has_overwatch
     *
     * @param bool $has_overwatch has_overwatch
     *
     * @return self
     */
    public function setHasOverwatch($has_overwatch)
    {
        $this->container['has_overwatch'] = $has_overwatch;

        return $this;
    }

    /**
     * Gets has_prevented
     *
     * @return bool
     */
    public function getHasPrevented()
    {
        return $this->container['has_prevented'];
    }

    /**
     * Sets has_prevented
     *
     * @param bool $has_prevented has_prevented
     *
     * @return self
     */
    public function setHasPrevented($has_prevented)
    {
        $this->container['has_prevented'] = $has_prevented;

        return $this;
    }

    /**
     * Gets timestamp_max
     *
     * @return int
     */
    public function getTimestampMax()
    {
        return $this->container['timestamp_max'];
    }

    /**
     * Sets timestamp_max
     *
     * @param int $timestamp_max timestamp_max
     *
     * @return self
     */
    public function setTimestampMax($timestamp_max)
    {
        $this->container['timestamp_max'] = $timestamp_max;

        return $this;
    }

    /**
     * Gets timestamp_min
     *
     * @return int
     */
    public function getTimestampMin()
    {
        return $this->container['timestamp_min'];
    }

    /**
     * Sets timestamp_min
     *
     * @param int $timestamp_min timestamp_min
     *
     * @return self
     */
    public function setTimestampMin($timestamp_min)
    {
        $this->container['timestamp_min'] = $timestamp_min;

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

