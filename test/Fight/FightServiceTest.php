<?php

namespace auto1\Test\Fight;

use auto1\Fight\FightService;
use auto1\Fight\Hero;
use auto1\Fight\Interface\DamageCalculatorInterface;
use auto1\Fight\Interface\HeroInterface;
use PHPUnit\Framework\TestCase;;

class FightServiceTest extends TestCase
{
    public function testFight(): void
    {
        $damageCalculator = $this->getMockBuilder(DamageCalculatorInterface::class)->getMock();
        $damageCalculator->method('calculateDamage')->willReturn(1);

        $fightService = new FightService($damageCalculator);

        $attacker = $this->getMockBuilder(HeroInterface::class)->getMock();
        $defender = new Hero(1, 1, 5);

        $fightService->fight($attacker, $defender);

        $this->assertEquals(4, $defender->getHealthPoints());
    }
}
