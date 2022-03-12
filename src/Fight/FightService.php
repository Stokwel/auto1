<?php

namespace auto1\Fight;

use auto1\Fight\Interface\DamageCalculatorInterface;
use auto1\Fight\Interface\HeroInterface;

class FightService
{
    private DamageCalculatorInterface $damageCalculator;

    public function __construct(DamageCalculatorInterface $damageCalculator)
    {
        $this->damageCalculator = $damageCalculator;
    }

    public function fight(HeroInterface $attacker, HeroInterface $defender): void
    {
        $damage = $this->damageCalculator->calculateDamage($attacker, $defender);

        $defender->setHealthPoints($defender->getHealthPoints() - $damage);
    }
}
