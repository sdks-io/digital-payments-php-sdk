
# Loyalty Details

## Structure

`LoyaltyDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `loyaltyId` | `string` | Required | The user’s Loyalty card number. Although this is optional the expectation is that if this is specified then loyaltyType must also be specified | getLoyaltyId(): string | setLoyaltyId(string loyaltyId): void |
| `loyaltyType` | `string` | Required | Loyalty type being used, associated to the loyalty ID being passed. Possible values are 'Shell' | getLoyaltyType(): string | setLoyaltyType(string loyaltyType): void |

## Example (as JSON)

```json
{
  "loyaltyId": "70043201060148830",
  "loyaltyType": "Shell"
}
```

