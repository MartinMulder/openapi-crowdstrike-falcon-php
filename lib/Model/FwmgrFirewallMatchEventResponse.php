<?php
/**
 * FwmgrFirewallMatchEventResponse
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
 * FwmgrFirewallMatchEventResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FwmgrFirewallMatchEventResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fwmgr.firewall.MatchEventResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aid' => 'string',
        'cid' => 'string',
        'command_line' => 'string',
        'connection_direction' => 'string',
        'event_type' => 'string',
        'flags' => '\OpenAPI\Client\Model\FwmgrFirewallFlags',
        'hidden' => 'bool',
        'host_name' => 'string',
        'icmp_code' => 'string',
        'icmp_type' => 'string',
        'id' => 'string',
        'image_file_name' => 'string',
        'ipv' => 'string',
        'local_address' => 'string',
        'local_port' => 'string',
        'match_count' => 'string',
        'match_count_since_last_event' => 'string',
        'network_profile' => 'string',
        'pid' => 'string',
        'policy_id' => 'string',
        'policy_name' => 'string',
        'protocol' => 'string',
        'remote_address' => 'string',
        'remote_port' => 'string',
        'rule_action' => 'string',
        'rule_description' => 'string',
        'rule_family_id' => 'string',
        'rule_group_name' => 'string',
        'rule_id' => 'string',
        'rule_name' => 'string',
        'status' => 'string',
        'timestamp' => 'string',
        'tree_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aid' => null,
        'cid' => null,
        'command_line' => null,
        'connection_direction' => null,
        'event_type' => null,
        'flags' => null,
        'hidden' => null,
        'host_name' => null,
        'icmp_code' => null,
        'icmp_type' => null,
        'id' => null,
        'image_file_name' => null,
        'ipv' => null,
        'local_address' => null,
        'local_port' => null,
        'match_count' => null,
        'match_count_since_last_event' => null,
        'network_profile' => null,
        'pid' => null,
        'policy_id' => null,
        'policy_name' => null,
        'protocol' => null,
        'remote_address' => null,
        'remote_port' => null,
        'rule_action' => null,
        'rule_description' => null,
        'rule_family_id' => null,
        'rule_group_name' => null,
        'rule_id' => null,
        'rule_name' => null,
        'status' => null,
        'timestamp' => null,
        'tree_id' => null
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
        'aid' => 'aid',
        'cid' => 'cid',
        'command_line' => 'command_line',
        'connection_direction' => 'connection_direction',
        'event_type' => 'event_type',
        'flags' => 'flags',
        'hidden' => 'hidden',
        'host_name' => 'host_name',
        'icmp_code' => 'icmp_code',
        'icmp_type' => 'icmp_type',
        'id' => 'id',
        'image_file_name' => 'image_file_name',
        'ipv' => 'ipv',
        'local_address' => 'local_address',
        'local_port' => 'local_port',
        'match_count' => 'match_count',
        'match_count_since_last_event' => 'match_count_since_last_event',
        'network_profile' => 'network_profile',
        'pid' => 'pid',
        'policy_id' => 'policy_id',
        'policy_name' => 'policy_name',
        'protocol' => 'protocol',
        'remote_address' => 'remote_address',
        'remote_port' => 'remote_port',
        'rule_action' => 'rule_action',
        'rule_description' => 'rule_description',
        'rule_family_id' => 'rule_family_id',
        'rule_group_name' => 'rule_group_name',
        'rule_id' => 'rule_id',
        'rule_name' => 'rule_name',
        'status' => 'status',
        'timestamp' => 'timestamp',
        'tree_id' => 'tree_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aid' => 'setAid',
        'cid' => 'setCid',
        'command_line' => 'setCommandLine',
        'connection_direction' => 'setConnectionDirection',
        'event_type' => 'setEventType',
        'flags' => 'setFlags',
        'hidden' => 'setHidden',
        'host_name' => 'setHostName',
        'icmp_code' => 'setIcmpCode',
        'icmp_type' => 'setIcmpType',
        'id' => 'setId',
        'image_file_name' => 'setImageFileName',
        'ipv' => 'setIpv',
        'local_address' => 'setLocalAddress',
        'local_port' => 'setLocalPort',
        'match_count' => 'setMatchCount',
        'match_count_since_last_event' => 'setMatchCountSinceLastEvent',
        'network_profile' => 'setNetworkProfile',
        'pid' => 'setPid',
        'policy_id' => 'setPolicyId',
        'policy_name' => 'setPolicyName',
        'protocol' => 'setProtocol',
        'remote_address' => 'setRemoteAddress',
        'remote_port' => 'setRemotePort',
        'rule_action' => 'setRuleAction',
        'rule_description' => 'setRuleDescription',
        'rule_family_id' => 'setRuleFamilyId',
        'rule_group_name' => 'setRuleGroupName',
        'rule_id' => 'setRuleId',
        'rule_name' => 'setRuleName',
        'status' => 'setStatus',
        'timestamp' => 'setTimestamp',
        'tree_id' => 'setTreeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aid' => 'getAid',
        'cid' => 'getCid',
        'command_line' => 'getCommandLine',
        'connection_direction' => 'getConnectionDirection',
        'event_type' => 'getEventType',
        'flags' => 'getFlags',
        'hidden' => 'getHidden',
        'host_name' => 'getHostName',
        'icmp_code' => 'getIcmpCode',
        'icmp_type' => 'getIcmpType',
        'id' => 'getId',
        'image_file_name' => 'getImageFileName',
        'ipv' => 'getIpv',
        'local_address' => 'getLocalAddress',
        'local_port' => 'getLocalPort',
        'match_count' => 'getMatchCount',
        'match_count_since_last_event' => 'getMatchCountSinceLastEvent',
        'network_profile' => 'getNetworkProfile',
        'pid' => 'getPid',
        'policy_id' => 'getPolicyId',
        'policy_name' => 'getPolicyName',
        'protocol' => 'getProtocol',
        'remote_address' => 'getRemoteAddress',
        'remote_port' => 'getRemotePort',
        'rule_action' => 'getRuleAction',
        'rule_description' => 'getRuleDescription',
        'rule_family_id' => 'getRuleFamilyId',
        'rule_group_name' => 'getRuleGroupName',
        'rule_id' => 'getRuleId',
        'rule_name' => 'getRuleName',
        'status' => 'getStatus',
        'timestamp' => 'getTimestamp',
        'tree_id' => 'getTreeId'
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
        $this->container['aid'] = $data['aid'] ?? null;
        $this->container['cid'] = $data['cid'] ?? null;
        $this->container['command_line'] = $data['command_line'] ?? null;
        $this->container['connection_direction'] = $data['connection_direction'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['flags'] = $data['flags'] ?? null;
        $this->container['hidden'] = $data['hidden'] ?? null;
        $this->container['host_name'] = $data['host_name'] ?? null;
        $this->container['icmp_code'] = $data['icmp_code'] ?? null;
        $this->container['icmp_type'] = $data['icmp_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['image_file_name'] = $data['image_file_name'] ?? null;
        $this->container['ipv'] = $data['ipv'] ?? null;
        $this->container['local_address'] = $data['local_address'] ?? null;
        $this->container['local_port'] = $data['local_port'] ?? null;
        $this->container['match_count'] = $data['match_count'] ?? null;
        $this->container['match_count_since_last_event'] = $data['match_count_since_last_event'] ?? null;
        $this->container['network_profile'] = $data['network_profile'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['policy_id'] = $data['policy_id'] ?? null;
        $this->container['policy_name'] = $data['policy_name'] ?? null;
        $this->container['protocol'] = $data['protocol'] ?? null;
        $this->container['remote_address'] = $data['remote_address'] ?? null;
        $this->container['remote_port'] = $data['remote_port'] ?? null;
        $this->container['rule_action'] = $data['rule_action'] ?? null;
        $this->container['rule_description'] = $data['rule_description'] ?? null;
        $this->container['rule_family_id'] = $data['rule_family_id'] ?? null;
        $this->container['rule_group_name'] = $data['rule_group_name'] ?? null;
        $this->container['rule_id'] = $data['rule_id'] ?? null;
        $this->container['rule_name'] = $data['rule_name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['tree_id'] = $data['tree_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aid'] === null) {
            $invalidProperties[] = "'aid' can't be null";
        }
        if ($this->container['cid'] === null) {
            $invalidProperties[] = "'cid' can't be null";
        }
        if ($this->container['command_line'] === null) {
            $invalidProperties[] = "'command_line' can't be null";
        }
        if ($this->container['connection_direction'] === null) {
            $invalidProperties[] = "'connection_direction' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        if ($this->container['flags'] === null) {
            $invalidProperties[] = "'flags' can't be null";
        }
        if ($this->container['hidden'] === null) {
            $invalidProperties[] = "'hidden' can't be null";
        }
        if ($this->container['host_name'] === null) {
            $invalidProperties[] = "'host_name' can't be null";
        }
        if ($this->container['icmp_code'] === null) {
            $invalidProperties[] = "'icmp_code' can't be null";
        }
        if ($this->container['icmp_type'] === null) {
            $invalidProperties[] = "'icmp_type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['image_file_name'] === null) {
            $invalidProperties[] = "'image_file_name' can't be null";
        }
        if ($this->container['ipv'] === null) {
            $invalidProperties[] = "'ipv' can't be null";
        }
        if ($this->container['local_address'] === null) {
            $invalidProperties[] = "'local_address' can't be null";
        }
        if ($this->container['local_port'] === null) {
            $invalidProperties[] = "'local_port' can't be null";
        }
        if ($this->container['match_count'] === null) {
            $invalidProperties[] = "'match_count' can't be null";
        }
        if ($this->container['match_count_since_last_event'] === null) {
            $invalidProperties[] = "'match_count_since_last_event' can't be null";
        }
        if ($this->container['network_profile'] === null) {
            $invalidProperties[] = "'network_profile' can't be null";
        }
        if ($this->container['pid'] === null) {
            $invalidProperties[] = "'pid' can't be null";
        }
        if ($this->container['policy_id'] === null) {
            $invalidProperties[] = "'policy_id' can't be null";
        }
        if ($this->container['policy_name'] === null) {
            $invalidProperties[] = "'policy_name' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['remote_address'] === null) {
            $invalidProperties[] = "'remote_address' can't be null";
        }
        if ($this->container['remote_port'] === null) {
            $invalidProperties[] = "'remote_port' can't be null";
        }
        if ($this->container['rule_action'] === null) {
            $invalidProperties[] = "'rule_action' can't be null";
        }
        if ($this->container['rule_description'] === null) {
            $invalidProperties[] = "'rule_description' can't be null";
        }
        if ($this->container['rule_family_id'] === null) {
            $invalidProperties[] = "'rule_family_id' can't be null";
        }
        if ($this->container['rule_group_name'] === null) {
            $invalidProperties[] = "'rule_group_name' can't be null";
        }
        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if ($this->container['rule_name'] === null) {
            $invalidProperties[] = "'rule_name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['tree_id'] === null) {
            $invalidProperties[] = "'tree_id' can't be null";
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
     * Gets aid
     *
     * @return string
     */
    public function getAid()
    {
        return $this->container['aid'];
    }

    /**
     * Sets aid
     *
     * @param string $aid aid
     *
     * @return self
     */
    public function setAid($aid)
    {
        $this->container['aid'] = $aid;

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
     * Gets command_line
     *
     * @return string
     */
    public function getCommandLine()
    {
        return $this->container['command_line'];
    }

    /**
     * Sets command_line
     *
     * @param string $command_line command_line
     *
     * @return self
     */
    public function setCommandLine($command_line)
    {
        $this->container['command_line'] = $command_line;

        return $this;
    }

    /**
     * Gets connection_direction
     *
     * @return string
     */
    public function getConnectionDirection()
    {
        return $this->container['connection_direction'];
    }

    /**
     * Sets connection_direction
     *
     * @param string $connection_direction connection_direction
     *
     * @return self
     */
    public function setConnectionDirection($connection_direction)
    {
        $this->container['connection_direction'] = $connection_direction;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type event_type
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return \OpenAPI\Client\Model\FwmgrFirewallFlags
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param \OpenAPI\Client\Model\FwmgrFirewallFlags $flags flags
     *
     * @return self
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden hidden
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets host_name
     *
     * @return string
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     *
     * @param string $host_name host_name
     *
     * @return self
     */
    public function setHostName($host_name)
    {
        $this->container['host_name'] = $host_name;

        return $this;
    }

    /**
     * Gets icmp_code
     *
     * @return string
     */
    public function getIcmpCode()
    {
        return $this->container['icmp_code'];
    }

    /**
     * Sets icmp_code
     *
     * @param string $icmp_code icmp_code
     *
     * @return self
     */
    public function setIcmpCode($icmp_code)
    {
        $this->container['icmp_code'] = $icmp_code;

        return $this;
    }

    /**
     * Gets icmp_type
     *
     * @return string
     */
    public function getIcmpType()
    {
        return $this->container['icmp_type'];
    }

    /**
     * Sets icmp_type
     *
     * @param string $icmp_type icmp_type
     *
     * @return self
     */
    public function setIcmpType($icmp_type)
    {
        $this->container['icmp_type'] = $icmp_type;

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
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image_file_name
     *
     * @return string
     */
    public function getImageFileName()
    {
        return $this->container['image_file_name'];
    }

    /**
     * Sets image_file_name
     *
     * @param string $image_file_name image_file_name
     *
     * @return self
     */
    public function setImageFileName($image_file_name)
    {
        $this->container['image_file_name'] = $image_file_name;

        return $this;
    }

    /**
     * Gets ipv
     *
     * @return string
     */
    public function getIpv()
    {
        return $this->container['ipv'];
    }

    /**
     * Sets ipv
     *
     * @param string $ipv ipv
     *
     * @return self
     */
    public function setIpv($ipv)
    {
        $this->container['ipv'] = $ipv;

        return $this;
    }

    /**
     * Gets local_address
     *
     * @return string
     */
    public function getLocalAddress()
    {
        return $this->container['local_address'];
    }

    /**
     * Sets local_address
     *
     * @param string $local_address local_address
     *
     * @return self
     */
    public function setLocalAddress($local_address)
    {
        $this->container['local_address'] = $local_address;

        return $this;
    }

    /**
     * Gets local_port
     *
     * @return string
     */
    public function getLocalPort()
    {
        return $this->container['local_port'];
    }

    /**
     * Sets local_port
     *
     * @param string $local_port local_port
     *
     * @return self
     */
    public function setLocalPort($local_port)
    {
        $this->container['local_port'] = $local_port;

        return $this;
    }

    /**
     * Gets match_count
     *
     * @return string
     */
    public function getMatchCount()
    {
        return $this->container['match_count'];
    }

    /**
     * Sets match_count
     *
     * @param string $match_count match_count
     *
     * @return self
     */
    public function setMatchCount($match_count)
    {
        $this->container['match_count'] = $match_count;

        return $this;
    }

    /**
     * Gets match_count_since_last_event
     *
     * @return string
     */
    public function getMatchCountSinceLastEvent()
    {
        return $this->container['match_count_since_last_event'];
    }

    /**
     * Sets match_count_since_last_event
     *
     * @param string $match_count_since_last_event match_count_since_last_event
     *
     * @return self
     */
    public function setMatchCountSinceLastEvent($match_count_since_last_event)
    {
        $this->container['match_count_since_last_event'] = $match_count_since_last_event;

        return $this;
    }

    /**
     * Gets network_profile
     *
     * @return string
     */
    public function getNetworkProfile()
    {
        return $this->container['network_profile'];
    }

    /**
     * Sets network_profile
     *
     * @param string $network_profile network_profile
     *
     * @return self
     */
    public function setNetworkProfile($network_profile)
    {
        $this->container['network_profile'] = $network_profile;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string $pid pid
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

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
     * Gets policy_name
     *
     * @return string
     */
    public function getPolicyName()
    {
        return $this->container['policy_name'];
    }

    /**
     * Sets policy_name
     *
     * @param string $policy_name policy_name
     *
     * @return self
     */
    public function setPolicyName($policy_name)
    {
        $this->container['policy_name'] = $policy_name;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol protocol
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets remote_address
     *
     * @return string
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     *
     * @param string $remote_address remote_address
     *
     * @return self
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

        return $this;
    }

    /**
     * Gets remote_port
     *
     * @return string
     */
    public function getRemotePort()
    {
        return $this->container['remote_port'];
    }

    /**
     * Sets remote_port
     *
     * @param string $remote_port remote_port
     *
     * @return self
     */
    public function setRemotePort($remote_port)
    {
        $this->container['remote_port'] = $remote_port;

        return $this;
    }

    /**
     * Gets rule_action
     *
     * @return string
     */
    public function getRuleAction()
    {
        return $this->container['rule_action'];
    }

    /**
     * Sets rule_action
     *
     * @param string $rule_action rule_action
     *
     * @return self
     */
    public function setRuleAction($rule_action)
    {
        $this->container['rule_action'] = $rule_action;

        return $this;
    }

    /**
     * Gets rule_description
     *
     * @return string
     */
    public function getRuleDescription()
    {
        return $this->container['rule_description'];
    }

    /**
     * Sets rule_description
     *
     * @param string $rule_description rule_description
     *
     * @return self
     */
    public function setRuleDescription($rule_description)
    {
        $this->container['rule_description'] = $rule_description;

        return $this;
    }

    /**
     * Gets rule_family_id
     *
     * @return string
     */
    public function getRuleFamilyId()
    {
        return $this->container['rule_family_id'];
    }

    /**
     * Sets rule_family_id
     *
     * @param string $rule_family_id rule_family_id
     *
     * @return self
     */
    public function setRuleFamilyId($rule_family_id)
    {
        $this->container['rule_family_id'] = $rule_family_id;

        return $this;
    }

    /**
     * Gets rule_group_name
     *
     * @return string
     */
    public function getRuleGroupName()
    {
        return $this->container['rule_group_name'];
    }

    /**
     * Sets rule_group_name
     *
     * @param string $rule_group_name rule_group_name
     *
     * @return self
     */
    public function setRuleGroupName($rule_group_name)
    {
        $this->container['rule_group_name'] = $rule_group_name;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id rule_id
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule_name
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     *
     * @param string $rule_name rule_name
     *
     * @return self
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets tree_id
     *
     * @return string
     */
    public function getTreeId()
    {
        return $this->container['tree_id'];
    }

    /**
     * Sets tree_id
     *
     * @param string $tree_id tree_id
     *
     * @return self
     */
    public function setTreeId($tree_id)
    {
        $this->container['tree_id'] = $tree_id;

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


