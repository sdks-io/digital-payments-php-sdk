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

/**
 * Object containing Payment Property details Please note:
 * All the attributes are optional as they serve all payment methods (i.e. different payment methods
 * require different fields to be filled/mandated). As a result, some of these fields will be mandatory
 * depending on the selected payment method and the API will return an error if they are not completed
 */
class PaymentProperties implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var string|null
     */
    private $clientMetadataId;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $identifier;

    /**
     * @var string|null
     */
    private $network;

    /**
     * @var string
     */
    private $cardIdentifier;

    /**
     * @var string|null
     */
    private $odometer;

    /**
     * @var string|null
     */
    private $fleetId;

    /**
     * @var string|null
     */
    private $externalRefId;

    /**
     * @param string $cardIdentifier
     */
    public function __construct(string $cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;
    }

    /**
     * Returns Payment Type.
     * The type of payment (e.g. Credit Card, Debit Card)
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * The type of payment (e.g. Credit Card, Debit Card)
     *
     * @maps paymentType
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Client Metadata Id.
     * This is only used for PayPal. During the creation of the user’s profile an ID (clientMetadataId)
     * will have been created by PayPal and stored by Shell. Thus, when PayPal payments are made this ID
     * must be included in order for the payment to be processed
     */
    public function getClientMetadataId(): ?string
    {
        return $this->clientMetadataId;
    }

    /**
     * Sets Client Metadata Id.
     * This is only used for PayPal. During the creation of the user’s profile an ID (clientMetadataId)
     * will have been created by PayPal and stored by Shell. Thus, when PayPal payments are made this ID
     * must be included in order for the payment to be processed
     *
     * @maps clientMetadataId
     */
    public function setClientMetadataId(?string $clientMetadataId): void
    {
        $this->clientMetadataId = $clientMetadataId;
    }

    /**
     * Returns Token.
     * This is only used for ApplePay and AndroidPay. Users using either of these payment methods use
     * device biometrics to authenticate themselves against their respective payment method/provider (e.g.
     * retina, fingerprint). Successful authentication will result in Apple/Android issuing a Payment Token
     * which should be specified here
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * This is only used for ApplePay and AndroidPay. Users using either of these payment methods use
     * device biometrics to authenticate themselves against their respective payment method/provider (e.g.
     * retina, fingerprint). Successful authentication will result in Apple/Android issuing a Payment Token
     * which should be specified here
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Identifier.
     * This is the payment identifier and it is only used for ApplePay and AndroidPay.
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * Sets Identifier.
     * This is the payment identifier and it is only used for ApplePay and AndroidPay.
     *
     * @maps identifier
     */
    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns Network.
     * This is the payment network (e.g. Visa, Mastercard) and it is only used for ApplePay and AndroidPay.
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * Sets Network.
     * This is the payment network (e.g. Visa, Mastercard) and it is only used for ApplePay and AndroidPay.
     *
     * @maps network
     */
    public function setNetwork(?string $network): void
    {
        $this->network = $network;
    }

    /**
     * Returns Card Identifier.
     * This is only relevant for transactions made by B2B customers using the Shell Card payment method.
     * The ‘cardIdentifier’ is the unique identifier provided by Commercial Fleet and shared with the Shell
     * mobile payments platform. This reference ID is used in interactions with the Commercial Fleet
     * application to retrieve the fueling token - use the cardIdentifier when requesting a DPAN.
     */
    public function getCardIdentifier(): string
    {
        return $this->cardIdentifier;
    }

    /**
     * Sets Card Identifier.
     * This is only relevant for transactions made by B2B customers using the Shell Card payment method.
     * The ‘cardIdentifier’ is the unique identifier provided by Commercial Fleet and shared with the Shell
     * mobile payments platform. This reference ID is used in interactions with the Commercial Fleet
     * application to retrieve the fueling token - use the cardIdentifier when requesting a DPAN.
     *
     * @required
     * @maps cardIdentifier
     */
    public function setCardIdentifier(string $cardIdentifier): void
    {
        $this->cardIdentifier = $cardIdentifier;
    }

    /**
     * Returns Odometer.
     * This is only relevant for transactions made by B2B customers using a Shell Card payment method.
     * During set up of the user’s Shell Card it’s possible to configure the card such that users are
     * forced to provide an odometer reading before a Sale can begin processing. This field must be filled
     * if the B2B user’s Shell Card has been configured this way but will be left blank in all other cases.
     */
    public function getOdometer(): ?string
    {
        return $this->odometer;
    }

    /**
     * Sets Odometer.
     * This is only relevant for transactions made by B2B customers using a Shell Card payment method.
     * During set up of the user’s Shell Card it’s possible to configure the card such that users are
     * forced to provide an odometer reading before a Sale can begin processing. This field must be filled
     * if the B2B user’s Shell Card has been configured this way but will be left blank in all other cases.
     *
     * @maps odometer
     */
    public function setOdometer(?string $odometer): void
    {
        $this->odometer = $odometer;
    }

    /**
     * Returns Fleet Id.
     * Only relevant if Customer attempting to pay with B2B Shell Card. Customers attempting to pay with a
     * B2B Shell Card may have to specify their Fleet ID as an extra authorisation/security step. Shell
     * Card configuration will determine whether or not Fleet ID needs to be provided. Please note this
     * field is a 6 character numeric field.
     */
    public function getFleetId(): ?string
    {
        return $this->fleetId;
    }

    /**
     * Sets Fleet Id.
     * Only relevant if Customer attempting to pay with B2B Shell Card. Customers attempting to pay with a
     * B2B Shell Card may have to specify their Fleet ID as an extra authorisation/security step. Shell
     * Card configuration will determine whether or not Fleet ID needs to be provided. Please note this
     * field is a 6 character numeric field.
     *
     * @maps fleetId
     */
    public function setFleetId(?string $fleetId): void
    {
        $this->fleetId = $fleetId;
    }

    /**
     * Returns External Ref Id.
     * This is only used for transactions made by B2B customers using the Shell Card payment method.
     *
     * In this scenario the expectation is that :\ a B2B entity has been successfully created that
     * includes the external party’s reference for the entity (e.g. Contract Number, VRN, customer email);
     * a new Shell Card (SFC) has been successfully created; and Shell Card and B2B Entity have been linked.
     *
     *
     * externalRefId refers to the 3rd Parties External Reference for the B2B entity and will therefore be
     * used to verify the Customer and SFC before attempting to process a payment using the SFC card
     */
    public function getExternalRefId(): ?string
    {
        return $this->externalRefId;
    }

    /**
     * Sets External Ref Id.
     * This is only used for transactions made by B2B customers using the Shell Card payment method.
     *
     * In this scenario the expectation is that :\ a B2B entity has been successfully created that
     * includes the external party’s reference for the entity (e.g. Contract Number, VRN, customer email);
     * a new Shell Card (SFC) has been successfully created; and Shell Card and B2B Entity have been linked.
     *
     *
     * externalRefId refers to the 3rd Parties External Reference for the B2B entity and will therefore be
     * used to verify the Customer and SFC before attempting to process a payment using the SFC card
     *
     * @maps externalRefId
     */
    public function setExternalRefId(?string $externalRefId): void
    {
        $this->externalRefId = $externalRefId;
    }

    /**
     * Converts the PaymentProperties object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentProperties object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentProperties',
            [
                'paymentType' => $this->paymentType,
                'clientMetadataId' => $this->clientMetadataId,
                'token' => $this->token,
                'identifier' => $this->identifier,
                'network' => $this->network,
                'cardIdentifier' => $this->cardIdentifier,
                'odometer' => $this->odometer,
                'fleetId' => $this->fleetId,
                'externalRefId' => $this->externalRefId
            ]
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
        if (isset($this->paymentType)) {
            $json['paymentType']      = $this->paymentType;
        }
        if (isset($this->clientMetadataId)) {
            $json['clientMetadataId'] = $this->clientMetadataId;
        }
        if (isset($this->token)) {
            $json['token']            = $this->token;
        }
        if (isset($this->identifier)) {
            $json['identifier']       = $this->identifier;
        }
        if (isset($this->network)) {
            $json['network']          = $this->network;
        }
        $json['cardIdentifier']       = $this->cardIdentifier;
        if (isset($this->odometer)) {
            $json['odometer']         = $this->odometer;
        }
        if (isset($this->fleetId)) {
            $json['fleetId']          = $this->fleetId;
        }
        if (isset($this->externalRefId)) {
            $json['externalRefId']    = $this->externalRefId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
