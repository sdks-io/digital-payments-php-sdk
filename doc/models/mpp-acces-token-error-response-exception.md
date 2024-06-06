
# Mpp Acces Token Error Response Exception

## Structure

`MppAccesTokenErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | `string` | Required | error code or short description | getError(): string | setError(string error): void |
| `errorCode` | `string` | Required | error code or short description due to invalid request or invalid client ID | getErrorCode(): string | setErrorCode(string errorCode): void |
| `errorDescription` | `?string` | Optional | Description of the error | getErrorDescription(): ?string | setErrorDescription(?string errorDescription): void |

## Example (as JSON)

```json
{
  "error": "invalid_request",
  "error_code": "Invalid_client",
  "error_description": "Missing grant type"
}
```

