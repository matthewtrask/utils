<?php

namespace Trask\Utils;

class StringCheck implements CheckProviderInterface
{
    public function __invoke(string $string)
    {
        return $this->isString($string);
    }

    public function isString($string) : bool
    {
        return $this->performCheck($string);
    }

    public function performCheck($value) : bool
    {
        if ('string' === gettype($value)) {
            return true;
        }

        return false;
    }
}
