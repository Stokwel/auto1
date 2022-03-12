<?php

namespace auto1\Test\Fight\Fake;

use auto1\Fight\Interface\RandomizeInterface;

class Randomize implements RandomizeInterface
{
    public function rand(int $min, int $max): int
    {
        return $max;
    }
}
