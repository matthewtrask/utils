<?php

namespace Trask\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Trask\Utils\ThirteenCheck;

class ThirteenCheckTest extends TestCase
{
    /**
     * @var ThirteenCheck
     */
    private $thirteenCheck;

    public function setup()
    {
        $this->thirteenCheck = new ThirteenCheck();
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(ThirteenCheck::class, $this->thirteenCheck);
    }

    public function testCheckIfValueIsThirteenAndReturnFalse()
    {
        $value = 12;

        $this->assertFalse($this->thirteenCheck->isThirteen($value));
    }

    public function testCheckIfValueIsThirteenAndReturnTrue()
    {
        $value = 13;

        $this->assertTrue($this->thirteenCheck->isThirteen($value));
    }
}
