<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\PaymentProperties;

/**
 * Builder for model PaymentProperties
 *
 * @see PaymentProperties
 */
class PaymentPropertiesBuilder
{
    /**
     * @var PaymentProperties
     */
    private $instance;

    private function __construct(PaymentProperties $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment properties Builder object.
     */
    public static function init(string $cardIdentifier): self
    {
        return new self(new PaymentProperties($cardIdentifier));
    }

    /**
     * Sets payment type field.
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets client metadata id field.
     */
    public function clientMetadataId(?string $value): self
    {
        $this->instance->setClientMetadataId($value);
        return $this;
    }

    /**
     * Sets token field.
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets identifier field.
     */
    public function identifier(?string $value): self
    {
        $this->instance->setIdentifier($value);
        return $this;
    }

    /**
     * Sets network field.
     */
    public function network(?string $value): self
    {
        $this->instance->setNetwork($value);
        return $this;
    }

    /**
     * Sets odometer field.
     */
    public function odometer(?string $value): self
    {
        $this->instance->setOdometer($value);
        return $this;
    }

    /**
     * Sets fleet id field.
     */
    public function fleetId(?string $value): self
    {
        $this->instance->setFleetId($value);
        return $this;
    }

    /**
     * Sets external ref id field.
     */
    public function externalRefId(?string $value): self
    {
        $this->instance->setExternalRefId($value);
        return $this;
    }

    /**
     * Initializes a new payment properties object.
     */
    public function build(): PaymentProperties
    {
        return CoreHelper::clone($this->instance);
    }
}
