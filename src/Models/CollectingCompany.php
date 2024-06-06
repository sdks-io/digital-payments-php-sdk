<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class CollectingCompany implements \JsonSerializable
{
    /**
     * @var string
     */
    private $colCoId;

    /**
     * @param string $colCoId
     */
    public function __construct(string $colCoId)
    {
        $this->colCoId = $colCoId;
    }

    /**
     * Returns Col Co Id.
     * The ID of the Collecting Company (in GFN), also known as Shell Code of the selected payer. This
     * property is mandatory if the ColCoCode code is not passed
     */
    public function getColCoId(): string
    {
        return $this->colCoId;
    }

    /**
     * Sets Col Co Id.
     * The ID of the Collecting Company (in GFN), also known as Shell Code of the selected payer. This
     * property is mandatory if the ColCoCode code is not passed
     *
     * @required
     * @maps ColCoId
     */
    public function setColCoId(string $colCoId): void
    {
        $this->colCoId = $colCoId;
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
        $json['ColCoId'] = $this->colCoId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
