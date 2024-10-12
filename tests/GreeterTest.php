<?php

declare(strict_types=1);

namespace HalfShellStudios\PackageSample\Tests;

use PHPUnit\Framework\TestCase;
use HalfShellStudios\PackageSample\Greeter;

class GreeterTest extends TestCase
{
    private Greeter $greeter;

    protected function setUp(): void
    {
        $this->greeter = new Greeter();
    }

    public function testSayHello()
    {
        $expected = 'Well, hello there!';
        $actual = $this->greeter->sayHello();
        $this->assertEquals($expected, $actual, 'sayHello() should return the expected greeting.');
    }

    public function testSayGoodbye()
    {
        $expected = 'Errr... Goodbye!';
        $actual = $this->greeter->sayGoodbye();
        $this->assertEquals($expected, $actual, 'sayGoodbye() should return the expected farewell.');
    }

    public function testGreet()
    {
        $expected = 'Well, hello there! Errr... Goodbye!';
        $actual = $this->greeter->greet();
        $this->assertEquals($expected, $actual, 'greet() should return the concatenated hello and goodbye messages.');
    }
}
