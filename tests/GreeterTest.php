<?php

declare(strict_types=1);

namespace HalfShellStudios\PackageSample\Tests;

use PHPUnit\Framework\TestCase;
use HalfShellStudios\PackageSample\Greeter;

class GreeterTest extends TestCase
{
    private Greeter $greeter;

    #[\Override]
    protected function setUp(): void
    {
        $this->greeter = new Greeter();
    }

    public function testSayHello(): void
    {
        $expected = 'Well, hello there!';
        $actual = $this->greeter->sayHello();
        $this->assertEquals($expected, $actual, 'sayHello() should return the expected greeting.');
    }

    public function testSayGoodbye(): void
    {
        $expected = 'Errr... Goodbye!';
        $actual = $this->greeter->sayGoodbye();
        $this->assertEquals($expected, $actual, 'sayGoodbye() should return the expected farewell.');
    }

    public function testGreet(): void
    {
        $expected = 'Well, hello! Errr... Goodbye!';
        $actual = $this->greeter->greet();
        $this->assertEquals($expected, $actual, 'greet() should return the concatenated hello and goodbye messages.');
    }
}
