<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Tests\Controllers;

use ShellSmartPayAPILib\Controllers\StationLocatorController;
use ShellSmartPayAPILib\Exceptions;

class StationLocatorControllerTest extends BaseTestController
{
    /**
     * @var StationLocatorController StationLocatorController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getStationLocatorController();
    }

    public function testStationlocatorV1StationsGetAroundLocation()
    {
        // Parameters for the API call
        $m = 'aroundLocation';
        $lon = 77.6730103;
        $lat = 12.9132169;
        $radius = 0.3;
        $offerCode = null;
        $n = null;
        $amenities = null;
        $countries = null;
        $type = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->stationlocatorV1StationsGetAroundLocation(
                $m,
                $lon,
                $lat,
                $radius,
                $offerCode,
                $n,
                $amenities,
                $countries,
                $type
            );
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }
}
