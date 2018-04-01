<?php

namespace Trask\Utils;

class ArrayCheck implements CheckProviderInterface
{
    public function __invoke(array $value)
    {
        return $this->performCheck($value);
    }

    private function isArray($value) : bool
    {
        if ('array' === gettype($value)) {
            return true;
        }

        return false;
    }

    public function performCheck($value): bool
    {
        return $this->isArray($value);
    }
}