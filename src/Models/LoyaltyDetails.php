<?php

declare(strict_types=1);

/*
 * ShellSmartPayAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellSmartPayAPILib\Models;

use ShellSmartPayAPILib\ApiHelper;
use stdClass;

class LoyaltyDetails implements \JsonSerializable
{
    /**
     * @var string
     */
    private $loyaltyId;

    /**
     * @var string
     */
    private $loyaltyType;

    /**
     * @param string $loyaltyId
     * @param string $loyaltyType
     */
    public function __construct(string $loyaltyId, string $loyaltyType)
    {
        $this->loyaltyId = $loyaltyId;
        $this->loyaltyType = $loyaltyType;
    }

    /**
     * Returns Loyalty Id.
     * The user’s Loyalty card number. Although this is optional the expectation is that if this is
     * specified then loyaltyType must also be specified
     */
    public function getLoyaltyId(): string
    {
        return $this->loyaltyId;
    }

    /**
     * Sets Loyalty Id.
     * The user’s Loyalty card number. Although this is optional the expectation is that if this is
     * specified then loyaltyType must also be specified
     *
     * @required
     * @maps loyaltyId
     */
    public function setLoyaltyId(string $loyaltyId): void
    {
        $this->loyaltyId = $loyaltyId;
    }

    /**
     * Returns Loyalty Type.
     * Loyalty type being used, associated to the loyalty ID being passed. Possible values are 'Shell'
     */
    public function getLoyaltyType(): string
    {
        return $this->loyaltyType;
    }

    /**
     * Sets Loyalty Type.
     * Loyalty type being used, associated to the loyalty ID being passed. Possible values are 'Shell'
     *
     * @required
     * @maps loyaltyType
     */
    public function setLoyaltyType(string $loyaltyType): void
    {
        $this->loyaltyType = $loyaltyType;
    }

    /**
     * Converts the LoyaltyDetails object to a human-readable string representation.
     *
     * @return string The string representation of the LoyaltyDetails object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LoyaltyDetails',
            ['loyaltyId' => $this->loyaltyId, 'loyaltyType' => $this->loyaltyType]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['loyaltyId']   = $this->loyaltyId;
        $json['loyaltyType'] = $this->loyaltyType;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
