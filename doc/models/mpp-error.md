
# Mpp Error

## Structure

`MppError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | Descriptive, human readable error message. Description of the error (e.g. This field is required and must to be between 1 and 255 characters long) | getMessage(): ?string | setMessage(?string message): void |
| `reason` | `?string` | Optional | Additional classification specific for each error type e.g. 'noStock'. The nature of the issue (e.g. missing) | getReason(): ?string | setReason(?string reason): void |
| `subject` | `?string` | Optional | Identifier of the related object e.g. '1'. The field/attribute with an issue (e.g. First Name) | getSubject(): ?string | setSubject(?string subject): void |
| `subjectType` | `?string` | Optional | Type of the object related to the error e.g. 'entry'. The item it relates to (e.g. Parameter) | getSubjectType(): ?string | setSubjectType(?string subjectType): void |
| `type` | `?string` | Optional | Type of the error e.g. 'LowStockError', 'Validation Error' | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "message": "message4",
  "reason": "reason8",
  "subject": "subject0",
  "subjectType": "subjectType8",
  "type": "type4"
}
```

