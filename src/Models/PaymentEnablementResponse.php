<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class PaymentEnablementResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $dpanLast4;

    /**
     * @param string $dpanLast4
     */
    public function __construct(string $dpanLast4)
    {
        $this->dpanLast4 = $dpanLast4;
    }

    /**
     * Returns Dpan Last 4.
     * DPan Last number
     */
    public function getDpanLast4(): string
    {
        return $this->dpanLast4;
    }

    /**
     * Sets Dpan Last 4.
     * DPan Last number
     *
     * @required
     * @maps dpanLast4
     */
    public function setDpanLast4(string $dpanLast4): void
    {
        $this->dpanLast4 = $dpanLast4;
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
        $json['dpanLast4'] = $this->dpanLast4;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
