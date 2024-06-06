<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\CancelFuelingRequest;

/**
 * Builder for model CancelFuelingRequest
 *
 * @see CancelFuelingRequest
 */
class CancelFuelingRequestBuilder
{
    /**
     * @var CancelFuelingRequest
     */
    private $instance;

    private function __construct(CancelFuelingRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cancel fueling request Builder object.
     */
    public static function init(): self
    {
        return new self(new CancelFuelingRequest());
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
     * Sets reason code field.
     */
    public function reasonCode(?string $value): self
    {
        $this->instance->setReasonCode($value);
        return $this;
    }

    /**
     * Initializes a new cancel fueling request object.
     */
    public function build(): CancelFuelingRequest
    {
        return CoreHelper::clone($this->instance);
    }
}