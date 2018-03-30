<?php

namespace Trask\StringUtils;

class StringCheck
{
    public function isString($string) : bool
    {
        if (is_string($string)) {
            return true;
        }

        return false;
    }
}