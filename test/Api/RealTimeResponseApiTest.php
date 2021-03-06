<?php
/**
 * RealTimeResponseApiTest
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
 * RealTimeResponseApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RealTimeResponseApiTest extends TestCase
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
     * Test case for batchActiveResponderCmd
     *
     * Batch executes a RTR active-responder command across the hosts mapped to the given batch ID..
     *
     */
    public function testBatchActiveResponderCmd()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for batchCmd
     *
     * Batch executes a RTR read-only command across the hosts mapped to the given batch ID..
     *
     */
    public function testBatchCmd()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for batchGetCmd
     *
     * Batch executes `get` command across hosts to retrieve files. After this call is made `GET /real-time-response/combined/batch-get-command/v1` is used to query for the results..
     *
     */
    public function testBatchGetCmd()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for batchGetCmdStatus
     *
     * Retrieves the status of the specified batch get command.  Will return successful files when they are finished processing..
     *
     */
    public function testBatchGetCmdStatus()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for batchInitSessions
     *
     * Batch initialize a RTR session on multiple hosts.  Before any RTR commands can be used, an active session is needed on the host..
     *
     */
    public function testBatchInitSessions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for batchRefreshSessions
     *
     * Batch refresh a RTR session on multiple hosts. RTR sessions will expire after 10 minutes unless refreshed..
     *
     */
    public function testBatchRefreshSessions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRAggregateSessions
     *
     * Get aggregates on session data..
     *
     */
    public function testRTRAggregateSessions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRCheckActiveResponderCommandStatus
     *
     * Get status of an executed active-responder command on a single host..
     *
     */
    public function testRTRCheckActiveResponderCommandStatus()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRCheckCommandStatus
     *
     * Get status of an executed command on a single host..
     *
     */
    public function testRTRCheckCommandStatus()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRDeleteFile
     *
     * Delete a RTR session file..
     *
     */
    public function testRTRDeleteFile()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRDeleteQueuedSession
     *
     * Delete a queued session command.
     *
     */
    public function testRTRDeleteQueuedSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRDeleteSession
     *
     * Delete a session..
     *
     */
    public function testRTRDeleteSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRExecuteActiveResponderCommand
     *
     * Execute an active responder command on a single host..
     *
     */
    public function testRTRExecuteActiveResponderCommand()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRExecuteCommand
     *
     * Execute a command on a single host..
     *
     */
    public function testRTRExecuteCommand()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRGetExtractedFileContents
     *
     * Get RTR extracted file contents for specified session and sha256..
     *
     */
    public function testRTRGetExtractedFileContents()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRInitSession
     *
     * Initialize a new session with the RTR cloud..
     *
     */
    public function testRTRInitSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRListAllSessions
     *
     * Get a list of session_ids..
     *
     */
    public function testRTRListAllSessions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRListFiles
     *
     * Get a list of files for the specified RTR session..
     *
     */
    public function testRTRListFiles()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRListQueuedSessions
     *
     * Get queued session metadata by session ID..
     *
     */
    public function testRTRListQueuedSessions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRListSessions
     *
     * Get session metadata by session id..
     *
     */
    public function testRTRListSessions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rTRPulseSession
     *
     * Refresh a session timeout on a single host..
     *
     */
    public function testRTRPulseSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
