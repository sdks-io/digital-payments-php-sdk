<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Exceptions;

use ShellSmartPayAPILib\ApiHelper;

class AccessTokenErrorException extends ApiException
{
    /**
     * @var string|null
     */
    private $errorCode;

    /**
     * @var string|null
     */
    private $error;

    /**
     * Returns Error Code.
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     *
     * @maps errorCode
     */
    public function setErrorCode(?string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    /**
     * Converts the AccessTokenErrorException object to a human-readable string representation.
     *
     * @return string The string representation of the AccessTokenErrorException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AccessTokenErrorException',
            ['errorCode' => $this->errorCode, 'error' => $this->error],
            parent::__toString()
        );
    }
}
