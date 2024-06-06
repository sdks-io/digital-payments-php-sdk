
# Around Location Array

#Amenities The table below lists all the different types of amenities:
| Code    | Description  
| ------- | --------  
| 1       | ATM  
| 2       | Water Closet or Toilet  
| 3       | Lottery  
| 4       | Select  
| 5       | Shop  
| 6       | Truck Friendly  
| 11      | Bottled Gas  
| 12      | PB Gas  
| 13      | Disabled Facilities  
| 14      | Credit card  
| 16      | Loyalty Card (AIr Miles for NL)  
| 17      | WiFi  
| 19      | Air & Water  
| 20      | Hoover / Vacuum  
| 21      | Pay at pump  
| 24      | Truck Only  
| 25      | Car Wash  
| 26      | Service Bay  
| 902     | External Card Reader  
| 903     | Bakery Shop  
| 907     | Grocery rewards / Partner Loyalty Accepted
| 908     | Food Offerings
| 914     | Shower
| 915     | Vehicle identity system
| 917     | Quick-lube
| 918     | High Speed Diesel
| 919     | Type Of Parking
| 920     | Mobile Payment
| 921     | Disability Assistance
| 922     | 24 Hour Fuel Service
| 923     | Mobile Loyalty
| 1001    | ATM-IN
| 1002    | ATM-OUT
| 1401    | Credit card - Visa
| 1402    | Credit card - Mastercard
| 1403    | Credit card - American Express
| 1404    | Credit card - Diners Club
| 1405    | Credit card - General
| 1505    | Shellcard
| 1506    | Shellcard
| 1507    | Partner card
| 1601    | Club smart card
| 1602    | Gold Club smart card
| 2001    | Water Closet or Toilet - standard
| 2002    | Water Closet or Toilet - child
| 2501    | Conveyor
| 2502    | Jet
| 2503    | Manual
| 2504    | Rollover
| 2505    | Rollover & Jet
| 2506    | Conveyor & Jet
| 5001    | Costa Express
| 5002    | Deli2Go
| 5003    | 2theloo
| 5011    | Tim Hortons
| 5012    | Starbucks
| 5013    | Waitrose
| 5014    | Coca-Cola Freestyle
| 9051    | Fleet card - DKV
| 9052    | Fleet card - UTA
| 9053    | Fleet card - Esso
| 9054    | Fleet card - Eni
| 9055    | Fleet card
| 9061    | austrian highway sticker
| 9062    | Czech highway sticker
| 9063    | Slovak highway sticker
| 9064    | hungarian highway sticker
| 9081    | Snack Food/Quick Food
| 9082    | Sandwich
| 9083    | Burger
| 9084    | Pizza
| 9085    | Hot Food
| 9086    | Cafeteria
| 9087    | Restaurant
| 9088    | Others
| 9101    | Telepass Premium
| 9102    | Sconti BancoPosta
| 9103    | Fuel discount
| 9111    | Full service /Attended Service
| 9112    | Self service
| 9114    | Unmanned
| 9161    | Ido ticket
| 9163    | Toll smart card/Etoll
| 9191    | Parking Lanes
| 9192    | Guarded parking
| 9193    | Truck Parking
| 90735   | Navigator Fleet Loyalty Discount
| 7077    | CRT Shell Card Accepted
| 7022    | Fleet Shell Card Accepted
| 100001  | Single Network Card Accepted
| 100002  | National Network Card Accepted
| 5015    | Third party rental\:Pizza Hut Express
| 5016    | Third party rental\: Budgens
| 5017    | Third party rental\: Deli Cafe
| 5018    | Third party rental\: Amazon Locker
| 5019    | Third party rental\: Deli by Shell
| 9204    | Car Wash MPay
| 9205    | PayTM
| 9241    | AdBlue Pump Truck
| 9242    | AdBlue Pump Passenger vehicles
| 9243    | AdBlue Packed Product
| 999909  | Shop\: Spar Express
| 999910  | Shop\: Migrolino

Error Codes
All request will return a 200 HTTP Response, but the Response will include details of an error if/when an error occurs

## Structure

`AroundLocationArray`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`AroundLocationArrayDataItems[]`](../../doc/models/around-location-array-data-items.md) | Required | An array of station objects | getData(): array | setData(array data): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "12170818",
      "type": 0,
      "name": "Bellandur",
      "addr": "80/2 Outer Ring Road., Bangalore, Karnataka, 560037, India",
      "lat": 12.923333,
      "lon": 77.671389,
      "amen": [
        19,
        9111,
        5,
        922
      ],
      "fuel": [
        11,
        16
      ],
      "loc": {
        "street": "80/2 Outer Ring Road.",
        "pc": "560037",
        "city": "Bangalore",
        "region": "Karnataka",
        "country": "India",
        "ccode": "IN"
      },
      "mpp_station_id": "0",
      "double_site_id": "null",
      "telephone": "9611199089",
      "authorisation_code": "null",
      "mp_preauth": 0,
      "opening_hours": [
        {
          "Closing_From_Hours": "Closing_From_Hours6",
          "Closing_From_Minutes": "Closing_From_Minutes4",
          "Closing_To_Hours": "Closing_To_Hours4",
          "Closing_To_Minutes": "Closing_To_Minutes4",
          "From_Day": "From_Day2"
        }
      ]
    }
  ]
}
```

