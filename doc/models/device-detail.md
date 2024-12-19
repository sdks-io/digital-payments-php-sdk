
# Device Detail

## Structure

`DeviceDetail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `?string` | Optional | This is the mobile device’s unique ID (Vendor ID for iOS vs. Android ID for Android). This is only used for transactions made via the Shell Mobile App and will therefore be mandatory for requests originating from Shell’s mobile app but can be ignored by all other parties. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `model` | `?string` | Optional | This is the mobile device’s model (machine name/systemInfo for iOS vs. Build.MODEL for Android).  This is only used for transactions made via the Shell Mobile App and will therefore be mandatory for requests originating from Shell’s mobile app but can be ignored by all other parties. | getModel(): ?string | setModel(?string model): void |
| `osVersion` | `?string` | Optional | This is the mobile device’s OS Version. This is only used for transactions made via the Shell Mobile App and will therefore be mandatory for requests originating from Shell’s mobile app but can be ignored by all other parties. | getOsVersion(): ?string | setOsVersion(?string osVersion): void |
| `otherDeviceInformation` | `?string` | Optional | This is only used for transactions made via Android versions of the Shell Mobile App and will therefore be mandatory for requests originating from Shell’s Android mobile app but can be ignored by all other devices and/or parties.<br>This field is used to capture the Shell App build that was used to make this call. | getOtherDeviceInformation(): ?string | setOtherDeviceInformation(?string otherDeviceInformation): void |

## Example (as JSON)

```json
{
  "deviceId": "deviceId4",
  "model": "model2",
  "osVersion": "osVersion4",
  "otherDeviceInformation": "otherDeviceInformation0"
}
```

