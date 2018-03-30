<?php

namespace Trask\Utils;

class IntegerCheck implements CheckProviderInterface
{
    public function __invoke($value)
    {
        return $this->isInteger($value);
    }

    public function isInteger($value) : bool
    {
        return $this->performCheck($value);
    }

    public function performCheck($value) : bool
    {
        if ('integer' === gettype($value)) {
            return true;
        }

        return false;
    }
}