
# Finalise Fueling Request Payment

## Structure

`FinaliseFuelingRequestPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `method` | `?string` | Optional | - | getMethod(): ?string | setMethod(?string method): void |
| `cardId` | `?string` | Optional | - | getCardId(): ?string | setCardId(?string cardId): void |
| `cardLastDigits` | `?string` | Optional | - | getCardLastDigits(): ?string | setCardLastDigits(?string cardLastDigits): void |

## Example (as JSON)

```json
{
  "method": "euroShell",
  "cardId": "14661c58-4662-11e9-b210-d663bd873d93",
  "cardLastDigits": "1234"
}
```

