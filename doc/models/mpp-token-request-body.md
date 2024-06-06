
# Mpp Token Request Body

## Structure

`MppTokenRequestBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `grantType` | `string` | Required | In OAuth 2.0, the term grant type refers to the way an application gets an access token. OAuth 2.0 defines several grant types, including the authorization code flow. | getGrantType(): string | setGrantType(string grantType): void |
| `clientId` | `string` | Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. | getClientId(): string | setClientId(string clientId): void |
| `clientSecret` | `string` | Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. The client secret must be kept confidential. | getClientSecret(): string | setClientSecret(string clientSecret): void |

## Example (as JSON)

```json
{
  "grant_type": "client_credentials",
  "client_id": "b2bmpp-cli",
  "client_secret": "f20935d8f14a44bd1f0923cc4c4fa63f7b25922330cd5080f735f1a2769ece77ce245cfe8ba4cbd2a58544ee5113c200b8e37a7be33311e4b6f3c785bf3f37d2"
}
```

