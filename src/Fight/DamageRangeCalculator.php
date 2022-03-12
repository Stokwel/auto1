<?php

namespace auto1\Fight;

use auto1\Fight\DTO\DamageDTO;
use auto1\Fight\Interface\DamageRangeCalculatorInterface;
use auto1\Fight\Interface\HeroInterface;

class DamageRangeCalculator implements DamageRangeCalculatorInterface
{
    private const DAMAGE_RAND_FACTOR = 0.2;

    public function calculateDamageRange(HeroInterface $attacker, HeroInterface $defender): DamageDTO
    {
        if ($attacker->getAttack() <= $defender->getDefence()) {
            return new DamageDTO(0, 0);
        }

        $baseDamage = $attacker->getAttack() - $defender->getDefence();
        $factor = round($baseDamage * self::DAMAGE_RAND_FACTOR);
        $minDamage = $baseDamage - $factor;
        $maxDamage = $baseDamage + $factor;

        return new DamageDTO($minDamage, $maxDamage);
    }
}
