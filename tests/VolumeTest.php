<?php

namespace East3rd\Convertrix\Tests;

use East3rd\Convertrix\Volume;
use PHPUnit\Framework\TestCase;

class VolumeTest extends TestCase
{
    public function testFromMilliliters(): void
    {
        $volume = (new Volume())->fromMilliliters(1000);

        $this->assertEquals(1, $volume->toLiters());
    }

    public function testFromLiters(): void
    {
        $volume = (new Volume())->fromLiters(1);

        $this->assertEquals(1, $volume->toLiters());
    }

    public function testFromGallons(): void
    {
        $volume = (new Volume())->fromGallons(1, 'US');

        $this->assertEquals(3.785, $volume->toLiters());
    }

    public function testFromQuarts(): void
    {
        $volume = (new Volume())->fromQuarts(1, 'US');

        $this->assertEquals(0.9463, $volume->toLiters());
    }

    public function testFromPints(): void
    {
        $volume = (new Volume())->fromPints(1, 'US');

        $this->assertEquals(0.4731, $volume->toLiters());
    }

    public function testFromCups(): void
    {
        $volume = (new Volume())->fromCups(1, 'US');

        $this->assertEquals(0.236, $volume->toLiters());
    }

    public function testFromTablespoons(): void
    {
        $volume = (new Volume())->fromTablespoons(1);

        $this->assertEquals(0.01479, round($volume->toLiters(), 5));
    }

    public function testFromTeaspoons(): void
    {
        $volume = (new Volume())->fromTeaspoons(1);

        $this->assertEquals(0.005, round($volume->toLiters(), 3));
    }

    public function testToMilliliters(): void
    {
        $volume = (new Volume())->fromLiters(1);

        $this->assertEquals(1000, $volume->toMilliliters());
    }

    public function testToLiters(): void
    {
        $volume = (new Volume())->fromMilliliters(1000);

        $this->assertEquals(1, $volume->toLiters());
    }

    public function testToGallons(): void
    {
        $volume = (new Volume())->fromLiters(3.785);

        $this->assertEquals(1, $volume->toGallons('US'));
    }

    public function testToQuarts(): void
    {
        $volume = (new Volume())->fromLiters(1);

        $this->assertEquals(1.057, round($volume->toQuarts('US'), 3));
    }

    public function testToPints(): void
    {
        $volume = (new Volume())->fromLiters(1);

        $this->assertEquals(2.114, round($volume->toPints('US'), 3));
    }

    public function testToCups(): void
    {
        $volume = (new Volume())->fromLiters(0.236);

        $this->assertEquals(1, $volume->toCups('US'));
    }

    public function testToTablespoons(): void
    {
        $volume = (new Volume())->fromLiters(1);

        $this->assertEquals(67.628, $volume->toTablespoons());
    }

    public function testToTeaspoons(): void
    {
        $volume = (new Volume())->fromLiters(1);

        $this->assertEquals(202.884, $volume->toTeaspoons());
    }
}
