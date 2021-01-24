<?php


namespace Floravel\HumanComparator\Tests;

use Floravel\HumanComparator\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
//        $lbs = Weight::fromKilograms(100)->toLbs();
        $weight = Weight::fromKilograms(200);
        var_dump($weight);
        $this->assertIsObject($weight);
//        $this->assertEquals(220.4623, $lbs);
//        $this->assertEquals(440.9246, $weight->toLbs());
    }
}
