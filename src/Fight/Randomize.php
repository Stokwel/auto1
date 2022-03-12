<?php

namespace auto1\Fight;

use auto1\Fight\Interface\RandomizeInterface;

class Randomize implements RandomizeInterface
{
    public function rand(int $min, int $max): int
    {
        return mt_rand($min, $max);
    }
}
