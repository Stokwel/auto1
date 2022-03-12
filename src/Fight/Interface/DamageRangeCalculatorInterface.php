<?php

namespace auto1\Fight\Interface;

use auto1\Fight\DTO\DamageDTO;

interface DamageRangeCalculatorInterface
{
    public function calculateDamageRange(HeroInterface $attacker, HeroInterface $defender): DamageDTO;
}
