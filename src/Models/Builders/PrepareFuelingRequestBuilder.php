<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\PrepareFuelingRequest;

/**
 * Builder for model PrepareFuelingRequest
 *
 * @see PrepareFuelingRequest
 */
class PrepareFuelingRequestBuilder
{
    /**
     * @var PrepareFuelingRequest
     */
    private $instance;

    private function __construct(PrepareFuelingRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepare fueling request Builder object.
     */
    public static function init(
        float $latitude,
        float $longitude,
        string $stationId,
        string $pumpId,
        string $sourceApplication,
        array $paymentDetails
    ): self {
        return new self(
            new PrepareFuelingRequest(
                $latitude,
                $longitude,
                $stationId,
                $pumpId,
                $sourceApplication,
                $paymentDetails
            )
        );
    }

    /**
     * Sets maximum fueling amount field.
     */
    public function maximumFuelingAmount(?float $value): self
    {
        $this->instance->setMaximumFuelingAmount($value);
        return $this;
    }

    /**
     * Sets loyalty details field.
     */
    public function loyaltyDetails(?array $value): self
    {
        $this->instance->setLoyaltyDetails($value);
        return $this;
    }

    /**
     * Sets device type field.
     */
    public function deviceType(?string $value): self
    {
        $this->instance->setDeviceType($value);
        return $this;
    }

    /**
     * Sets device details field.
     */
    public function deviceDetails(?array $value): self
    {
        $this->instance->setDeviceDetails($value);
        return $this;
    }

    /**
     * Initializes a new prepare fueling request object.
     */
    public function build(): PrepareFuelingRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
