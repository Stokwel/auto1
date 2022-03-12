<?php

namespace auto1\Test\Fight;

use auto1\Fight\DamageCalculator;
use auto1\Fight\DTO\DamageDTO;
use auto1\Fight\Interface\DamageRangeCalculatorInterface;
use auto1\Fight\Interface\HeroInterface;
use auto1\Test\Fight\Fake\Randomize;
use PHPUnit\Framework\TestCase;

class DamageCalculatorTest extends TestCase
{
    public function testCalculateDamage(): void
    {
        $damageRangeCalculator = $this->getMockBuilder(DamageRangeCalculatorInterface::class)->getMock();

        $damageDTO = new DamageDTO(5, 10);
        $damageRangeCalculator->method('calculateDamageRange')->willReturn($damageDTO);

        $damageCalculator = new DamageCalculator($damageRangeCalculator, new Randomize());

        $this->assertEquals(
            $damageDTO->getMaxDamage(),
            $damageCalculator->calculateDamage(
                $this->getMockBuilder(HeroInterface::class)->getMock(),
                $this->getMockBuilder(HeroInterface::class)->getMock(),
            )
        );
    }
}
