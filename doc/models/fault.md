
# Fault

## Structure

`Fault`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `faultstring` | `?string` | Optional | The description of the error. | getFaultstring(): ?string | setFaultstring(?string faultstring): void |
| `detail` | [`?Detail`](../../doc/models/detail.md) | Optional | - | getDetail(): ?Detail | setDetail(?Detail detail): void |

## Example (as JSON)

```json
{
  "faultstring": "Invalid ApiKey for given resource",
  "detail": {
    "errorcode": "errorcode6"
  }
}
```

