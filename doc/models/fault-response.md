
# Fault Response

An error response.

## Structure

`FaultResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fault` | [`?FaultResponseFault`](../../doc/models/fault-response-fault.md) | Optional | - | getFault(): ?FaultResponseFault | setFault(?FaultResponseFault fault): void |

## Example (as JSON)

```json
{
  "fault": {
    "faultstring": "faultstring2",
    "detail": {
      "errorcode": "errorcode6"
    }
  }
}
```

