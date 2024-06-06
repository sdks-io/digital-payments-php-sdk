
# Mpp Acces Token Response

## Structure

`MppAccesTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accessToken` | `?string` | Optional | It is the token used in the requests that required to authenticate an user. | getAccessToken(): ?string | setAccessToken(?string accessToken): void |
| `tokenType` | `?string` | Optional | type of token provided<br>**Default**: `'bearer'` | getTokenType(): ?string | setTokenType(?string tokenType): void |
| `expiresIn` | `?int` | Optional | validity of the access token in seconds | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `scope` | `?string` | Optional | scope for the authentication protocol<br>**Default**: `'basic openid'` | getScope(): ?string | setScope(?string scope): void |

## Example (as JSON)

```json
{
  "access_token": "zn2GcAQugJQRJXcGXsmHZ8LMqVde",
  "token_type": "bearer",
  "expires_in": 3599,
  "scope": "basic openid"
}
```

