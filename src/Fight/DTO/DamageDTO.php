<?php

namespace auto1\Fight\DTO;

class DamageDTO
{
    private int $minDamage;
    private int $maxDamage;

    public function __construct(int $minDamage, int $maxDamage)
    {
        $this->minDamage = $minDamage;
        $this->maxDamage = $maxDamage;
    }

    public function getMinDamage(): int
    {
        return $this->minDamage;
    }

    public function getMaxDamage(): int
    {
        return $this->maxDamage;
    }
}
