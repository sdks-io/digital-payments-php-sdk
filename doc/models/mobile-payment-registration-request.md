
# Mobile Payment Registration Request

## Structure

`MobilePaymentRegistrationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `referenceId` | `string` | Required | Unique Reference ID the DPAN is registered to. The Reference ID has been implemented to accept normal alphanumeric characters plus the following ‘special characters’&colon;  dot, underscore and hyphen. The following characters are not acceptable&colon; , / @ !  &num; & * () | getReferenceId(): string | setReferenceId(string referenceId): void |
| `pan` | `string` | Required | Original card PAN (generated on creation of Card (see Card Order Service)) | getPan(): string | setPan(string pan): void |
| `panExpiry` | `string` | Required | Expiry Date associated with the PAN in format YYMM. | getPanExpiry(): string | setPanExpiry(string panExpiry): void |
| `period` | `int` | Required | Specifies how many months the DPAN should be valid for. If not present, the Token Server determines the expiry date using its default algorithm. Note that the Token Server might not respect this value and use configured business rules to override the requested validity period | getPeriod(): int | setPeriod(int period): void |
| `accountId` | `string` | Required | In Shell, a Payer can have several accounts (representing company branches, divisions or generally different cost-centers that a customer wants to group cards on). You can specify this property or the AccountNumber. | getAccountId(): string | setAccountId(string accountId): void |
| `payerId` | `string` | Required | The Payer Id, or the Customer Id of the Payment Customer. In Shell, a Payer is a customer belonging to a specific market geography. A Payer can have several Accounts; each account can then have different groups of cards. | getPayerId(): string | setPayerId(string payerId): void |
| `colCoId` | `string` | Required | The ID of the Collecting Company (in GFN), also known as Shell Code of the selected payer. This property is mandatory if the ColCoCode code is not passed | getColCoId(): string | setColCoId(string colCoId): void |
| `collectingCompanies` | [`CollectingCompany[]`](../../doc/models/collecting-company.md) | Required | Array of Colco Ids | getCollectingCompanies(): array | setCollectingCompanies(array collectingCompanies): void |

## Example (as JSON)

```json
{
  "referenceId": "caa29807-6fa7-4801-87bb-dd975e2cbf41",
  "pan": "7077141290120180000",
  "panExpiry": "2101",
  "period": 3,
  "AccountId": "8682",
  "PayerId": "8682",
  "ColCoId": "32",
  "CollectingCompanies": [
    {
      "ColCoId": "32"
    }
  ]
}
```

