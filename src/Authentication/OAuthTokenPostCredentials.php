<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Authentication;

/**
 * Interface for defining the behavior of Authentication.
 */
interface OAuthTokenPostCredentials
{
    /**
     * String value for xApigeeAuthorization.
     */
    public function getXApigeeAuthorization(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $xApigeeAuthorization API Gateway Access token to be passed for Authentiction.
     *        The calling party’s OAuth 2.0/bearer token that’s required for using the Shell API
     *        Platform. ([How to obtain APIGEE access token?](page:guided-
     *        walkthrough/walkthrough1))
     */
    public function equals(string $xApigeeAuthorization): bool;
}
