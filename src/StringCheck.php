<?php

namespace Trask\Utils;

class StringCheck implements CheckProviderInterface
{
    public function __invoke(string $string)
    {
        return $this->performCheck($string);
    }

    public function performCheck($value) : bool
    {
        return $this->isString($value);
    }

    private function isString($string) : bool
    {
        if ('string' === gettype($string)) {
            return true;
        }

        return false;
    }
}
