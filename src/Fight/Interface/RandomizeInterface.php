<?php

namespace auto1\Fight\Interface;

interface RandomizeInterface
{
    public function rand(int $min, int $max): int;
}
