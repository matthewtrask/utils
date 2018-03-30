<?php

namespace Trask\Utils;

class ArrayCheck implements CheckProviderInterface
{
    public function __invoke(array $array)
    {
        return $this->isArray($array);
    }

    public function isArray($array) : bool
    {
       return $this->performCheck($array);
    }

    public function performCheck($value): bool
    {
        if ('array' === gettype($value)) {
            return true;
        }

        return false;
    }
}