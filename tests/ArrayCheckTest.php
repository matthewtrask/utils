<?php

namespace Trask\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Trask\Utils\ArrayCheck;

class ArrayCheckTest extends TestCase
{
    /**
     * @var ArrayCheck
     */
    private $arrayCheck;

    public function setup()
    {
        $this->arrayCheck = new ArrayCheck();
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(ArrayCheck::class, $this->arrayCheck);
    }

    public function testChecksIfArrayAndReturnsFalse()
    {
        $array = '';

        $this->assertFalse($this->arrayCheck->performCheck($array));
    }

    public function testCheckIfArrayAndReturnsTrue()
    {
        $array = [
            'Test',
            'Foo',
            'OMG',
        ];

        $this->assertTrue($this->arrayCheck->performCheck($array));
    }
}
