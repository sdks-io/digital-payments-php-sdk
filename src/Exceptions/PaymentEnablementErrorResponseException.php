<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Exceptions;

class PaymentEnablementErrorResponseException extends ApiException
{
    /**
     * @var int|null
     */
    private $codeProperty;

    /**
     * @var string|null
     */
    private $messageProperty;

    /**
     * Returns Code Property.
     */
    public function getCodeProperty(): ?int
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     *
     * @maps code
     */
    public function setCodeProperty(?int $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): ?string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @maps message
     */
    public function setMessageProperty(?string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }
}