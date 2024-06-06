
# Prepare Fueling Request

## Structure

`PrepareFuelingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `float` | Required | The user’s current latitude | getLatitude(): float | setLatitude(float latitude): void |
| `longitude` | `float` | Required | The user’s current longitude | getLongitude(): float | setLongitude(float longitude): void |
| `maximumFuelingAmount` | `?float` | Optional | The maximum fuelling amount that can be purchased. If the prepare fuelling is successful and the Customer starts fuelling their car, the pump will cut off once this threshold is reached. For B2B customers a maximum ceiling is set against their Shell Card. As a result, this can be left blank for B2B customers. If a value is provided it cannot be zero or lower and values that exceed ceiling will be ignored. | getMaximumFuelingAmount(): ?float | setMaximumFuelingAmount(?float maximumFuelingAmount): void |
| `stationId` | `string` | Required | Expectation is that a user has to be located at a Shell petrol station in order to make this call. A user is recognised as being located at a Shell station if the user’s current location (as determined by GPS) is within 300 meters of a Shell station. Expectation is that requester will have established the Shell petrol station the user is located at prior to making this call by calling Station Locator APIs. The API will use stationId and siteCountry/GPS to verify the user is The user’s current latitude genuinely located at the specified Station. ‘mpp_station_id’ of the Station Locator API should be used. Leading ‘0’ should be dropped and only last four digits, should be used. E.G. for ‘00123’, only ‘0123’ should be used and for ‘04567’ only ‘4567’ should be used. | getStationId(): string | setStationId(string stationId): void |
| `pumpId` | `string` | Required | A two digit numeric number of the pump as marked on the forecourt (e.g. pump number 12) | getPumpId(): string | setPumpId(string pumpId): void |
| `loyaltyDetails` | [`?(LoyaltyDetails[])`](../../doc/models/loyalty-details.md) | Optional | Object containing Loyalty details | getLoyaltyDetails(): ?array | setLoyaltyDetails(?array loyaltyDetails): void |
| `sourceApplication` | `string` | Required | The ID of the source application making this call. Each 3rd Party will be issued with its own sourceApp ID that must be specified correctly here<br><br>* 3rdParty_App_Archetype | getSourceApplication(): string | setSourceApplication(string sourceApplication): void |
| `deviceType` | `?string` | Optional | The type of device making this call. Permitted values for deviceType:<br><br>* car<br>* phone | getDeviceType(): ?string | setDeviceType(?string deviceType): void |
| `paymentDetails` | [`PaymentDetailsItems[]`](../../doc/models/payment-details-items.md) | Required | Object containing Payment details | getPaymentDetails(): array | setPaymentDetails(array paymentDetails): void |
| `deviceDetails` | [`?(PrepareFuelingRequestDeviceDetailsItems[])`](../../doc/models/prepare-fueling-request-device-details-items.md) | Optional | Object containing device details | getDeviceDetails(): ?array | setDeviceDetails(?array deviceDetails): void |

## Example (as JSON)

```json
{
  "latitude": 12.92452,
  "longitude": 77.68862,
  "stationId": "9955",
  "pumpId": "1",
  "sourceApplication": "PARTNER_APP_EXAMPLE",
  "loyaltyDetails": [
    {
      "loyaltyId": "70043201060148830",
      "loyaltyType": "Shell"
    }
  ],
  "paymentDetails": [
    {
      "paymentMethodId": "euroShell",
      "paymentProperties": {
        "cardIdentifier": "98e4ffd3-4146-4e94-8445-e02f4ce87a77",
        "paymentType": "paymentType8",
        "clientMetadataId": "clientMetadataId2",
        "token": "token8",
        "identifier": "identifier4",
        "network": "network4"
      },
      "paymentCategory": "paymentCategory6"
    }
  ],
  "maximumFuelingAmount": 52.08,
  "deviceType": "deviceType6",
  "deviceDetails": [
    {
      "deviceId": "deviceId4",
      "model": "model2",
      "osVersion": "osVersion4",
      "otherDeviceInformation": "otherDeviceInformation0"
    },
    {
      "deviceId": "deviceId4",
      "model": "model2",
      "osVersion": "osVersion4",
      "otherDeviceInformation": "otherDeviceInformation0"
    }
  ]
}
```

