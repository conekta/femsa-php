<?php
/**
 * WebhookKeysApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Femsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Femsa API
 *
 * Femsa sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@Femsa.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Femsa\Test\Api;

use Femsa\Api\WebhookKeysApi;
use Femsa\ApiException;
use Femsa\Configuration;
use Femsa\Model\WebhookKeyRequest;
use Femsa\Model\WebhookKeyUpdateRequest;
use PHPUnit\Framework\TestCase;

/**
 * WebhookKeysApiTest Class Doc Comment
 *
 * @category Class
 * @package  Femsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookKeysApiTest extends TestCase
{

    protected static WebhookKeysApi $apiInstance;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        $config = Configuration::getDefaultConfiguration()->setHost(BaseTest::$host);
        self::$apiInstance = new WebhookKeysApi(null, $config);
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
     * Test case for createWebhookKey
     *
     * Create Webhook Key.
     *
     * @throws ApiException
     */
    public function testCreateWebhookKey()
    {
        $accept_language = 'es';
        $rq = new WebhookKeyRequest([
            'active' => true
        ]);
        $result = self::$apiInstance->createWebhookKey($accept_language, $rq);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for deleteWebhookKey
     *
     * Delete Webhook key.
     *
     * @throws ApiException
     */
    public function testDeleteWebhookKey()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->deleteWebhookKey('645a59da22e7da0001cad283', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for getWebhookKey
     *
     * Get Webhook Key.
     *
     * @throws ApiException
     */
    public function testGetWebhookKey()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->getWebhookKey('645a5eb022e7da0001cad2a4', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for getWebhookKeys
     *
     * Get List of Webhook Keys.
     *
     * @throws ApiException
     */
    public function testGetWebhookKeys()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->getWebhookKeys($accept_language, null, 2);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for updateWebhookKey
     *
     * Update Webhook Key.
     *
     * @throws ApiException
     */
    public function testUpdateWebhookKey()
    {
        $accept_language = 'es';
        $rq = new WebhookKeyUpdateRequest([
            'active' => false
        ]);
        $result = self::$apiInstance->updateWebhookKey('645a613622e7da0001cad882', $accept_language, $rq);
        $this->assertNotEmpty($result, 'expected not empty result');
    }
}