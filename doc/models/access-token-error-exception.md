
# Access Token Error Exception

## Structure

`AccessTokenErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `?string` | Optional | - | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `error` | `?string` | Optional | - | getError(): ?string | setError(?string error): void |

## Example (as JSON)

```json
{
  "errorCode": "invalid_client",
  "error": "ClientId is Invalid"
}
```

