<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellSmartPayAPILib\Models\PaymentDetails;
use ShellSmartPayAPILib\Models\PaymentProperties;

/**
 * Builder for model PaymentDetails
 *
 * @see PaymentDetails
 */
class PaymentDetailsBuilder
{
    /**
     * @var PaymentDetails
     */
    private $instance;

    private function __construct(PaymentDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Details Builder object.
     *
     * @param string $paymentMethodId
     * @param PaymentProperties $paymentProperties
     */
    public static function init(string $paymentMethodId, PaymentProperties $paymentProperties): self
    {
        return new self(new PaymentDetails($paymentMethodId, $paymentProperties));
    }

    /**
     * Sets payment Category field.
     *
     * @param string|null $value
     */
    public function paymentCategory(?string $value): self
    {
        $this->instance->setPaymentCategory($value);
        return $this;
    }

    /**
     * Initializes a new Payment Details object.
     */
    public function build(): PaymentDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
