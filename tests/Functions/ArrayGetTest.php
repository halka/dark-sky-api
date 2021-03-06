<?php

namespace Tests\Functions;

use Tests\TestCase;

class ArrayGetTest extends TestCase
{
    /** @test */
    public function it_returns_an_item_value_if_the_key_exists()
    {
        $array = ['name' => 'John'];

        $this->assertEquals('John', \DmitryIvanov\DarkSkyApi\array_get($array, 'name'));
    }

    /** @test */
    public function it_returns_the_default_value_if_the_key_does_not_exist()
    {
        $array = ['name' => 'John'];

        $this->assertEquals(30, \DmitryIvanov\DarkSkyApi\array_get($array, 'age', 30));
    }
}
