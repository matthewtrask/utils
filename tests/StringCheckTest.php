<?php

namespace Trask\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Trask\Utils\StringCheck;

class StringCheckTest extends TestCase
{
    /**
     * @var StringCheck
     */
    private $stringCheck;

    protected function setup()
    {
        $this->stringCheck = new StringCheck();
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(StringCheck::class, $this->stringCheck);
    }

    public function testIsValueAStringReturnsFalse()
    {
        $string = 123;
        $this->assertFalse($this->stringCheck->performCheck($string));
    }

    public function testIsValueAStringReturnsTrue()
    {
        $string = 'Matt Trask';
        $this->assertTrue($this->stringCheck->performCheck($string));
    }

    public function testInvoke()
    {
        $string = 'Matt Trask';
        $this->assertTrue(($this->stringCheck)($string));
    }
}
