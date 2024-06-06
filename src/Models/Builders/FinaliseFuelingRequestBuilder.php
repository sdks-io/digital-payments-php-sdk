<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\FinaliseFuelingRequest;
use ShellEVLib\Models\FinaliseFuelingRequestPayment;

/**
 * Builder for model FinaliseFuelingRequest
 *
 * @see FinaliseFuelingRequest
 */
class FinaliseFuelingRequestBuilder
{
    /**
     * @var FinaliseFuelingRequest
     */
    private $instance;

    private function __construct(FinaliseFuelingRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new finalise fueling request Builder object.
     */
    public static function init(): self
    {
        return new self(new FinaliseFuelingRequest());
    }

    /**
     * Sets site name field.
     */
    public function siteName(?string $value): self
    {
        $this->instance->setSiteName($value);
        return $this;
    }

    /**
     * Sets timestamp field.
     */
    public function timestamp(?int $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
    }

    /**
     * Sets volume quantity field.
     */
    public function volumeQuantity(?float $value): self
    {
        $this->instance->setVolumeQuantity($value);
        return $this;
    }

    /**
     * Sets volume unit field.
     */
    public function volumeUnit(?string $value): self
    {
        $this->instance->setVolumeUnit($value);
        return $this;
    }

    /**
     * Sets final price field.
     */
    public function finalPrice(?float $value): self
    {
        $this->instance->setFinalPrice($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets site address field.
     */
    public function siteAddress(?string $value): self
    {
        $this->instance->setSiteAddress($value);
        return $this;
    }

    /**
     * Sets original price field.
     */
    public function originalPrice(?float $value): self
    {
        $this->instance->setOriginalPrice($value);
        return $this;
    }

    /**
     * Sets discount field.
     */
    public function discount(?float $value): self
    {
        $this->instance->setDiscount($value);
        return $this;
    }

    /**
     * Sets payment field.
     */
    public function payment(?FinaliseFuelingRequestPayment $value): self
    {
        $this->instance->setPayment($value);
        return $this;
    }

    /**
     * Sets products field.
     */
    public function products(?array $value): self
    {
        $this->instance->setProducts($value);
        return $this;
    }

    /**
     * Sets mpp transaction id field.
     */
    public function mppTransactionId(?string $value): self
    {
        $this->instance->setMppTransactionId($value);
        return $this;
    }

    /**
     * Initializes a new finalise fueling request object.
     */
    public function build(): FinaliseFuelingRequest
    {
        return CoreHelper::clone($this->instance);
    }
}