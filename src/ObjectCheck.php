<?php
/**
 * Created by PhpStorm.
 * User: trask
 * Date: 3/31/18
 * Time: 8:15 PM
 */

namespace Trask\Utils;


class ObjectCheck implements CheckProviderInterface
{
    public function __invoke($value)
    {
        return $this->performCheck($value);
    }

    public function performCheck($value): bool
    {
        return 'object' === gettype($value);
    }
}
