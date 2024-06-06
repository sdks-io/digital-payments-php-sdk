<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class AroundLocationArrayDataItemsOpeningHoursItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $closingFromHours;

    /**
     * @var string|null
     */
    private $closingFromMinutes;

    /**
     * @var string|null
     */
    private $closingToHours;

    /**
     * @var string|null
     */
    private $closingToMinutes;

    /**
     * @var string|null
     */
    private $fromDay;

    /**
     * @var string|null
     */
    private $openingFromHours;

    /**
     * @var string|null
     */
    private $openingFromMinutes;

    /**
     * @var string|null
     */
    private $openingToHours;

    /**
     * @var string|null
     */
    private $openingToMinutes;

    /**
     * @var string|null
     */
    private $toDay;

    /**
     * Returns Closing From Hours.
     */
    public function getClosingFromHours(): ?string
    {
        return $this->closingFromHours;
    }

    /**
     * Sets Closing From Hours.
     *
     * @maps Closing_From_Hours
     */
    public function setClosingFromHours(?string $closingFromHours): void
    {
        $this->closingFromHours = $closingFromHours;
    }

    /**
     * Returns Closing From Minutes.
     */
    public function getClosingFromMinutes(): ?string
    {
        return $this->closingFromMinutes;
    }

    /**
     * Sets Closing From Minutes.
     *
     * @maps Closing_From_Minutes
     */
    public function setClosingFromMinutes(?string $closingFromMinutes): void
    {
        $this->closingFromMinutes = $closingFromMinutes;
    }

    /**
     * Returns Closing to Hours.
     */
    public function getClosingToHours(): ?string
    {
        return $this->closingToHours;
    }

    /**
     * Sets Closing to Hours.
     *
     * @maps Closing_To_Hours
     */
    public function setClosingToHours(?string $closingToHours): void
    {
        $this->closingToHours = $closingToHours;
    }

    /**
     * Returns Closing to Minutes.
     */
    public function getClosingToMinutes(): ?string
    {
        return $this->closingToMinutes;
    }

    /**
     * Sets Closing to Minutes.
     *
     * @maps Closing_To_Minutes
     */
    public function setClosingToMinutes(?string $closingToMinutes): void
    {
        $this->closingToMinutes = $closingToMinutes;
    }

    /**
     * Returns From Day.
     */
    public function getFromDay(): ?string
    {
        return $this->fromDay;
    }

    /**
     * Sets From Day.
     *
     * @maps From_Day
     */
    public function setFromDay(?string $fromDay): void
    {
        $this->fromDay = $fromDay;
    }

    /**
     * Returns Opening From Hours.
     */
    public function getOpeningFromHours(): ?string
    {
        return $this->openingFromHours;
    }

    /**
     * Sets Opening From Hours.
     *
     * @maps Opening_From_Hours
     */
    public function setOpeningFromHours(?string $openingFromHours): void
    {
        $this->openingFromHours = $openingFromHours;
    }

    /**
     * Returns Opening From Minutes.
     */
    public function getOpeningFromMinutes(): ?string
    {
        return $this->openingFromMinutes;
    }

    /**
     * Sets Opening From Minutes.
     *
     * @maps Opening_From_Minutes
     */
    public function setOpeningFromMinutes(?string $openingFromMinutes): void
    {
        $this->openingFromMinutes = $openingFromMinutes;
    }

    /**
     * Returns Opening to Hours.
     */
    public function getOpeningToHours(): ?string
    {
        return $this->openingToHours;
    }

    /**
     * Sets Opening to Hours.
     *
     * @maps Opening_To_Hours
     */
    public function setOpeningToHours(?string $openingToHours): void
    {
        $this->openingToHours = $openingToHours;
    }

    /**
     * Returns Opening to Minutes.
     */
    public function getOpeningToMinutes(): ?string
    {
        return $this->openingToMinutes;
    }

    /**
     * Sets Opening to Minutes.
     *
     * @maps Opening_To_Minutes
     */
    public function setOpeningToMinutes(?string $openingToMinutes): void
    {
        $this->openingToMinutes = $openingToMinutes;
    }

    /**
     * Returns To Day.
     */
    public function getToDay(): ?string
    {
        return $this->toDay;
    }

    /**
     * Sets To Day.
     *
     * @maps To_Day
     */
    public function setToDay(?string $toDay): void
    {
        $this->toDay = $toDay;
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
        if (isset($this->closingFromHours)) {
            $json['Closing_From_Hours']   = $this->closingFromHours;
        }
        if (isset($this->closingFromMinutes)) {
            $json['Closing_From_Minutes'] = $this->closingFromMinutes;
        }
        if (isset($this->closingToHours)) {
            $json['Closing_To_Hours']     = $this->closingToHours;
        }
        if (isset($this->closingToMinutes)) {
            $json['Closing_To_Minutes']   = $this->closingToMinutes;
        }
        if (isset($this->fromDay)) {
            $json['From_Day']             = $this->fromDay;
        }
        if (isset($this->openingFromHours)) {
            $json['Opening_From_Hours']   = $this->openingFromHours;
        }
        if (isset($this->openingFromMinutes)) {
            $json['Opening_From_Minutes'] = $this->openingFromMinutes;
        }
        if (isset($this->openingToHours)) {
            $json['Opening_To_Hours']     = $this->openingToHours;
        }
        if (isset($this->openingToMinutes)) {
            $json['Opening_To_Minutes']   = $this->openingToMinutes;
        }
        if (isset($this->toDay)) {
            $json['To_Day']               = $this->toDay;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
