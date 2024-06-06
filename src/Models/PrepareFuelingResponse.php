<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

/**
 * The response of prepare fueling returns
 */
class PrepareFuelingResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $mppTransactionId;

    /**
     * @var string[]|null
     */
    private $products;

    /**
     * @param string $mppTransactionId
     */
    public function __construct(string $mppTransactionId)
    {
        $this->mppTransactionId = $mppTransactionId;
    }

    /**
     * Returns Mpp Transaction Id.
     * The unique identifier of the Order. NB at this stage the Customer hasn’t actually bought anything so
     * there’s no formal transaction associated with the Order. A transaction is not processed until
     * refuelling has been completed successfully and will be triggered by returning the nozzle to the pump.
     */
    public function getMppTransactionId(): string
    {
        return $this->mppTransactionId;
    }

    /**
     * Sets Mpp Transaction Id.
     * The unique identifier of the Order. NB at this stage the Customer hasn’t actually bought anything so
     * there’s no formal transaction associated with the Order. A transaction is not processed until
     * refuelling has been completed successfully and will be triggered by returning the nozzle to the pump.
     *
     * @required
     * @maps mppTransactionId
     */
    public function setMppTransactionId(string $mppTransactionId): void
    {
        $this->mppTransactionId = $mppTransactionId;
    }

    /**
     * Returns Products.
     * An array of Strings that contain the list of products that the user can purchase at the specified
     * Station/Pump. The text is localized based on the country.
     *
     * @return string[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * Sets Products.
     * An array of Strings that contain the list of products that the user can purchase at the specified
     * Station/Pump. The text is localized based on the country.
     *
     * @maps products
     *
     * @param string[]|null $products
     */
    public function setProducts(?array $products): void
    {
        $this->products = $products;
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
        $json['mppTransactionId'] = $this->mppTransactionId;
        if (isset($this->products)) {
            $json['products']     = $this->products;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
