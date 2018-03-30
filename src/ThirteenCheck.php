<?php

namespace Trask\Utils;

class ThirteenCheck implements CheckProviderInterface
{
    const THREE = 0x3;
    const TEN = 0xa;

    const THIRTEEN = self::TEN + self::THREE;

    private $integerChecker;

    public function __construct()
    {
        $this->integerChecker = new IntegerCheck();
    }

    public function __invoke(int $value)
    {
        return $this->isThirteen($value);
    }

    public function isThirteen($value) : bool
    {
        return $this->performCheck($value);
    }

    public function performCheck($value) : bool
    {
        if ($this->integerChecker->performCheck($value)) {
            if ($value === self::THIRTEEN) {
                return true;
            }
        }

        return false;
    }
}