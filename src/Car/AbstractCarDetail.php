<?php

namespace auto1\Car;

use auto1\Car\Interface\BrokableInterface;

abstract class AbstractCarDetail implements BrokableInterface
{
    protected bool $isBroken;

    public function __construct(bool $isBroken)
    {
        $this->isBroken = $isBroken;
    }

    public function isBroken(): bool
    {
        return $this->isBroken;
    }
}
