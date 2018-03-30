<?php

use PHPUnit\Framework\TestCase;
use Trask\StringUtils\StringCheck;

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
}
