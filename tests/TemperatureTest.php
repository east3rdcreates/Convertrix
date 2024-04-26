<?php

namespace East3rd\Convertrix\Tests;

use East3rd\Convertrix\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{

    public function testFromFahrenheit(): void
    {
        $temperature = (new Temperature())->fromFahrenheit(32);
        $this->assertEquals(0, $temperature->toCelsius());
    }

    public function testFromCelsius(): void
    {
        $temperature = (new Temperature())->fromCelsius(0);
        $this->assertEquals(32, $temperature->toFahrenheit());
    }

    public function testFromKelvin(): void
    {
        $temperature = (new Temperature())->fromKelvin(273.15);
        $this->assertEquals(0, $temperature->toCelsius());
    }

    public function testToFahrenheit(): void
    {
        $temperature = (new Temperature())->fromCelsius(0);
        $this->assertEquals(32, $temperature->toFahrenheit());
    }

    public function testToCelsius(): void
    {
        $temperature = (new Temperature())->fromFahrenheit(32);
        $this->assertEquals(0, $temperature->toCelsius());
    }

    public function testToKelvin(): void
    {
        $temperature = (new Temperature())->fromCelsius(0);
        $this->assertEquals(273.15, $temperature->toKelvin());
    }
    
}