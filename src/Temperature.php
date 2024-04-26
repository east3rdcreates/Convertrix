<?php

namespace East3rd\Convertrix;

class Temperature
{
    private ?float $temperatureInCelsius = null;

    /**
     * Set the temperature from Fahrenheit.
     *
     * @param float $fahrenheit The temperature in degrees Fahrenheit
     * @return static
     */
    public function fromFahrenheit(float $fahrenheit): static
    {
        $this->temperatureInCelsius = ($fahrenheit - 32) / 1.8;

        return $this;
    }

    /**
     * Set the temperature from Celsius.
     *
     * @param float $celsius The temperature in degrees Celsius
     * @return static
     */
    public function fromCelsius(float $celsius): static
    {
        $this->temperatureInCelsius = $celsius;

        return $this;
    }

    /**
     * Set the temperature from Kelvin.
     *
     * @param float $kelvin The temperature in Kelvin
     * @return static
     */
    public function fromKelvin(float $kelvin): static
    {
        $this->temperatureInCelsius = $kelvin - 273.15;

        return $this;
    }

    /**
     * Get the temperature in Fahrenheit.
     *
     * @return float The temperature in degrees Fahrenheit
     */
    public function toFahrenheit(): float
    {
        return $this->temperatureInCelsius * 1.8 + 32;
    }

    /**
     * Get the temperature in Celsius.
     *
     * @return float The temperature in degrees Celsius
     */
    public function toCelsius(): float
    {
        return $this->temperatureInCelsius;
    }

    /**
     * Get the temperature in Kelvin.
     *
     * @return float The temperature in Kelvin
     */
    public function toKelvin(): float
    {
        return $this->temperatureInCelsius + 273.15;
    }
}
