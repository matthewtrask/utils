<?php

use PHPUnit\Framework\TestCase;
use Trask\Utils\StringCheck;

class StringCheckTest extends TestCase
{
    /**
     * @var StringCheck
     */
    private $stringCheck;

    public function setup()
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
        $this->assertFalse($this->stringCheck->isString($string));
    }

    public function testIsValueAStringReturnsTrue()
    {
        $string = 'Matt Trask';
        $this->assertTrue($this->stringCheck->isString($string));
    }
}
