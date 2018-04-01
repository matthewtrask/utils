<?php

namespace Trask\Utils\Tests;

use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Framework\TestCase;
use Trask\Utils\IntegerCheck;
use Trask\Utils\ThirteenCheck;

class ThirteenCheckTest extends TestCase
{
    /**
     * @var ThirteenCheck
     */
    private $thirteenCheck;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | IntegerCheck
     */
    private $integerCheckMock;

    public function setup()
    {
        $this->integerCheckMock = $this->createMock(IntegerCheck::class);

        $this->thirteenCheck = new ThirteenCheck($this->integerCheckMock);
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(ThirteenCheck::class, $this->thirteenCheck);
    }

    public function testCheckIfValueIsThirteenAndReturnFalse()
    {
        $value = 12;

        $this->assertFalse($this->thirteenCheck->performCheck($value));
    }

    public function testCheckIfValueIsThirteenAndReturnTrue()
    {
        $value = 13;

        $this->assertTrue($this->thirteenCheck->performCheck($value));
    }
}
