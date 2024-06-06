<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing OAuthTokenPost security credentials.
 */
class OAuthTokenPostCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for OAuthTokenPostCredentialsBuilder
     *
     * @param string $xApigeeAuthorization
     */
    public static function init(string $xApigeeAuthorization): self
    {
        return new self(['xApigeeAuthorization' => $xApigeeAuthorization]);
    }

    /**
     * Setter for XApigeeAuthorization.
     *
     * @param string $xApigeeAuthorization
     *
     * @return $this
     */
    public function xApigeeAuthorization(string $xApigeeAuthorization): self
    {
        $this->config['xApigeeAuthorization'] = $xApigeeAuthorization;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
