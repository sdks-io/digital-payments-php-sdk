# Shell API Platform Security Authentication

```php
$shellAPIPlatformSecurityAuthenticationController = $client->getShellAPIPlatformSecurityAuthenticationController();
```

## Class Name

`ShellAPIPlatformSecurityAuthenticationController`


# Oauth Token Post

To obtain APIGEE access token

:information_source: **Note** This endpoint does not require authentication.

```php
function oauthTokenPost(string $grantType, string $clientId, string $clientSecret): AccessTokenResponse
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

$result = $shellAPIPlatformSecurityAuthenticationController->oauthTokenPost(
    $grantType,
    $clientId,
    $clientSecret
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`AccessTokenErrorException`](../../doc/models/access-token-error-exception.md) |

