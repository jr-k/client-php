<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Tests;

use Pipedrive\APIException;
use Pipedrive\Exceptions;
use Pipedrive\APIHelper;
use Pipedrive\Models;

class OrganizationsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pipedrive\Controllers\OrganizationsController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \Pipedrive\Client();
        self::$controller = $client->getOrganizations();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Returns all organizations
     */
    public function testTestGetAllOrganizations()
    {
        // Parameters for the API call
        $input = array();
        $input['userId'] = null;
        $input['filterId'] = null;
        $input['firstChar'] = null;
        $input['start'] = 0;
        $input['limit'] = null;
        $input['sort'] = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAllOrganizations($input);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Adds a new organization. Note that you can supply additional custom fields along with the request that are not described here. These custom fields are different for each Pipedrive account and can be recognized by long hashes as keys. To determine which custom fields exists, fetch the organizationFields and look for 'key' values. For more information on how to add an organization, see <a href="https://pipedrive.readme.io/docs/adding-an-organization" target="_blank" rel="noopener noreferrer">this tutorial</a>.
     */
    public function testTestAddAnOrganization()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->addAnOrganization($body);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
