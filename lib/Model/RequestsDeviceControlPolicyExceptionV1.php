<?php
/**
 * RequestsDeviceControlPolicyExceptionV1
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
 * RequestsDeviceControlPolicyExceptionV1 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RequestsDeviceControlPolicyExceptionV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'requests.DeviceControlPolicyExceptionV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action' => 'string',
        'class' => 'string',
        'combined_id' => 'string',
        'id' => 'string',
        'match_method' => 'string',
        'product_id' => 'string',
        'product_id_decimal' => 'string',
        'product_name' => 'string',
        'serial_number' => 'string',
        'vendor_id' => 'string',
        'vendor_id_decimal' => 'string',
        'vendor_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action' => null,
        'class' => null,
        'combined_id' => null,
        'id' => null,
        'match_method' => null,
        'product_id' => null,
        'product_id_decimal' => null,
        'product_name' => null,
        'serial_number' => null,
        'vendor_id' => null,
        'vendor_id_decimal' => null,
        'vendor_name' => null
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
        'action' => 'action',
        'class' => 'class',
        'combined_id' => 'combined_id',
        'id' => 'id',
        'match_method' => 'match_method',
        'product_id' => 'product_id',
        'product_id_decimal' => 'product_id_decimal',
        'product_name' => 'product_name',
        'serial_number' => 'serial_number',
        'vendor_id' => 'vendor_id',
        'vendor_id_decimal' => 'vendor_id_decimal',
        'vendor_name' => 'vendor_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'class' => 'setClass',
        'combined_id' => 'setCombinedId',
        'id' => 'setId',
        'match_method' => 'setMatchMethod',
        'product_id' => 'setProductId',
        'product_id_decimal' => 'setProductIdDecimal',
        'product_name' => 'setProductName',
        'serial_number' => 'setSerialNumber',
        'vendor_id' => 'setVendorId',
        'vendor_id_decimal' => 'setVendorIdDecimal',
        'vendor_name' => 'setVendorName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'class' => 'getClass',
        'combined_id' => 'getCombinedId',
        'id' => 'getId',
        'match_method' => 'getMatchMethod',
        'product_id' => 'getProductId',
        'product_id_decimal' => 'getProductIdDecimal',
        'product_name' => 'getProductName',
        'serial_number' => 'getSerialNumber',
        'vendor_id' => 'getVendorId',
        'vendor_id_decimal' => 'getVendorIdDecimal',
        'vendor_name' => 'getVendorName'
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['class'] = $data['class'] ?? null;
        $this->container['combined_id'] = $data['combined_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['match_method'] = $data['match_method'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product_id_decimal'] = $data['product_id_decimal'] ?? null;
        $this->container['product_name'] = $data['product_name'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['vendor_id'] = $data['vendor_id'] ?? null;
        $this->container['vendor_id_decimal'] = $data['vendor_id_decimal'] ?? null;
        $this->container['vendor_name'] = $data['vendor_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['class'] === null) {
            $invalidProperties[] = "'class' can't be null";
        }
        if ($this->container['combined_id'] === null) {
            $invalidProperties[] = "'combined_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['match_method'] === null) {
            $invalidProperties[] = "'match_method' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_id_decimal'] === null) {
            $invalidProperties[] = "'product_id_decimal' can't be null";
        }
        if ($this->container['product_name'] === null) {
            $invalidProperties[] = "'product_name' can't be null";
        }
        if ($this->container['serial_number'] === null) {
            $invalidProperties[] = "'serial_number' can't be null";
        }
        if ($this->container['vendor_id'] === null) {
            $invalidProperties[] = "'vendor_id' can't be null";
        }
        if ($this->container['vendor_id_decimal'] === null) {
            $invalidProperties[] = "'vendor_id_decimal' can't be null";
        }
        if ($this->container['vendor_name'] === null) {
            $invalidProperties[] = "'vendor_name' can't be null";
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
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class USB Class ID to apply the exception. If empty it applies to all classes
     *
     * @return self
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets combined_id
     *
     * @return string
     */
    public function getCombinedId()
    {
        return $this->container['combined_id'];
    }

    /**
     * Sets combined_id
     *
     * @param string $combined_id combined_id
     *
     * @return self
     */
    public function setCombinedId($combined_id)
    {
        $this->container['combined_id'] = $combined_id;

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
     * @param string $id Unique identifier for an exception
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets match_method
     *
     * @return string
     */
    public function getMatchMethod()
    {
        return $this->container['match_method'];
    }

    /**
     * Sets match_method
     *
     * @param string $match_method match_method
     *
     * @return self
     */
    public function setMatchMethod($match_method)
    {
        $this->container['match_method'] = $match_method;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_id_decimal
     *
     * @return string
     */
    public function getProductIdDecimal()
    {
        return $this->container['product_id_decimal'];
    }

    /**
     * Sets product_id_decimal
     *
     * @param string $product_id_decimal product_id_decimal
     *
     * @return self
     */
    public function setProductIdDecimal($product_id_decimal)
    {
        $this->container['product_id_decimal'] = $product_id_decimal;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return string
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param string $vendor_id Hexadecimal VendorID used to apply the exception
     *
     * @return self
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets vendor_id_decimal
     *
     * @return string
     */
    public function getVendorIdDecimal()
    {
        return $this->container['vendor_id_decimal'];
    }

    /**
     * Sets vendor_id_decimal
     *
     * @param string $vendor_id_decimal Hexadecimal VendorID used to apply the exception
     *
     * @return self
     */
    public function setVendorIdDecimal($vendor_id_decimal)
    {
        $this->container['vendor_id_decimal'] = $vendor_id_decimal;

        return $this;
    }

    /**
     * Gets vendor_name
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->container['vendor_name'];
    }

    /**
     * Sets vendor_name
     *
     * @param string $vendor_name Vendor Name, optional
     *
     * @return self
     */
    public function setVendorName($vendor_name)
    {
        $this->container['vendor_name'] = $vendor_name;

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


