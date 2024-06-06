<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\FaultResponseFaultDetail;

/**
 * Builder for model FaultResponseFaultDetail
 *
 * @see FaultResponseFaultDetail
 */
class FaultResponseFaultDetailBuilder
{
    /**
     * @var FaultResponseFaultDetail
     */
    private $instance;

    private function __construct(FaultResponseFaultDetail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fault response fault detail Builder object.
     */
    public static function init(): self
    {
        return new self(new FaultResponseFaultDetail());
    }

    /**
     * Sets errorcode field.
     */
    public function errorcode(?string $value): self
    {
        $this->instance->setErrorcode($value);
        return $this;
    }

    /**
     * Initializes a new fault response fault detail object.
     */
    public function build(): FaultResponseFaultDetail
    {
        return CoreHelper::clone($this->instance);
    }
}
