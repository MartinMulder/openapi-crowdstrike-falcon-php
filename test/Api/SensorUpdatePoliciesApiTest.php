<?php
/**
 * SensorUpdatePoliciesApiTest
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
 * SensorUpdatePoliciesApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SensorUpdatePoliciesApiTest extends TestCase
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
     * Test case for createSensorUpdatePolicies
     *
     * Create Sensor Update Policies by specifying details about the policy to create.
     *
     */
    public function testCreateSensorUpdatePolicies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for createSensorUpdatePoliciesV2
     *
     * Create Sensor Update Policies by specifying details about the policy to create with additional support for uninstall protection.
     *
     */
    public function testCreateSensorUpdatePoliciesV2()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteSensorUpdatePolicies
     *
     * Delete a set of Sensor Update Policies by specifying their IDs.
     *
     */
    public function testDeleteSensorUpdatePolicies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getSensorUpdatePolicies
     *
     * Retrieve a set of Sensor Update Policies by specifying their IDs.
     *
     */
    public function testGetSensorUpdatePolicies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getSensorUpdatePoliciesV2
     *
     * Retrieve a set of Sensor Update Policies with additional support for uninstall protection by specifying their IDs.
     *
     */
    public function testGetSensorUpdatePoliciesV2()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for performSensorUpdatePoliciesAction
     *
     * Perform the specified action on the Sensor Update Policies specified in the request.
     *
     */
    public function testPerformSensorUpdatePoliciesAction()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryCombinedSensorUpdateBuilds
     *
     * Retrieve available builds for use with Sensor Update Policies.
     *
     */
    public function testQueryCombinedSensorUpdateBuilds()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryCombinedSensorUpdatePolicies
     *
     * Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria.
     *
     */
    public function testQueryCombinedSensorUpdatePolicies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryCombinedSensorUpdatePoliciesV2
     *
     * Search for Sensor Update Policies with additional support for uninstall protection in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria.
     *
     */
    public function testQueryCombinedSensorUpdatePoliciesV2()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for queryCombinedSensorUpdatePolicyMembers
     *
     * Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria.
     *
     */
    public function testQueryCombinedSensorUpdatePolicyMembers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for querySensorUpdatePolicies
     *
     * Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policy IDs which match the filter criteria.
     *
     */
    public function testQuerySensorUpdatePolicies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for querySensorUpdatePolicyMembers
     *
     * Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria.
     *
     */
    public function testQuerySensorUpdatePolicyMembers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for revealUninstallToken
     *
     * Reveals an uninstall token for a specific device. To retrieve the bulk maintenance token pass the value 'MAINTENANCE' as the value for 'device_id'.
     *
     */
    public function testRevealUninstallToken()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for setSensorUpdatePoliciesPrecedence
     *
     * Sets the precedence of Sensor Update Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence.
     *
     */
    public function testSetSensorUpdatePoliciesPrecedence()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateSensorUpdatePolicies
     *
     * Update Sensor Update Policies by specifying the ID of the policy and details to update.
     *
     */
    public function testUpdateSensorUpdatePolicies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateSensorUpdatePoliciesV2
     *
     * Update Sensor Update Policies by specifying the ID of the policy and details to update with additional support for uninstall protection.
     *
     */
    public function testUpdateSensorUpdatePoliciesV2()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
