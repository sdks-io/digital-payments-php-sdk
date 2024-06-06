<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\PaymentEnablementResponse;

/**
 * Builder for model PaymentEnablementResponse
 *
 * @see PaymentEnablementResponse
 */
class PaymentEnablementResponseBuilder
{
    /**
     * @var PaymentEnablementResponse
     */
    private $instance;

    private function __construct(PaymentEnablementResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment enablement response Builder object.
     */
    public static function init(string $dpanLast4): self
    {
        return new self(new PaymentEnablementResponse($dpanLast4));
    }

    /**
     * Initializes a new payment enablement response object.
     */
    public function build(): PaymentEnablementResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
