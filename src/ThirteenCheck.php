<?php

namespace Trask\Utils;

class ThirteenCheck implements CheckProviderInterface
{
    const THREE = 0x3;
    const TEN = 0xa;

    const THIRTEEN = self::TEN + self::THREE;

    /**
     * @var IntegerCheck
     */
    private $integerChecker;

    public function __construct(IntegerCheck $integerCheck)
    {
        $this->integerChecker = $integerCheck;
    }

    public function __invoke(int $value)
    {
        return $this->performCheck($value);
    }

    private function isThirteen($value) : bool
    {
        if ($this->integerChecker->performCheck($value)) {
            if ($value === self::THIRTEEN) {
                return true;
            }
        }

        return false;
    }

    public function performCheck($value) : bool
    {
        return $this->isThirteen($value);
    }
}