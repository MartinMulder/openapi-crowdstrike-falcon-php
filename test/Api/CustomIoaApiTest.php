<?php
/**
 * CustomIoaApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * CustomIoaApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomIoaApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createRule
     *
     * Create a rule within a rule group. Returns the rule..
     *
     */
    public function testCreateRule()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for createRuleGroupMixin0
     *
     * Create a rule group for a platform with a name and an optional description. Returns the rule group..
     *
     */
    public function testCreateRuleGroupMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteRuleGroupsMixin0
     *
     * Delete rule groups by ID..
     *
     */
    public function testDeleteRuleGroupsMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteRules
     *
     * Delete rules from a rule group by ID..
     *
     */
    public function testDeleteRules()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPatterns
     *
     * Get pattern severities by ID..
     *
     */
    public function testGetPatterns()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPlatformsMixin0
     *
     * Get platforms by ID..
     *
     */
    public function testGetPlatformsMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRuleGroupsMixin0
     *
     * Get rule groups by ID..
     *
     */
    public function testGetRuleGroupsMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRuleTypes
     *
     * Get rule types by ID..
     *
     */
    public function testGetRuleTypes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRulesGet
     *
     * Get rules by ID and optionally version in the following format: `ID[:version]`..
     *
     */
    public function testGetRulesGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRulesMixin0
     *
     * Get rules by ID and optionally version in the following format: `ID[:version]`. The max number of IDs is constrained by URL size..
     *
     */
    public function testGetRulesMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryPatterns
     *
     * Get all pattern severity IDs..
     *
     */
    public function testQueryPatterns()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryPlatformsMixin0
     *
     * Get all platform IDs..
     *
     */
    public function testQueryPlatformsMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryRuleGroupsFull
     *
     * Find all rule groups matching the query with optional filter..
     *
     */
    public function testQueryRuleGroupsFull()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryRuleGroupsMixin0
     *
     * Finds all rule group IDs matching the query with optional filter..
     *
     */
    public function testQueryRuleGroupsMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryRuleTypes
     *
     * Get all rule type IDs..
     *
     */
    public function testQueryRuleTypes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryRulesMixin0
     *
     * Finds all rule IDs matching the query with optional filter..
     *
     */
    public function testQueryRulesMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateRuleGroupMixin0
     *
     * Update a rule group. The following properties can be modified: name, description, enabled..
     *
     */
    public function testUpdateRuleGroupMixin0()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateRules
     *
     * Update rules within a rule group. Return the updated rules..
     *
     */
    public function testUpdateRules()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for validate
     *
     * Validates field values and checks for matches if a test string is provided..
     *
     */
    public function testValidate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
