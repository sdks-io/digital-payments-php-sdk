# Partner Notification

```php
$partnerNotificationController = $client->getPartnerNotificationController();
```

## Class Name

`PartnerNotificationController`

## Methods

* [Partner Token](../../doc/controllers/partner-notification.md#partner-token)
* [Finalise Fueling](../../doc/controllers/partner-notification.md#finalise-fueling)
* [Cancel Fueling](../../doc/controllers/partner-notification.md#cancel-fueling)


# Partner Token

To access the Partner’s endpoints, for sending callback messages, Shell will need to connect to the Partner API end points. It is recemmended that the partner offers OAuth 2.0 as a standard for call back APIs and will require the OAuth 2.0 token for authentication. Note this needs to be implemented over HTTPS

:information_source: **Note** This endpoint does not require authentication.

```php
function partnerToken(string $grantType, string $clientId, string $clientSecret): AccessTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `grantType` | `string` | Form, Required | In OAuth 2.0, the term grant typee refers to the way an application gets an access token. OAuth 2.0 defines several grant types, including the authorization code flow. |
| `clientId` | `string` | Form, Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. |
| `clientSecret` | `string` | Form, Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. The client secret must be kept confidential. |

## Response Type

[`AccessTokenResponse`](../../doc/models/access-token-response.md)

## Example Usage

```php
$grantType = 'client_credentials';

$clientId = 'SOFflRakNlwnWlxfOXQ4GHDVyqGawuKA';

$clientSecret = 'cRnWgw7gACqM3gVS';

$result = $partnerNotificationController->partnerToken(
    $grantType,
    $clientId,
    $clientSecret
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`AccessTokenErrorException`](../../doc/models/access-token-error-exception.md) |


# Finalise Fueling

Enables Shell to inform partner of the successful completion of a transaction. Note this needs to be implemented over HTTPS

:information_source: **Note** This endpoint does not require authentication.

```php
function finaliseFueling(?FinaliseFuelingRequest $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?FinaliseFuelingRequest`](../../doc/models/finalise-fueling-request.md) | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$body = FinaliseFuelingRequestBuilder::init()
    ->siteName('Pentahof Site B 9997')
    ->timestamp(1548429960631)
    ->volumeQuantity(10.4)
    ->volumeUnit('LTR')
    ->finalPrice(23.3)
    ->currency('GBP')
    ->status('FINISHED')
    ->siteAddress('Test Geman Address')
    ->originalPrice(23.3)
    ->discount(0)
    ->mppTransactionId('000000006KCC')
    ->build();

$partnerNotificationController->finaliseFueling($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 401 | Unauthorized | `ApiException` |


# Cancel Fueling

Enables Shell to inform partner that a Mobile Payment transaction has been cancelled by Shell as an error/issue occured. Note this needs to be implemented over HTTPS

:information_source: **Note** This endpoint does not require authentication.

```php
function cancelFueling(?CancelFuelingRequest $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?CancelFuelingRequest`](../../doc/models/cancel-fueling-request.md) | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$body = CancelFuelingRequestBuilder::init()
    ->mppTransactionId('000000001E5M')
    ->reasonCode('CANCELLED')
    ->build();

$partnerNotificationController->cancelFueling($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 401 | Unauthorized | `ApiException` |

