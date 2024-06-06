
# Access Token Response

## Structure

`AccessTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accessToken` | `?string` | Optional | It is the token used for the requests that required an authenticated user. This will be used for all the callback URLs. | getAccessToken(): ?string | setAccessToken(?string accessToken): void |
| `expiresIn` | `?string` | Optional | validity of the access token in seconds | getExpiresIn(): ?string | setExpiresIn(?string expiresIn): void |
| `tokenType` | `?string` | Optional | Type of token provided<br>**Default**: `'Bearer'` | getTokenType(): ?string | setTokenType(?string tokenType): void |

## Example (as JSON)

```json
{
  "access_token": "zn2GcAQugJQRJXcGXsmHZ8LMqVde",
  "expires_in": "3599",
  "token_type": "Bearer"
}
```

