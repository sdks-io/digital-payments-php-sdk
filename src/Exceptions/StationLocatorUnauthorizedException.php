<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Exceptions;

class StationLocatorUnauthorizedException extends ApiException
{
    /**
     * @var string|null
     */
    private $errorCode;

    /**
     * @var string|null
     */
    private $errorDescription;

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
     * Returns Error Description.
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    /**
     * Sets Error Description.
     *
     * @maps errorDescription
     */
    public function setErrorDescription(?string $errorDescription): void
    {
        $this->errorDescription = $errorDescription;
    }
}
