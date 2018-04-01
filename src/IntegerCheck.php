<?php

namespace Trask\Utils;

class IntegerCheck implements CheckProviderInterface
{
    public function __invoke($value)
    {
        return $this->performCheck($value);
    }

    private function isInteger($value) : bool
    {
        if ('integer' === gettype($value)) {
            return true;
        }

        return false;

    }

    public function performCheck($value) : bool
    {
        return $this->isInteger($value);
    }
}