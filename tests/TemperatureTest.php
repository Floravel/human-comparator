<?php


namespace Floravel\HumanComparator\Tests;

use Floravel\HumanComparator\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();
        $temperature = Temperature::forCelsius(2);

        $this->assertIsObject($temperature);
        $this->assertEquals(212, $fahrenheit);
        $this->assertEquals(35.6, $temperature->toFahrenheit());
    }
}
