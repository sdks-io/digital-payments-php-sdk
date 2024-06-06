<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class AroundLocationArrayDataItems implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $addr;

    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $lon;

    /**
     * @var int[]
     */
    private $amen;

    /**
     * @var int[]
     */
    private $fuel;

    /**
     * @var AroundLocationArrayDataItemsLoc
     */
    private $loc;

    /**
     * @var string
     */
    private $mppStationId;

    /**
     * @var string|null
     */
    private $doubleSiteId;

    /**
     * @var AroundLocationArrayDataItemsOpeningHoursItems[]|null
     */
    private $openingHours;

    /**
     * @var string|null
     */
    private $telephone;

    /**
     * @var string|null
     */
    private $authorisationCode;

    /**
     * @var int|null
     */
    private $mpPreauth;

    /**
     * @param string $id
     * @param int $type
     * @param string $name
     * @param string $addr
     * @param float $lat
     * @param float $lon
     * @param int[] $amen
     * @param int[] $fuel
     * @param AroundLocationArrayDataItemsLoc $loc
     * @param string $mppStationId
     */
    public function __construct(
        string $id,
        int $type,
        string $name,
        string $addr,
        float $lat,
        float $lon,
        array $amen,
        array $fuel,
        AroundLocationArrayDataItemsLoc $loc,
        string $mppStationId
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->addr = $addr;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->amen = $amen;
        $this->fuel = $fuel;
        $this->loc = $loc;
        $this->mppStationId = $mppStationId;
    }

    /**
     * Returns Id.
     * The station’s unique site identifier – this must be ignored
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The station’s unique site identifier – this must be ignored
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Type.
     * All fuel stations are of at least one Type, indicating whether it is Shell-branded or not, and if
     * the
     * station can be used by trucks. Note that a station can have more than one Type (e.g. Shell retail
     * sites (Type=0) can also be truck friendly (Type=2)).
     * Type values are as follows:
     * *  0 = Shell owned/branded stations that are not also Type=2 or Type=3
     * *  1 = Partner stations accepting Shell Card
     * *  2 = Shell owned/branded stations that are truck friendly but not Type=3
     * *  3 = Shell owned/branded stations that are truck only
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * All fuel stations are of at least one Type, indicating whether it is Shell-branded or not, and if
     * the
     * station can be used by trucks. Note that a station can have more than one Type (e.g. Shell retail
     * sites (Type=0) can also be truck friendly (Type=2)).
     * Type values are as follows:
     * *  0 = Shell owned/branded stations that are not also Type=2 or Type=3
     * *  1 = Partner stations accepting Shell Card
     * *  2 = Shell owned/branded stations that are truck friendly but not Type=3
     * *  3 = Shell owned/branded stations that are truck only
     *
     * @required
     * @maps type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Name.
     * The name of the site
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the site
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Addr.
     * The side address as a concatenation of address information
     */
    public function getAddr(): string
    {
        return $this->addr;
    }

    /**
     * Sets Addr.
     * The side address as a concatenation of address information
     *
     * @required
     * @maps addr
     */
    public function setAddr(string $addr): void
    {
        $this->addr = $addr;
    }

    /**
     * Returns Lat.
     * The site’s latitude
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * Sets Lat.
     * The site’s latitude
     *
     * @required
     * @maps lat
     */
    public function setLat(float $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * Returns Lon.
     * The site’s longitude
     */
    public function getLon(): float
    {
        return $this->lon;
    }

    /**
     * Sets Lon.
     * The site’s longitude
     *
     * @required
     * @maps lon
     */
    public function setLon(float $lon): void
    {
        $this->lon = $lon;
    }

    /**
     * Returns Amen.
     * An array of amenities available at the station (see above for complete list)
     *
     * @return int[]
     */
    public function getAmen(): array
    {
        return $this->amen;
    }

    /**
     * Sets Amen.
     * An array of amenities available at the station (see above for complete list)
     *
     * @required
     * @maps amen
     *
     * @param int[] $amen
     */
    public function setAmen(array $amen): void
    {
        $this->amen = $amen;
    }

    /**
     * Returns Fuel.
     * An array of fuels* available at the station.
     * Global Product Group names:
     * *  8 = CNG
     * *  10 = Premium Gasoline
     * *  11 = Premium Diesel
     * *  12 = Fuelsave Midgrade Gasoline
     * *  13 = Fuelsave Regular Diesel
     * *  14 = Midgrade Gasoline
     * *  15 = Low Octane gasoline
     * *  16 = Regular Diesel
     * *  17 = Autogas LPG
     * *  18 = Auto/RV Propane
     * *  20 = Hydrogen
     * *  21 = Kerosene
     * *  22 = Super Premium Gasoline
     * *  23 = Unleaded Super
     * *  24 = Truck Diesel
     * *  25 = Super98
     * *  26 = GTL
     * *  27 = Fuelsave 98
     * *  28 = LNG
     * *  29 = DieselFit
     * *  30 = Shell Recharge
     *
     * *An external mapping table may need to be maintained if it is required to display true fuel product
     * names (as visible on the site)
     *
     * @return int[]
     */
    public function getFuel(): array
    {
        return $this->fuel;
    }

    /**
     * Sets Fuel.
     * An array of fuels* available at the station.
     * Global Product Group names:
     * *  8 = CNG
     * *  10 = Premium Gasoline
     * *  11 = Premium Diesel
     * *  12 = Fuelsave Midgrade Gasoline
     * *  13 = Fuelsave Regular Diesel
     * *  14 = Midgrade Gasoline
     * *  15 = Low Octane gasoline
     * *  16 = Regular Diesel
     * *  17 = Autogas LPG
     * *  18 = Auto/RV Propane
     * *  20 = Hydrogen
     * *  21 = Kerosene
     * *  22 = Super Premium Gasoline
     * *  23 = Unleaded Super
     * *  24 = Truck Diesel
     * *  25 = Super98
     * *  26 = GTL
     * *  27 = Fuelsave 98
     * *  28 = LNG
     * *  29 = DieselFit
     * *  30 = Shell Recharge
     *
     * *An external mapping table may need to be maintained if it is required to display true fuel product
     * names (as visible on the site)
     *
     * @required
     * @maps fuel
     *
     * @param int[] $fuel
     */
    public function setFuel(array $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * Returns Loc.
     * Object containing address details/elements
     */
    public function getLoc(): AroundLocationArrayDataItemsLoc
    {
        return $this->loc;
    }

    /**
     * Sets Loc.
     * Object containing address details/elements
     *
     * @required
     * @maps loc
     */
    public function setLoc(AroundLocationArrayDataItemsLoc $loc): void
    {
        $this->loc = $loc;
    }

    /**
     * Returns Mpp Station Id.
     * This is the 5-digit Shell Station ID. Leading ‘0’ should be dropped and only last four digits,
     * should be used. E.G. for ‘00123’, only ‘0123’ should be used and for ‘04567’ only ‘4567’ should be
     * used.
     */
    public function getMppStationId(): string
    {
        return $this->mppStationId;
    }

    /**
     * Sets Mpp Station Id.
     * This is the 5-digit Shell Station ID. Leading ‘0’ should be dropped and only last four digits,
     * should be used. E.G. for ‘00123’, only ‘0123’ should be used and for ‘04567’ only ‘4567’ should be
     * used.
     *
     * @required
     * @maps mpp_station_id
     */
    public function setMppStationId(string $mppStationId): void
    {
        $this->mppStationId = $mppStationId;
    }

    /**
     * Returns Double Site Id.
     * The Mobile Payment Platform recognises a user being located at a Shell Station if their GPS is
     * within 300m of a Shell station. Some locations will return multiple Shell Stations within a 300
     * meter radius. This is an issue for Mobile Payments as it needs  to accurately identify the station
     * the Customer is located at to ensure the correct pump is released
     *
     * In Germany such locations have been identified and each Station has been assigned a unique letter (e.
     * g. A, B, C). These letters are clearly visible at the stations. If a Mobile Payments user is located
     * at such a location, they will need to identify the Station by identifying and specifying the
     * Station’s corresponding letter as part of the refuelling journey.
     *
     * The double_site_id is used to store the Stations unique letter/ID value. It’s only populated if/when
     * 1 or more stations are within 300m from this station.
     */
    public function getDoubleSiteId(): ?string
    {
        return $this->doubleSiteId;
    }

    /**
     * Sets Double Site Id.
     * The Mobile Payment Platform recognises a user being located at a Shell Station if their GPS is
     * within 300m of a Shell station. Some locations will return multiple Shell Stations within a 300
     * meter radius. This is an issue for Mobile Payments as it needs  to accurately identify the station
     * the Customer is located at to ensure the correct pump is released
     *
     * In Germany such locations have been identified and each Station has been assigned a unique letter (e.
     * g. A, B, C). These letters are clearly visible at the stations. If a Mobile Payments user is located
     * at such a location, they will need to identify the Station by identifying and specifying the
     * Station’s corresponding letter as part of the refuelling journey.
     *
     * The double_site_id is used to store the Stations unique letter/ID value. It’s only populated if/when
     * 1 or more stations are within 300m from this station.
     *
     * @maps double_site_id
     */
    public function setDoubleSiteId(?string $doubleSiteId): void
    {
        $this->doubleSiteId = $doubleSiteId;
    }

    /**
     * Returns Opening Hours.
     * An Array of the station’s opening hours. This may have opening and closing times in hours, minutes
     * and the day of the week.
     *
     * @return AroundLocationArrayDataItemsOpeningHoursItems[]|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->openingHours;
    }

    /**
     * Sets Opening Hours.
     * An Array of the station’s opening hours. This may have opening and closing times in hours, minutes
     * and the day of the week.
     *
     * @maps opening_hours
     *
     * @param AroundLocationArrayDataItemsOpeningHoursItems[]|null $openingHours
     */
    public function setOpeningHours(?array $openingHours): void
    {
        $this->openingHours = $openingHours;
    }

    /**
     * Returns Telephone.
     * Station’s contact telephone number
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * Sets Telephone.
     * Station’s contact telephone number
     *
     * @maps telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * Returns Authorisation Code.
     * Station’s authorisation code
     */
    public function getAuthorisationCode(): ?string
    {
        return $this->authorisationCode;
    }

    /**
     * Sets Authorisation Code.
     * Station’s authorisation code
     *
     * @maps authorisation_code
     */
    public function setAuthorisationCode(?string $authorisationCode): void
    {
        $this->authorisationCode = $authorisationCode;
    }

    /**
     * Returns Mp Preauth.
     * Station’s mobile payment preauthorisation value
     */
    public function getMpPreauth(): ?int
    {
        return $this->mpPreauth;
    }

    /**
     * Sets Mp Preauth.
     * Station’s mobile payment preauthorisation value
     *
     * @maps mp_preauth
     */
    public function setMpPreauth(?int $mpPreauth): void
    {
        $this->mpPreauth = $mpPreauth;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']                     = $this->id;
        $json['type']                   = $this->type;
        $json['name']                   = $this->name;
        $json['addr']                   = $this->addr;
        $json['lat']                    = $this->lat;
        $json['lon']                    = $this->lon;
        $json['amen']                   = $this->amen;
        $json['fuel']                   = $this->fuel;
        $json['loc']                    = $this->loc;
        $json['mpp_station_id']         = $this->mppStationId;
        if (isset($this->doubleSiteId)) {
            $json['double_site_id']     = $this->doubleSiteId;
        }
        if (isset($this->openingHours)) {
            $json['opening_hours']      = $this->openingHours;
        }
        if (isset($this->telephone)) {
            $json['telephone']          = $this->telephone;
        }
        if (isset($this->authorisationCode)) {
            $json['authorisation_code'] = $this->authorisationCode;
        }
        if (isset($this->mpPreauth)) {
            $json['mp_preauth']         = $this->mpPreauth;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
