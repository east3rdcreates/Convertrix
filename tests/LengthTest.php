<?php

namespace East3rd\Convertrix\Tests;

use East3rd\Convertrix\Length;
use PHPUnit\Framework\TestCase;

class LengthTest extends TestCase
{

    public function testFromInches(): void
    {
        $length = (new Length())->fromInches(10);
        $this->assertEquals(0.254, round($length->toMeters(), 3));
    }

    public function testFromFeet(): void
    {
        $length = (new Length())->fromFeet(10);
        $this->assertEquals(3.048, $length->toMeters());
    }

    public function testFromYards(): void
    {
        $length = (new Length())->fromYards(10);
        $this->assertEquals(9.144, $length->toMeters());
    }

    public function testFromMiles(): void
    {
        $length = (new Length())->fromMiles(10);
        $this->assertEquals(16093.44, $length->toMeters());
    }

    public function testFromMilimeters(): void
    {
        $length = (new Length())->fromMilimeters(10000);
        $this->assertEquals(10, $length->toMeters());
    }

    public function testFromCentimeters(): void
    {
        $length = (new Length())->fromCentimeters(1000);
        $this->assertEquals(10, $length->toMeters());
    }

    public function testFromMeters(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(10, $length->toMeters());
    }

    public function testFromKilometers(): void
    {
        $length = (new Length())->fromKilometers(10);
        $this->assertEquals(10000, $length->toMeters());
    }

    public function testToInches(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(393.7, $length->toInches());
    }

    public function testToFeet(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(32.8084, round($length->toFeet(), 4));
    }

    public function testToYards(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(10.9361, round($length->toYards(), 4));
    }

    public function testToMiles(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(0.00621371, round($length->toMiles(), 8));
    }

    public function testToMilimeters(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(10000, $length->toMilimeters());
    }

    public function testToCentimeters(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(1000, $length->toCentimeters());
    }

    public function testToMeters(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(10, $length->toMeters());
    }

    public function testToKilometers(): void
    {
        $length = (new Length())->fromMeters(10);
        $this->assertEquals(0.01, $length->toKilometers());
    }
}