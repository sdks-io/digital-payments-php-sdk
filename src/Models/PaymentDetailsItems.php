<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class PaymentDetailsItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $paymentCategory;

    /**
     * @var string
     */
    private $paymentMethodId;

    /**
     * @var PaymentProperties
     */
    private $paymentProperties;

    /**
     * @param string $paymentMethodId
     * @param PaymentProperties $paymentProperties
     */
    public function __construct(string $paymentMethodId, PaymentProperties $paymentProperties)
    {
        $this->paymentMethodId = $paymentMethodId;
        $this->paymentProperties = $paymentProperties;
    }

    /**
     * Returns Payment Category.
     * The type of commercial transaction. Permitted value\:
     * *  B2B
     */
    public function getPaymentCategory(): ?string
    {
        return $this->paymentCategory;
    }

    /**
     * Sets Payment Category.
     * The type of commercial transaction. Permitted value\:
     * *  B2B
     *
     * @maps paymentCategory
     */
    public function setPaymentCategory(?string $paymentCategory): void
    {
        $this->paymentCategory = $paymentCategory;
    }

    /**
     * Returns Payment Method Id.
     * The payment method used to make the transaction. Possible values include:
     * *  euroShell
     */
    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    /**
     * Sets Payment Method Id.
     * The payment method used to make the transaction. Possible values include:
     * *  euroShell
     *
     * @required
     * @maps paymentMethodId
     */
    public function setPaymentMethodId(string $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * Returns Payment Properties.
     * Object containing Payment Property details Please note:
     * All the attributes are optional as they serve all payment methods (i.e. different payment methods
     * require different fields to be filled/mandated). As a result, some of these fields will be mandatory
     * depending on the selected payment method and the API will return an error if they are not completed
     */
    public function getPaymentProperties(): PaymentProperties
    {
        return $this->paymentProperties;
    }

    /**
     * Sets Payment Properties.
     * Object containing Payment Property details Please note:
     * All the attributes are optional as they serve all payment methods (i.e. different payment methods
     * require different fields to be filled/mandated). As a result, some of these fields will be mandatory
     * depending on the selected payment method and the API will return an error if they are not completed
     *
     * @required
     * @maps paymentProperties
     */
    public function setPaymentProperties(PaymentProperties $paymentProperties): void
    {
        $this->paymentProperties = $paymentProperties;
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
        if (isset($this->paymentCategory)) {
            $json['paymentCategory'] = $this->paymentCategory;
        }
        $json['paymentMethodId']     = $this->paymentMethodId;
        $json['paymentProperties']   = $this->paymentProperties;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
