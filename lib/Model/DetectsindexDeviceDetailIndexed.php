<?php
/**
 * DetectsindexDeviceDetailIndexed
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
 * DetectsindexDeviceDetailIndexed Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DetectsindexDeviceDetailIndexed implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'detectsindex.DeviceDetailIndexed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agent_load_flags' => 'string',
        'agent_local_time' => 'string',
        'agent_version' => 'string',
        'bios_manufacturer' => 'string',
        'bios_version' => 'string',
        'cid' => 'string',
        'config_id_base' => 'string',
        'config_id_build' => 'string',
        'config_id_platform' => 'string',
        'device_id' => 'string',
        'external_ip' => 'string',
        'first_login_timestamp' => 'string',
        'first_login_user' => 'string',
        'first_seen' => 'string',
        'hostname' => 'string',
        'last_login_timestamp' => 'string',
        'last_login_user' => 'string',
        'last_seen' => 'string',
        'local_ip' => 'string',
        'mac_address' => 'string',
        'machine_domain' => 'string',
        'major_version' => 'string',
        'minor_version' => 'string',
        'modified_timestamp' => 'string',
        'notes' => 'string[]',
        'os_version' => 'string',
        'ou' => 'string[]',
        'platform_id' => 'string',
        'platform_name' => 'string',
        'product_type' => 'string',
        'product_type_desc' => 'string',
        'release_group' => 'string',
        'site_name' => 'string',
        'status' => 'string',
        'system_manufacturer' => 'string',
        'system_product_name' => 'string',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agent_load_flags' => null,
        'agent_local_time' => null,
        'agent_version' => null,
        'bios_manufacturer' => null,
        'bios_version' => null,
        'cid' => null,
        'config_id_base' => null,
        'config_id_build' => null,
        'config_id_platform' => null,
        'device_id' => null,
        'external_ip' => null,
        'first_login_timestamp' => null,
        'first_login_user' => null,
        'first_seen' => null,
        'hostname' => null,
        'last_login_timestamp' => null,
        'last_login_user' => null,
        'last_seen' => null,
        'local_ip' => null,
        'mac_address' => null,
        'machine_domain' => null,
        'major_version' => null,
        'minor_version' => null,
        'modified_timestamp' => null,
        'notes' => null,
        'os_version' => null,
        'ou' => null,
        'platform_id' => null,
        'platform_name' => null,
        'product_type' => null,
        'product_type_desc' => null,
        'release_group' => null,
        'site_name' => null,
        'status' => null,
        'system_manufacturer' => null,
        'system_product_name' => null,
        'tags' => null
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
        'agent_load_flags' => 'agent_load_flags',
        'agent_local_time' => 'agent_local_time',
        'agent_version' => 'agent_version',
        'bios_manufacturer' => 'bios_manufacturer',
        'bios_version' => 'bios_version',
        'cid' => 'cid',
        'config_id_base' => 'config_id_base',
        'config_id_build' => 'config_id_build',
        'config_id_platform' => 'config_id_platform',
        'device_id' => 'device_id',
        'external_ip' => 'external_ip',
        'first_login_timestamp' => 'first_login_timestamp',
        'first_login_user' => 'first_login_user',
        'first_seen' => 'first_seen',
        'hostname' => 'hostname',
        'last_login_timestamp' => 'last_login_timestamp',
        'last_login_user' => 'last_login_user',
        'last_seen' => 'last_seen',
        'local_ip' => 'local_ip',
        'mac_address' => 'mac_address',
        'machine_domain' => 'machine_domain',
        'major_version' => 'major_version',
        'minor_version' => 'minor_version',
        'modified_timestamp' => 'modified_timestamp',
        'notes' => 'notes',
        'os_version' => 'os_version',
        'ou' => 'ou',
        'platform_id' => 'platform_id',
        'platform_name' => 'platform_name',
        'product_type' => 'product_type',
        'product_type_desc' => 'product_type_desc',
        'release_group' => 'release_group',
        'site_name' => 'site_name',
        'status' => 'status',
        'system_manufacturer' => 'system_manufacturer',
        'system_product_name' => 'system_product_name',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent_load_flags' => 'setAgentLoadFlags',
        'agent_local_time' => 'setAgentLocalTime',
        'agent_version' => 'setAgentVersion',
        'bios_manufacturer' => 'setBiosManufacturer',
        'bios_version' => 'setBiosVersion',
        'cid' => 'setCid',
        'config_id_base' => 'setConfigIdBase',
        'config_id_build' => 'setConfigIdBuild',
        'config_id_platform' => 'setConfigIdPlatform',
        'device_id' => 'setDeviceId',
        'external_ip' => 'setExternalIp',
        'first_login_timestamp' => 'setFirstLoginTimestamp',
        'first_login_user' => 'setFirstLoginUser',
        'first_seen' => 'setFirstSeen',
        'hostname' => 'setHostname',
        'last_login_timestamp' => 'setLastLoginTimestamp',
        'last_login_user' => 'setLastLoginUser',
        'last_seen' => 'setLastSeen',
        'local_ip' => 'setLocalIp',
        'mac_address' => 'setMacAddress',
        'machine_domain' => 'setMachineDomain',
        'major_version' => 'setMajorVersion',
        'minor_version' => 'setMinorVersion',
        'modified_timestamp' => 'setModifiedTimestamp',
        'notes' => 'setNotes',
        'os_version' => 'setOsVersion',
        'ou' => 'setOu',
        'platform_id' => 'setPlatformId',
        'platform_name' => 'setPlatformName',
        'product_type' => 'setProductType',
        'product_type_desc' => 'setProductTypeDesc',
        'release_group' => 'setReleaseGroup',
        'site_name' => 'setSiteName',
        'status' => 'setStatus',
        'system_manufacturer' => 'setSystemManufacturer',
        'system_product_name' => 'setSystemProductName',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent_load_flags' => 'getAgentLoadFlags',
        'agent_local_time' => 'getAgentLocalTime',
        'agent_version' => 'getAgentVersion',
        'bios_manufacturer' => 'getBiosManufacturer',
        'bios_version' => 'getBiosVersion',
        'cid' => 'getCid',
        'config_id_base' => 'getConfigIdBase',
        'config_id_build' => 'getConfigIdBuild',
        'config_id_platform' => 'getConfigIdPlatform',
        'device_id' => 'getDeviceId',
        'external_ip' => 'getExternalIp',
        'first_login_timestamp' => 'getFirstLoginTimestamp',
        'first_login_user' => 'getFirstLoginUser',
        'first_seen' => 'getFirstSeen',
        'hostname' => 'getHostname',
        'last_login_timestamp' => 'getLastLoginTimestamp',
        'last_login_user' => 'getLastLoginUser',
        'last_seen' => 'getLastSeen',
        'local_ip' => 'getLocalIp',
        'mac_address' => 'getMacAddress',
        'machine_domain' => 'getMachineDomain',
        'major_version' => 'getMajorVersion',
        'minor_version' => 'getMinorVersion',
        'modified_timestamp' => 'getModifiedTimestamp',
        'notes' => 'getNotes',
        'os_version' => 'getOsVersion',
        'ou' => 'getOu',
        'platform_id' => 'getPlatformId',
        'platform_name' => 'getPlatformName',
        'product_type' => 'getProductType',
        'product_type_desc' => 'getProductTypeDesc',
        'release_group' => 'getReleaseGroup',
        'site_name' => 'getSiteName',
        'status' => 'getStatus',
        'system_manufacturer' => 'getSystemManufacturer',
        'system_product_name' => 'getSystemProductName',
        'tags' => 'getTags'
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
        $this->container['agent_load_flags'] = $data['agent_load_flags'] ?? null;
        $this->container['agent_local_time'] = $data['agent_local_time'] ?? null;
        $this->container['agent_version'] = $data['agent_version'] ?? null;
        $this->container['bios_manufacturer'] = $data['bios_manufacturer'] ?? null;
        $this->container['bios_version'] = $data['bios_version'] ?? null;
        $this->container['cid'] = $data['cid'] ?? null;
        $this->container['config_id_base'] = $data['config_id_base'] ?? null;
        $this->container['config_id_build'] = $data['config_id_build'] ?? null;
        $this->container['config_id_platform'] = $data['config_id_platform'] ?? null;
        $this->container['device_id'] = $data['device_id'] ?? null;
        $this->container['external_ip'] = $data['external_ip'] ?? null;
        $this->container['first_login_timestamp'] = $data['first_login_timestamp'] ?? null;
        $this->container['first_login_user'] = $data['first_login_user'] ?? null;
        $this->container['first_seen'] = $data['first_seen'] ?? null;
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['last_login_timestamp'] = $data['last_login_timestamp'] ?? null;
        $this->container['last_login_user'] = $data['last_login_user'] ?? null;
        $this->container['last_seen'] = $data['last_seen'] ?? null;
        $this->container['local_ip'] = $data['local_ip'] ?? null;
        $this->container['mac_address'] = $data['mac_address'] ?? null;
        $this->container['machine_domain'] = $data['machine_domain'] ?? null;
        $this->container['major_version'] = $data['major_version'] ?? null;
        $this->container['minor_version'] = $data['minor_version'] ?? null;
        $this->container['modified_timestamp'] = $data['modified_timestamp'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['os_version'] = $data['os_version'] ?? null;
        $this->container['ou'] = $data['ou'] ?? null;
        $this->container['platform_id'] = $data['platform_id'] ?? null;
        $this->container['platform_name'] = $data['platform_name'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['product_type_desc'] = $data['product_type_desc'] ?? null;
        $this->container['release_group'] = $data['release_group'] ?? null;
        $this->container['site_name'] = $data['site_name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['system_manufacturer'] = $data['system_manufacturer'] ?? null;
        $this->container['system_product_name'] = $data['system_product_name'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
        if ($this->container['device_id'] === null) {
            $invalidProperties[] = "'device_id' can't be null";
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
     * Gets agent_load_flags
     *
     * @return string|null
     */
    public function getAgentLoadFlags()
    {
        return $this->container['agent_load_flags'];
    }

    /**
     * Sets agent_load_flags
     *
     * @param string|null $agent_load_flags agent_load_flags
     *
     * @return self
     */
    public function setAgentLoadFlags($agent_load_flags)
    {
        $this->container['agent_load_flags'] = $agent_load_flags;

        return $this;
    }

    /**
     * Gets agent_local_time
     *
     * @return string|null
     */
    public function getAgentLocalTime()
    {
        return $this->container['agent_local_time'];
    }

    /**
     * Sets agent_local_time
     *
     * @param string|null $agent_local_time agent_local_time
     *
     * @return self
     */
    public function setAgentLocalTime($agent_local_time)
    {
        $this->container['agent_local_time'] = $agent_local_time;

        return $this;
    }

    /**
     * Gets agent_version
     *
     * @return string|null
     */
    public function getAgentVersion()
    {
        return $this->container['agent_version'];
    }

    /**
     * Sets agent_version
     *
     * @param string|null $agent_version agent_version
     *
     * @return self
     */
    public function setAgentVersion($agent_version)
    {
        $this->container['agent_version'] = $agent_version;

        return $this;
    }

    /**
     * Gets bios_manufacturer
     *
     * @return string|null
     */
    public function getBiosManufacturer()
    {
        return $this->container['bios_manufacturer'];
    }

    /**
     * Sets bios_manufacturer
     *
     * @param string|null $bios_manufacturer bios_manufacturer
     *
     * @return self
     */
    public function setBiosManufacturer($bios_manufacturer)
    {
        $this->container['bios_manufacturer'] = $bios_manufacturer;

        return $this;
    }

    /**
     * Gets bios_version
     *
     * @return string|null
     */
    public function getBiosVersion()
    {
        return $this->container['bios_version'];
    }

    /**
     * Sets bios_version
     *
     * @param string|null $bios_version bios_version
     *
     * @return self
     */
    public function setBiosVersion($bios_version)
    {
        $this->container['bios_version'] = $bios_version;

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
     * Gets config_id_base
     *
     * @return string|null
     */
    public function getConfigIdBase()
    {
        return $this->container['config_id_base'];
    }

    /**
     * Sets config_id_base
     *
     * @param string|null $config_id_base config_id_base
     *
     * @return self
     */
    public function setConfigIdBase($config_id_base)
    {
        $this->container['config_id_base'] = $config_id_base;

        return $this;
    }

    /**
     * Gets config_id_build
     *
     * @return string|null
     */
    public function getConfigIdBuild()
    {
        return $this->container['config_id_build'];
    }

    /**
     * Sets config_id_build
     *
     * @param string|null $config_id_build config_id_build
     *
     * @return self
     */
    public function setConfigIdBuild($config_id_build)
    {
        $this->container['config_id_build'] = $config_id_build;

        return $this;
    }

    /**
     * Gets config_id_platform
     *
     * @return string|null
     */
    public function getConfigIdPlatform()
    {
        return $this->container['config_id_platform'];
    }

    /**
     * Sets config_id_platform
     *
     * @param string|null $config_id_platform config_id_platform
     *
     * @return self
     */
    public function setConfigIdPlatform($config_id_platform)
    {
        $this->container['config_id_platform'] = $config_id_platform;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string $device_id device_id
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets external_ip
     *
     * @return string|null
     */
    public function getExternalIp()
    {
        return $this->container['external_ip'];
    }

    /**
     * Sets external_ip
     *
     * @param string|null $external_ip external_ip
     *
     * @return self
     */
    public function setExternalIp($external_ip)
    {
        $this->container['external_ip'] = $external_ip;

        return $this;
    }

    /**
     * Gets first_login_timestamp
     *
     * @return string|null
     */
    public function getFirstLoginTimestamp()
    {
        return $this->container['first_login_timestamp'];
    }

    /**
     * Sets first_login_timestamp
     *
     * @param string|null $first_login_timestamp first_login_timestamp
     *
     * @return self
     */
    public function setFirstLoginTimestamp($first_login_timestamp)
    {
        $this->container['first_login_timestamp'] = $first_login_timestamp;

        return $this;
    }

    /**
     * Gets first_login_user
     *
     * @return string|null
     */
    public function getFirstLoginUser()
    {
        return $this->container['first_login_user'];
    }

    /**
     * Sets first_login_user
     *
     * @param string|null $first_login_user first_login_user
     *
     * @return self
     */
    public function setFirstLoginUser($first_login_user)
    {
        $this->container['first_login_user'] = $first_login_user;

        return $this;
    }

    /**
     * Gets first_seen
     *
     * @return string|null
     */
    public function getFirstSeen()
    {
        return $this->container['first_seen'];
    }

    /**
     * Sets first_seen
     *
     * @param string|null $first_seen first_seen
     *
     * @return self
     */
    public function setFirstSeen($first_seen)
    {
        $this->container['first_seen'] = $first_seen;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets last_login_timestamp
     *
     * @return string|null
     */
    public function getLastLoginTimestamp()
    {
        return $this->container['last_login_timestamp'];
    }

    /**
     * Sets last_login_timestamp
     *
     * @param string|null $last_login_timestamp last_login_timestamp
     *
     * @return self
     */
    public function setLastLoginTimestamp($last_login_timestamp)
    {
        $this->container['last_login_timestamp'] = $last_login_timestamp;

        return $this;
    }

    /**
     * Gets last_login_user
     *
     * @return string|null
     */
    public function getLastLoginUser()
    {
        return $this->container['last_login_user'];
    }

    /**
     * Sets last_login_user
     *
     * @param string|null $last_login_user last_login_user
     *
     * @return self
     */
    public function setLastLoginUser($last_login_user)
    {
        $this->container['last_login_user'] = $last_login_user;

        return $this;
    }

    /**
     * Gets last_seen
     *
     * @return string|null
     */
    public function getLastSeen()
    {
        return $this->container['last_seen'];
    }

    /**
     * Sets last_seen
     *
     * @param string|null $last_seen last_seen
     *
     * @return self
     */
    public function setLastSeen($last_seen)
    {
        $this->container['last_seen'] = $last_seen;

        return $this;
    }

    /**
     * Gets local_ip
     *
     * @return string|null
     */
    public function getLocalIp()
    {
        return $this->container['local_ip'];
    }

    /**
     * Sets local_ip
     *
     * @param string|null $local_ip local_ip
     *
     * @return self
     */
    public function setLocalIp($local_ip)
    {
        $this->container['local_ip'] = $local_ip;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string|null $mac_address mac_address
     *
     * @return self
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets machine_domain
     *
     * @return string|null
     */
    public function getMachineDomain()
    {
        return $this->container['machine_domain'];
    }

    /**
     * Sets machine_domain
     *
     * @param string|null $machine_domain machine_domain
     *
     * @return self
     */
    public function setMachineDomain($machine_domain)
    {
        $this->container['machine_domain'] = $machine_domain;

        return $this;
    }

    /**
     * Gets major_version
     *
     * @return string|null
     */
    public function getMajorVersion()
    {
        return $this->container['major_version'];
    }

    /**
     * Sets major_version
     *
     * @param string|null $major_version major_version
     *
     * @return self
     */
    public function setMajorVersion($major_version)
    {
        $this->container['major_version'] = $major_version;

        return $this;
    }

    /**
     * Gets minor_version
     *
     * @return string|null
     */
    public function getMinorVersion()
    {
        return $this->container['minor_version'];
    }

    /**
     * Sets minor_version
     *
     * @param string|null $minor_version minor_version
     *
     * @return self
     */
    public function setMinorVersion($minor_version)
    {
        $this->container['minor_version'] = $minor_version;

        return $this;
    }

    /**
     * Gets modified_timestamp
     *
     * @return string|null
     */
    public function getModifiedTimestamp()
    {
        return $this->container['modified_timestamp'];
    }

    /**
     * Sets modified_timestamp
     *
     * @param string|null $modified_timestamp modified_timestamp
     *
     * @return self
     */
    public function setModifiedTimestamp($modified_timestamp)
    {
        $this->container['modified_timestamp'] = $modified_timestamp;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string[]|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string[]|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets os_version
     *
     * @return string|null
     */
    public function getOsVersion()
    {
        return $this->container['os_version'];
    }

    /**
     * Sets os_version
     *
     * @param string|null $os_version os_version
     *
     * @return self
     */
    public function setOsVersion($os_version)
    {
        $this->container['os_version'] = $os_version;

        return $this;
    }

    /**
     * Gets ou
     *
     * @return string[]|null
     */
    public function getOu()
    {
        return $this->container['ou'];
    }

    /**
     * Sets ou
     *
     * @param string[]|null $ou ou
     *
     * @return self
     */
    public function setOu($ou)
    {
        $this->container['ou'] = $ou;

        return $this;
    }

    /**
     * Gets platform_id
     *
     * @return string|null
     */
    public function getPlatformId()
    {
        return $this->container['platform_id'];
    }

    /**
     * Sets platform_id
     *
     * @param string|null $platform_id platform_id
     *
     * @return self
     */
    public function setPlatformId($platform_id)
    {
        $this->container['platform_id'] = $platform_id;

        return $this;
    }

    /**
     * Gets platform_name
     *
     * @return string|null
     */
    public function getPlatformName()
    {
        return $this->container['platform_name'];
    }

    /**
     * Sets platform_name
     *
     * @param string|null $platform_name platform_name
     *
     * @return self
     */
    public function setPlatformName($platform_name)
    {
        $this->container['platform_name'] = $platform_name;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string|null $product_type product_type
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_type_desc
     *
     * @return string|null
     */
    public function getProductTypeDesc()
    {
        return $this->container['product_type_desc'];
    }

    /**
     * Sets product_type_desc
     *
     * @param string|null $product_type_desc product_type_desc
     *
     * @return self
     */
    public function setProductTypeDesc($product_type_desc)
    {
        $this->container['product_type_desc'] = $product_type_desc;

        return $this;
    }

    /**
     * Gets release_group
     *
     * @return string|null
     */
    public function getReleaseGroup()
    {
        return $this->container['release_group'];
    }

    /**
     * Sets release_group
     *
     * @param string|null $release_group release_group
     *
     * @return self
     */
    public function setReleaseGroup($release_group)
    {
        $this->container['release_group'] = $release_group;

        return $this;
    }

    /**
     * Gets site_name
     *
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->container['site_name'];
    }

    /**
     * Sets site_name
     *
     * @param string|null $site_name site_name
     *
     * @return self
     */
    public function setSiteName($site_name)
    {
        $this->container['site_name'] = $site_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets system_manufacturer
     *
     * @return string|null
     */
    public function getSystemManufacturer()
    {
        return $this->container['system_manufacturer'];
    }

    /**
     * Sets system_manufacturer
     *
     * @param string|null $system_manufacturer system_manufacturer
     *
     * @return self
     */
    public function setSystemManufacturer($system_manufacturer)
    {
        $this->container['system_manufacturer'] = $system_manufacturer;

        return $this;
    }

    /**
     * Gets system_product_name
     *
     * @return string|null
     */
    public function getSystemProductName()
    {
        return $this->container['system_product_name'];
    }

    /**
     * Sets system_product_name
     *
     * @param string|null $system_product_name system_product_name
     *
     * @return self
     */
    public function setSystemProductName($system_product_name)
    {
        $this->container['system_product_name'] = $system_product_name;

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


