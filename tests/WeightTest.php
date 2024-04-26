<?php

namespace East3rd\Convertrix\Tests;

use East3rd\Convertrix\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    public function testFromGrams(): void
    {
        $weight = (new Weight)->fromGrams(100);
        $this->assertEquals(100, $weight->toGrams());
    }

    public function testToPounds(): void
    {
        $weight = (new Weight)->fromGrams(453.592);
        $this->assertEquals(1, $weight->toPounds());
    }

    public function testToOunces(): void
    {
        $weight = (new Weight)->fromGrams(28.3495);
        $this->assertEquals(1, $weight->toOunces());
    }

    public function testToKilograms(): void
    {
        $weight = (new Weight)->fromGrams(1000);
        $this->assertEquals(1, $weight->toKilograms());
    }

    public function testFromKilograms(): void
    {
        $weight = (new Weight)->fromKilograms(1);
        $this->assertEquals(1000, $weight->toGrams());
    }

    public function testFromMiligrams(): void
    {
        $weight = (new Weight)->fromMiligrams(1000);
        $this->assertEquals(1, $weight->toGrams());
    }

    public function testFromPounds(): void
    {
        $weight = (new Weight)->fromPounds(1);
        $this->assertEquals(453.592, $weight->toGrams());
    }

    public function testFromOunces(): void
    {
        $weight = (new Weight)->fromOunces(1);
        $this->assertEquals(28.3495, $weight->toGrams());
    }

}