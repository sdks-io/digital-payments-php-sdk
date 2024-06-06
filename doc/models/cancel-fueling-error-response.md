
# Cancel Fueling Error Response

# Digital Payments – Errors

This section details the structure of the response Body vs. the different types of errors that could be returned when Digital Payments system responds with a 400 Response Code.
| Error Code   | Error Description   | Suggested message to end user   |
|-  |-  |-  |
| 9342   | Transaction not cancelled, Txn number unknown   | Oops sorry! We are unable to cancel the transaction. Please wait for the site to cancel the transaction before you retry   |
| 50004   | Transaction not cancelled, dispensing is already in progress   | Transaction cannot be cancelled, fueling already in progress   |
| 50059   | Transaction not cancelable (not in a 'Processing state')   | Transaction cannot be cancelled, fuel has already been dispensed   |

## Structure

`CancelFuelingErrorResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `?string` | Optional | The high level error code (e.g. missing data) | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorDescription` | `?string` | Optional | The high level error message (e.g. mandatory fields have not been specified. | getErrorDescription(): ?string | setErrorDescription(?string errorDescription): void |
| `errors` | [`?(MppError[])`](../../doc/models/mpp-error.md) | Optional | Array of error objects. Majority of the time the errorCode and errorDescription will suffice | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "errorCode": "errorCode8",
  "errorDescription": "errorDescription8",
  "errors": [
    {
      "message": "message0",
      "reason": "reason4",
      "subject": "subject4",
      "subjectType": "subjectType2",
      "type": "type0"
    }
  ]
}
```

