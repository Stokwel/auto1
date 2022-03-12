<?php

namespace auto1\Test\Fight;

use auto1\Fight\DamageRangeCalculator;
use auto1\Fight\DTO\DamageDTO;
use auto1\Fight\Hero;
use auto1\Fight\Interface\HeroInterface;
use PHPUnit\Framework\TestCase;;

class DamageRangeCalculatorTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCalculateDamageRange(
        HeroInterface $attacker,
        HeroInterface $defender,
        DamageDTO $expectedDamageDTO,
    ): void {
        $damageRangeCalculator = new DamageRangeCalculator();

        $this->assertEquals($expectedDamageDTO, $damageRangeCalculator->calculateDamageRange($attacker, $defender));
    }

    private function dataProvider(): array
    {
        return [
            'Attacker is weaker' => [
                new Hero(2, 1, 5),
                new Hero(1, 3, 5),
                new DamageDTO(0, 0),
            ],
            'Attacker is the same' => [
                new Hero(1, 1, 5),
                new Hero(1, 1, 5),
                new DamageDTO(0, 0),
            ],
            'Attacker is stronger' => [
                new Hero(20, 1, 5),
                new Hero(1, 1, 5),
                new DamageDTO(15, 23),
            ],
        ];
    }
}
