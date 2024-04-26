<?php

namespace East3rd\Convertrix;

class Length
{
    private ?float $lengthInMeters = null;

    /**
     * Creates a new Length from the given inches.
     *
     * @param float $inches
     * @return static
     */
    public function fromInches(float $inches): static
    {
        $this->lengthInMeters = $inches / 39.37;

        return $this;
    }

    /**
     * Creates a new Length from the given feet.
     *
     * @param float $feet
     * @return static
     */
    public function fromFeet(float $feet): static
    {
        $this->lengthInMeters = $feet * 0.3048;

        return $this;
    }

    /**
     * Creates a new Length from the given yards.
     *
     * @param float $yards
     * @return static
     */
    public function fromYards(float $yards): static
    {
        $this->lengthInMeters = $yards * 0.9144;

        return $this;
    }

    /**
     * Creates a new Length from the given miles.
     *
     * @param float $miles
     * @return static
     */
    public function fromMiles(float $miles): static
    {
        $this->lengthInMeters = $miles * 1609.344;

        return $this;
    }

    /**
     * Creates a new Length from the given milimeters.
     *
     * @param float $milimeters
     * @return static
     */
    public function fromMilimeters(float $milimeters): static
    {
        $this->lengthInMeters = $milimeters / 1000;

        return $this;
    }

    /**
     * Creates a new Length from the given centimeters.
     *
     * @param float $centimeters
     * @return static
     */
    public function fromCentimeters(float $centimeters): static
    {
        $this->lengthInMeters = $centimeters / 100;

        return $this;
    }

    /**
     * Creates a new Length from the given meters.
     *
     * @param float $meters
     * @return static
     */
    public function fromMeters(float $meters): static
    {
        $this->lengthInMeters = $meters;

        return $this;
    }

    /**
     * Creates a new Length from the given kilometers.
     *
     * @param float $kilometers
     * @return static
     */
    public function fromKilometers(float $kilometers): static
    {
        $this->lengthInMeters = $kilometers * 1000;

        return $this;
    }

    /**
     * Returns the length in inches.
     *
     * @return float
     */
    public function toInches(): float
    {
        return $this->lengthInMeters * 39.37;
    }

    /**
     * Returns the length in feet.
     *
     * @return float
     */
    public function toFeet(): float
    {
        return $this->lengthInMeters / 0.3048;
    }

    /**
     * Returns the length in yards.
     *
     * @return float
     */
    public function toYards(): float
    {
        return $this->lengthInMeters / 0.9144;
    }

    /**
     * Returns the length in miles.
     *
     * @return float
     */
    public function toMiles(): float
    {
        return $this->lengthInMeters / 1609.344;
    }

    /**
     * Returns the length in milimeters.
     *
     * @return float
     */
    public function toMilimeters(): float
    {
        return $this->lengthInMeters * 1000;
    }

    /**
     * Returns the length in centimeters.
     *
     * @return float
     */
    public function toCentimeters(): float
    {
        return $this->lengthInMeters * 100;
    }

    /**
     * Returns the length in meters.
     *
     * @return float
     */
    public function toMeters(): float
    {
        return $this->lengthInMeters;
    }

    /**
     * Returns the length in kilometers.
     *
     * @return float
     */
    public function toKilometers(): float
    {
        return $this->lengthInMeters / 1000;
    }
}

