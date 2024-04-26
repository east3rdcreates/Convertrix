<?php

namespace East3rd\Convertrix;

class Volume
{
    private ?float $volumeInLiters = null;

    /**
     * Sets the volume from milliliters
     * 
     * @param float $milliliters The volume in milliliters
     * @return static
     */
    public function fromMilliliters(float $milliliters): static
    {
        $this->volumeInLiters = $milliliters / 1000;

        return $this;
    }

    /**
     * Sets the volume from liters
     * 
     * @param float $liters The volume in liters
     * @return static
     */
    public function fromLiters(float $liters): static
    {
        $this->volumeInLiters = $liters;

        return $this;
    }

    /**
     * Sets the volume from gallons
     * 
     * @param float $gallons The volume in gallons
     * @param string $type The type of gallons (US or UK)
     * @return static
     * @throws \Exception If type is invalid
     */
    public function fromGallons(float $gallons, string $type = 'US'): static
    {
        $this->volumeInLiters = match ($type) {
            'US' => $gallons * 3.785,
            'UK' => $gallons * 4.546,
            default => throw new \Exception('Invalid type'),
        };

        return $this;
    }

    /**
     * Sets the volume from quarts
     * 
     * @param float $quarts The volume in quarts
     * @param string $type The type of quarts (US or UK)
     * @return static
     * @throws \Exception If type is invalid
     */
    public function fromQuarts(float $quarts, string $type = 'US'): static
    {
        $this->volumeInLiters = match ($type) {
            'US' => $quarts * 0.9463,
            'UK' => $quarts * 1.13652,
            default => throw new \Exception('Invalid type'),
        };

        return $this;
    }

    /**
     * Sets the volume from pints
     * 
     * @param float $pints The volume in pints
     * @param string $type The type of pints (US or UK)
     * @return static
     * @throws \Exception If type is invalid
     */
    public function fromPints(float $pints, string $type = 'US'): static
    {
        $this->volumeInLiters = match ($type) {
            'US' => $pints * 0.4731,
            'UK' => $pints * 0.5682,
            default => throw new \Exception('Invalid type'),
        };

        return $this;
    }

    /**
     * Sets the volume from cups
     * 
     * @param float $cups The volume in cups
     * @param string $type The type of cups (US or UK)
     * @return static
     * @throws \Exception If type is invalid
     */
    public function fromCups(float $cups, string $type = 'US'): static
    {
        $this->volumeInLiters = match ($type) {
            'US' => $cups * 0.236,
            'UK' => $cups * 0.24,
            default => throw new \Exception('Invalid type'),
        };

        return $this;
    }

    /**
     * Sets the volume from tablespoons
     * 
     * @param float $tablespoons The volume in tablespoons
     * @return static
     */
    public function fromTablespoons(float $tablespoons): static
    {
        $this->volumeInLiters = $tablespoons / 67.628;

        return $this;
    }

    /**
     * Sets the volume from teaspoons
     * 
     * @param float $teaspoons The volume in teaspoons
     * @return static
     */
    public function fromTeaspoons(float $teaspoons): static
    {
        $this->volumeInLiters = $teaspoons / 202.9;

        return $this;
    }

    /**
     * Returns the volume in milliliters
     * 
     * @return float
     */
    public function toMilliliters(): float
    {
        return $this->volumeInLiters * 1000;
    }

    /**
     * Returns the volume in liters
     * 
     * @return float
     */
    public function toLiters(): float
    {
        return $this->volumeInLiters;
    }

    /**
     * Returns the volume in gallons
     * 
     * @param string $type The type of gallons (US or UK)
     * @return float
     * @throws \Exception If type is invalid
     */
    public function toGallons(string $type = 'US'): float
    {
        return match ($type) {
            'US' => $this->volumeInLiters / 3.785,
            'UK' => $this->volumeInLiters / 4.546,
            default => throw new \Exception('Invalid type'),
        };
    }

    /**
     * Returns the volume in quarts
     * 
     * @param string $type The type of quarts (US or UK)
     * @return float
     * @throws \Exception If type is invalid
     */
    public function toQuarts(string $type = 'US'): float
    {
        return match ($type) {
            'US' => $this->volumeInLiters / 0.946,
            'UK' => $this->volumeInLiters / 1.057,
            default => throw new \Exception('Invalid type'),
        };
    }

    /**
     * Returns the volume in pints
     * 
     * @param string $type The type of pints (US or UK)
     * @return float
     * @throws \Exception If type is invalid
     */
    public function toPints(string $type = 'US'): float
    {
        return match ($type) {
            'US' => $this->volumeInLiters / 0.473,
            'UK' => $this->volumeInLiters / 0.568,
            default => throw new \Exception('Invalid type'),
        };
    }

    /**
     * Returns the volume in cups
     * 
     * @param string $type The type of cups (US or UK)
     * @return float
     * @throws \Exception If type is invalid
     */
    public function toCups(string $type = 'US'): float
    {
        return match ($type) {
            'US' => $this->volumeInLiters / 0.236,
            'UK' => $this->volumeInLiters / 0.24,
            default => throw new \Exception('Invalid type'),
        };
    }

    /**
     * Returns the volume in tablespoons
     * 
     * @return float
     */
    public function toTablespoons(): float
    {
        return $this->volumeInLiters * 67.628;
    }

    /**
     * Returns the volume in teaspoons
     * 
     * @return float
     */
    public function toTeaspoons(): float
    {
        return $this->volumeInLiters * 202.884;
    }
}
