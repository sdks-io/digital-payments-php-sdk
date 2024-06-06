<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\FinaliseFuelingRequestProductsItems;

/**
 * Builder for model FinaliseFuelingRequestProductsItems
 *
 * @see FinaliseFuelingRequestProductsItems
 */
class FinaliseFuelingRequestProductsItemsBuilder
{
    /**
     * @var FinaliseFuelingRequestProductsItems
     */
    private $instance;

    private function __construct(FinaliseFuelingRequestProductsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new finalise fueling request products items Builder object.
     */
    public static function init(): self
    {
        return new self(new FinaliseFuelingRequestProductsItems());
    }

    /**
     * Sets product id field.
     */
    public function productId(?string $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product name field.
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
        return $this;
    }

    /**
     * Sets unit price field.
     */
    public function unitPrice(?float $value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Initializes a new finalise fueling request products items object.
     */
    public function build(): FinaliseFuelingRequestProductsItems
    {
        return CoreHelper::clone($this->instance);
    }
}