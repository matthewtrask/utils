<?php

namespace Trask\Utils;

interface CheckProviderInterface
{
    public function performCheck($value): bool;
}
