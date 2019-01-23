<?php

namespace Trask\Utils;

class IntegerCheck implements CheckProviderInterface
{
    public function __invoke(int $value)
    {
        return $this->performCheck($value);
    }

    private function isInteger($value) : bool
    {
        return 'integer' === gettype($value);
    }

    public function performCheck($value) : bool
    {
        return $this->isInteger($value);
    }
}
