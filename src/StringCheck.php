<?php

namespace Trask\StringUtils;

class StringCheck
{
    public function __invoke(string $string)
    {
        return $this->isString($string);
    }
    
    public function isString($string) : bool
    {
        if (is_string($string)) {
            return true;
        }

        return false;
    }
}
