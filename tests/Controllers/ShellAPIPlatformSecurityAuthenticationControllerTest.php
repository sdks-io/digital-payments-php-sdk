<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Tests\Controllers;

use ShellSmartPayAPILib\Controllers\ShellAPIPlatformSecurityAuthenticationController;
use ShellSmartPayAPILib\Exceptions;

class ShellAPIPlatformSecurityAuthenticationControllerTest extends BaseTestController
{
    /**
     * @var ShellAPIPlatformSecurityAuthenticationController ShellAPIPlatformSecurityAuthenticationController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getShellAPIPlatformSecurityAuthenticationController();
    }

    public function testOauthTokenPost()
    {
        // Parameters for the API call
        $grantType = 'client_credentials';
        $clientId = 'SOFflRakNlwnWlxfOXQ4GHDVyqGawuKA';
        $clientSecret = 'cRnWgw7gACqM3gVS';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->oauthTokenPost($grantType, $clientId, $clientSecret);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }
}
