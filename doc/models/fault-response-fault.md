
# Fault Response Fault

## Structure

`FaultResponseFault`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `faultstring` | `?string` | Optional | The description of the error. | getFaultstring(): ?string | setFaultstring(?string faultstring): void |
| `detail` | [`?FaultResponseFaultDetail`](../../doc/models/fault-response-fault-detail.md) | Optional | - | getDetail(): ?FaultResponseFaultDetail | setDetail(?FaultResponseFaultDetail detail): void |

## Example (as JSON)

```json
{
  "faultstring": "Invalid ApiKey for given resource",
  "detail": {
    "errorcode": "errorcode6"
  }
}
```

