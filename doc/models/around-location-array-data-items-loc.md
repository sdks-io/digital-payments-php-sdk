
# Around Location Array Data Items Loc

Object containing address details/elements

## Structure

`AroundLocationArrayDataItemsLoc`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `?string` | Optional | The station’s full street address, including building number | getStreet(): ?string | setStreet(?string street): void |
| `pc` | `?string` | Optional | The station’s postcode | getPc(): ?string | setPc(?string pc): void |
| `city` | `?string` | Optional | The city the station is located within | getCity(): ?string | setCity(?string city): void |
| `region` | `?string` | Optional | The region the station is located within | getRegion(): ?string | setRegion(?string region): void |
| `country` | `string` | Required | The name of the country (in English) the station is located within | getCountry(): string | setCountry(string country): void |
| `ccode` | `string` | Required | The two-letter ISO 3166 country code of the country the station is located within | getCcode(): string | setCcode(string ccode): void |

## Example (as JSON)

```json
{
  "street": "80/2 Outer Ring Road.",
  "pc": "560037",
  "city": "Bangalore",
  "region": "Karnataka",
  "country": "India",
  "ccode": "IN"
}
```

