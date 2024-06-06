# Fueling

```php
$fuelingController = $client->getFuelingController();
```

## Class Name

`FuelingController`

## Methods

* [Mpp Token](../../doc/controllers/fueling.md#mpp-token)
* [Mpp Prepare Fueling](../../doc/controllers/fueling.md#mpp-prepare-fueling)
* [Mpp Cancel Fueling](../../doc/controllers/fueling.md#mpp-cancel-fueling)


# Mpp Token

The Digital Payments Service enables 3rd Parties to trigger the refuel process which, if successful, will unlock a pump/nozzle ready for fuelling. Enables a 3rd party to request an access token to start using fueling.
APIs

```php
function mppToken(string $grantType, string $clientId, string $clientSecret): MppAccesTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `grantType` | `string` | Form, Required | In OAuth 2.0, the term grant type refers to the way an application gets an access token. OAuth 2.0 defines several grant types, including the authorization code flow. |
| `clientId` | `string` | Form, Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. |
| `clientSecret` | `string` | Form, Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. The client secret must be kept confidential. |

## Response Type

[`MppAccesTokenResponse`](../../doc/models/mpp-acces-token-response.md)

## Example Usage

```php
$grantType = 'client_credentials';

$clientId = 'b2bmpp-cli';

$clientSecret = 'f20935d8f14a44bd1f0923cc4c4fa63f7b25922330cd5080f735f1a2769ece77ce245cfe8ba4cbd2a58544ee5113c200b8e37a7be33311e4b6f3c785bf3f37d2';

$result = $fuelingController->mppToken(
    $grantType,
    $clientId,
    $clientSecret
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized. The request has not been applied because it lacks valid authentication credentials for the target resource. | [`MppAccesTokenErrorResponseException`](../../doc/models/mpp-acces-token-error-response-exception.md) |


# Mpp Prepare Fueling

Enables a 3rd party to request to unlock a pump so that they may fill up to a pre-authorised limit. The fuel types that are unlocked may also be determined by permitted fuels stored against the user/entity profile

```php
function mppPrepareFueling(
    string $siteCountry,
    string $currency,
    PrepareFuelingRequest $body
): PrepareFuelingResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `siteCountry` | `string` | Query, Required | Country ISO code |
| `currency` | `string` | Query, Required | Currency ISO code |
| `body` | [`PrepareFuelingRequest`](../../doc/models/prepare-fueling-request.md) | Body, Required | - |

## Response Type

[`PrepareFuelingResponse`](../../doc/models/prepare-fueling-response.md)

## Example Usage

```php
$siteCountry = 'NL';

$currency = 'EUR';

$body = PrepareFuelingRequestBuilder::init(
    12.92452,
    77.68862,
    '9955',
    '1',
    'PARTNER_APP_EXAMPLE',
    [
        PaymentDetailsItemsBuilder::init(
            'euroShell',
            PaymentPropertiesBuilder::init(
                '98e4ffd3-4146-4e94-8445-e02f4ce87a77'
            )->build()
        )->build()
    ]
)
    ->loyaltyDetails(
        [
            LoyaltyDetailsBuilder::init(
                '70043201060148830',
                'Shell'
            )->build()
        ]
    )->build();

$result = $fuelingController->mppPrepareFueling(
    $siteCountry,
    $currency,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Occurred. Request did not include bearer token or token provided and is invalid. | `ApiException` |
| 401 | Unauthorized | `ApiException` |
| 403 | Forbidden. Requestor is not permitted to call the API | `ApiException` |
| 404 | Not Found. Request received by the server but requested URL not found | `ApiException` |


# Mpp Cancel Fueling

Enables a partner user to cancel pump reservation from the App

```php
function mppCancelFueling(string $mppTransactionId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `mppTransactionId` | `string` | Template, Required | The ID of the transaction that’s being cancelled |

## Response Type

`void`

## Example Usage

```php
$mppTransactionId = '000000001C48';

$fuelingController->mppCancelFueling($mppTransactionId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Occurred. The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, invalid request message). Please see below for information regarding structure of Response Body vs. all possible errors that could be returned. | [`CancelFuelingErrorResponseErrorException`](../../doc/models/cancel-fueling-error-response-error-exception.md) |
| 401 | Unauthorized. Request did not include bearer token or token provided and is invalid. | [`CancelFuelingErrorResponseErrorException`](../../doc/models/cancel-fueling-error-response-error-exception.md) |
| 403 | Forbidden. Requestor is not permitted to call the API. | `ApiException` |
| 404 | Not Found. Request received by the server but requested URL not found | `ApiException` |

