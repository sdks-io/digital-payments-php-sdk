
# Oauth Token Post Request Body

## Structure

`OauthTokenPostRequestBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `grantType` | `string` | Required | In OAuth 2.0, the term grant typee refers to the way an application gets an access token. OAuth 2.0 defines several grant types, including the authorization code flow.<br>**Default**: `'client_credentials'` | getGrantType(): string | setGrantType(string grantType): void |
| `clientId` | `string` | Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page.<br>**Default**: `'SOFflRakNlwnWlxfOXQ4GHDVyqGawuKA'` | getClientId(): string | setClientId(string clientId): void |
| `clientSecret` | `string` | Required | After registering your app, you will receive a client ID and a client secret. The client ID is considered public information, and is used to build login URLs, or included in Javascript source code on a page. The client secret must be kept confidential.<br>**Default**: `'cRnWgw7gACqM3gVS'` | getClientSecret(): string | setClientSecret(string clientSecret): void |

## Example (as JSON)

```json
{
  "grant_type": "client_credentials",
  "client_id": "SOFflRakNlwnWlxfOXQ4GHDVyqGawuKA",
  "client_secret": "cRnWgw7gACqM3gVS"
}
```

