<?php

namespace auto1\Fight;

use auto1\Fight\Interface\DamageCalculatorInterface;
use auto1\Fight\Interface\DamageRangeCalculatorInterface;
use auto1\Fight\Interface\HeroInterface;
use auto1\Fight\Interface\RandomizeInterface;

class DamageCalculator implements DamageCalculatorInterface
{
    private DamageRangeCalculatorInterface $damageRangeCalculator;
    private RandomizeInterface $randomize;

    public function __construct(
        DamageRangeCalculatorInterface $damageRangeCalculator,
        RandomizeInterface $randomize,
    ) {
        $this->damageRangeCalculator = $damageRangeCalculator;
        $this->randomize = $randomize;
    }

    public function calculateDamage(HeroInterface $attacker, HeroInterface $defender): int
    {
        $damageRange = $this->damageRangeCalculator->calculateDamageRange($attacker, $defender);

        return $this->randomize->rand($damageRange->getMinDamage(), $damageRange->getMaxDamage());
    }
}
