<?php

namespace East3rd\Convertrix;

class Weight
{
    private ?float $weightInGrams = null;

    /**
     * Sets the stored weight from kilograms.
     *
     * @param float $kilograms The weight value in kilograms.
     * @return static
     */
    public function fromKilograms(float $kilograms): static
    {
        $this->weightInGrams = $kilograms * 1000;

        return $this;
    }

    /**
     * Sets the stored weight from miligrams.
     *
     * @param float $miligrams The weight value in miligrams.
     * @return static
     */
    public function fromMiligrams(float $miligrams): static
    {
        $this->weightInGrams = $miligrams / 1000;

        return $this;
    }

    /**
     * Sets the stored weight from pounds.
     *
     * @param float $pounds The weight value in pounds.
     * @return static
     */
    public function fromPounds(float $pounds): static
    {
        $this->weightInGrams = $pounds * 453.592;

        return $this;
    }

    /**
     * Sets the stored weight from ounces.
     *
     * @param float $ounces The weight value in ounces.
     * @return static
     */
    public function fromOunces(float $ounces): static
    {
        $this->weightInGrams = $ounces * 28.3495;

        return $this;
    }

    /**
     * Sets the stored weight from grams.
     *
     * @param float $grams The weight value in grams.
     * @return static
     */
    public function fromGrams(float $grams): static
    {
        $this->weightInGrams = $grams;

        return $this;
    }

    /**
     * Return the weight in pounds.
     *
     * @return float The weight value in pounds.
     */
    public function toPounds(): float
    {
        return $this->weightInGrams / 453.592;
    }

    /**
     * Return the weight in ounces.
     *
     * @return float The weight value in ounces.
     */
    public function toOunces(): float
    {
        return $this->weightInGrams / 28.3495;
    }

    /**
     * Return the weight in grams.
     *
     * @return float The weight value in grams.
     */
    public function toGrams(): float
    {
        return $this->weightInGrams;
    }

    /**
     * Return the weight in kilograms.
     *
     * @return float The weight value in kilograms.
     */
    public function toKilograms(): float
    {
        return $this->weightInGrams / 1000;
    }

    /**
     * Return the weight in miligrams.
     *
     * @return float The weight value in miligrams.
     */
    public function toMiligrams(): float
    {
        return $this->weightInGrams * 1000;
    }
}
