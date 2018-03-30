<?php

namespace Trask\Utils;

class ThirteenCheck
{
    const THIRTEEN = 13;

    public function __invoke(int $value)
    {
        return $this->isThirteen($value);
    }

    public function isThirteen($value) : bool
    {
        if ($value === self::THIRTEEN) {
            return true;
        }

        return false;
    }
}