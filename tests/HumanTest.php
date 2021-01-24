<?php

namespace Floravel\HumanComparator\Tests;

use Floravel\HumanComparator\Human as Human;
use function PHPUnit\Framework\assertEquals;
use PHPUnit\Framework\TestCase;

class HumanTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function a_human_name_can_be_returned()
    {
        $name = 'Michael';
        $humanName = Human::fromHumanName($name);

        assertEquals($name, $humanName);
    }
}
