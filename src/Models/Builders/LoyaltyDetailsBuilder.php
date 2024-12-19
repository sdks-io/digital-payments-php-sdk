<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellSmartPayAPILib\Models\LoyaltyDetails;

/**
 * Builder for model LoyaltyDetails
 *
 * @see LoyaltyDetails
 */
class LoyaltyDetailsBuilder
{
    /**
     * @var LoyaltyDetails
     */
    private $instance;

    private function __construct(LoyaltyDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Loyalty Details Builder object.
     *
     * @param string $loyaltyId
     * @param string $loyaltyType
     */
    public static function init(string $loyaltyId, string $loyaltyType): self
    {
        return new self(new LoyaltyDetails($loyaltyId, $loyaltyType));
    }

    /**
     * Initializes a new Loyalty Details object.
     */
    public function build(): LoyaltyDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
