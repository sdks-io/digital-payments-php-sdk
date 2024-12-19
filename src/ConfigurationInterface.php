<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib;

use CoreInterfaces\Http\HttpConfigurations;
use ShellSmartPayAPILib\Authentication\MppTokenCredentials;
use ShellSmartPayAPILib\Authentication\MppTokenCredentialsBuilder;
use ShellSmartPayAPILib\Authentication\OAuthTokenPostCredentials;
use ShellSmartPayAPILib\Authentication\OAuthTokenPostCredentialsBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the credentials to use with MppToken
     */
    public function getMppTokenCredentials(): MppTokenCredentials;

    /**
     * Get the credentials builder instance to update credentials for MppToken
     */
    public function getMppTokenCredentialsBuilder(): ?MppTokenCredentialsBuilder;

    /**
     * Get the credentials to use with OAuthTokenPost
     */
    public function getOAuthTokenPostCredentials(): OAuthTokenPostCredentials;

    /**
     * Get the credentials builder instance to update credentials for OAuthTokenPost
     */
    public function getOAuthTokenPostCredentialsBuilder(): ?OAuthTokenPostCredentialsBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::SHELL): string;
}
