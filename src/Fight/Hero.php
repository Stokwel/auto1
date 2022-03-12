<?php

namespace auto1\Fight;

use auto1\Fight\Interface\HeroInterface;

class Hero implements HeroInterface
{
    private int $attack;
    private int $defence;
    private int $healthPoints;

    public function __construct(int $attack, int $defence, int $healthPoints)
    {
        $this->attack = $attack;
        $this->defence = $defence;
        $this->healthPoints = $healthPoints;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getDefence(): int
    {
        return $this->defence;
    }

    public function getHealthPoints(): int
    {
        return $this->healthPoints;
    }

    public function setHealthPoints(int $healthPoints): self
    {
        $this->healthPoints = $healthPoints;

        return $this;
    }
}
