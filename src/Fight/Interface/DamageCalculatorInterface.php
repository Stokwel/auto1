<?php

namespace auto1\Fight\Interface;

interface DamageCalculatorInterface
{
    public function calculateDamage(HeroInterface $attacker, HeroInterface $defender): int;
}
