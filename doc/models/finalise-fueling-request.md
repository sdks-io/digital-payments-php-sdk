
# Finalise Fueling Request

## Structure

`FinaliseFuelingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `siteName` | `?string` | Optional | - | getSiteName(): ?string | setSiteName(?string siteName): void |
| `timestamp` | `?int` | Optional | - | getTimestamp(): ?int | setTimestamp(?int timestamp): void |
| `volumeQuantity` | `?float` | Optional | - | getVolumeQuantity(): ?float | setVolumeQuantity(?float volumeQuantity): void |
| `volumeUnit` | `?string` | Optional | - | getVolumeUnit(): ?string | setVolumeUnit(?string volumeUnit): void |
| `finalPrice` | `?float` | Optional | - | getFinalPrice(): ?float | setFinalPrice(?float finalPrice): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `siteAddress` | `?string` | Optional | - | getSiteAddress(): ?string | setSiteAddress(?string siteAddress): void |
| `originalPrice` | `?float` | Optional | - | getOriginalPrice(): ?float | setOriginalPrice(?float originalPrice): void |
| `discount` | `?float` | Optional | - | getDiscount(): ?float | setDiscount(?float discount): void |
| `payment` | [`?FinaliseFuelingRequestPayment`](../../doc/models/finalise-fueling-request-payment.md) | Optional | - | getPayment(): ?FinaliseFuelingRequestPayment | setPayment(?FinaliseFuelingRequestPayment payment): void |
| `products` | [`?(FinaliseFuelingRequestProductsItems[])`](../../doc/models/finalise-fueling-request-products-items.md) | Optional | - | getProducts(): ?array | setProducts(?array products): void |
| `mppTransactionId` | `?string` | Optional | - | getMppTransactionId(): ?string | setMppTransactionId(?string mppTransactionId): void |

## Example (as JSON)

```json
{
  "siteName": "Pentahof Site B 9997",
  "timestamp": 1548429960631,
  "volumeQuantity": 10.4,
  "volumeUnit": "LTR",
  "finalPrice": 23.3,
  "currency": "GBP",
  "status": "FINISHED",
  "siteAddress": "Test Geman Address",
  "originalPrice": 23.3,
  "discount": 0,
  "mppTransactionId": "000000006KCC"
}
```

