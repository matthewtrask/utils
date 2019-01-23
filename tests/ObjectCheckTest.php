<?php

namespace Trask\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Trask\Utils\ObjectCheck;

class ObjectCheckTest extends TestCase
{
    /**
     * @var ObjectCheck
     */
    private $objectCheck;

    protected function setup()
    {
        $this->objectCheck = new ObjectCheck();
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(ObjectCheck::class, $this->objectCheck);
    }

    public function testPerformCheckWithStringIsFalse()
    {
        $object = \stdClass::class;
        $this->assertFalse($this->objectCheck->performCheck($object));
    }

    public function testPerformCheckWithIntegerIsTrue()
    {
        $object = new \stdClass();
        $this->assertTrue($this->objectCheck->performCheck($object));
    }

    public function testInvoke()
    {
        $object = new \stdClass();
        $this->assertTrue(($this->objectCheck)($object));
    }
}
