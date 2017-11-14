<?php

namespace Tests;

use App\Magic;
use PHPUnit\Framework\TestCase;

class MagicTest extends TestCase
{
    public function testMagic()
    {
        $magic = new Magic;

        $this->assertEquals('magic', $magic->magic());
    }
}
