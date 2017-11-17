<?php

namespace Tests;

use App\Magic;
use PHPUnit\Framework\TestCase;

class MagicTest extends TestCase
{
    public function testGet()
    {
        $magic = new Magic(['foo' => 'bar']);

        $this->assertEquals('bar', $magic->foo);
        $this->assertNull($magic->bar);
    }

    public function testSet()
    {
        $magic = new Magic;

        $magic->foo = 'bar';

        $this->assertEquals($magic->getData()['foo'], $magic->foo);
    }

    public function testIsset()
    {
        $magic = new Magic(['foo' => 'bar']);

        $this->assertTrue(isset($magic->foo));
        $this->assertFalse(isset($magic->bar));
    }

    public function testUnset()
    {
        $magic = new Magic(['foo' => 'bar']);

        unset($magic->foo);

        $this->assertArrayNotHasKey('foo', $magic->getData());
    }
}
