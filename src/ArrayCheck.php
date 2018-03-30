<?php

namespace Trask\Utils;

class ArrayCheck
{
    public function __invoke(array $array)
    {
        return $this->isArray($array);
    }

    public function isArray($array) : bool
    {
        if (is_array($array)) {
            return true;
        }

        return false;
    }
}