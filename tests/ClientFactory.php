<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Tests;

use Core\Types\CallbackCatcher;
use ShellSmartPayAPILib\Authentication\MppTokenCredentialsBuilder;
use ShellSmartPayAPILib\Authentication\OAuthTokenPostCredentialsBuilder;
use ShellSmartPayAPILib\ShellSmartPayAPIClient;
use ShellSmartPayAPILib\ShellSmartPayAPIClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): ShellSmartPayAPIClient
    {
        $clientBuilder = ShellSmartPayAPIClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(ShellSmartPayAPIClientBuilder $builder): ShellSmartPayAPIClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        ShellSmartPayAPIClientBuilder $builder
    ): ShellSmartPayAPIClientBuilder {
        $timeout = getenv('SHELL_SMART_PAY_API_LIB_TIMEOUT');
        $numberOfRetries = getenv('SHELL_SMART_PAY_API_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('SHELL_SMART_PAY_API_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('SHELL_SMART_PAY_API_LIB_ENVIRONMENT');
        $authorization = getenv('SHELL_SMART_PAY_API_LIB_AUTHORIZATION');
        $xApigeeAuthorization = getenv('SHELL_SMART_PAY_API_LIB_X_APIGEE_AUTHORIZATION');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        if (!empty($authorization)) {
            $builder->mppTokenCredentials(MppTokenCredentialsBuilder::init($authorization));
        }

        if (!empty($xApigeeAuthorization)) {
            $builder->oAuthTokenPostCredentials(OAuthTokenPostCredentialsBuilder::init($xApigeeAuthorization));
        }

        return $builder;
    }
}
