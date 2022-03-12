<?php

namespace auto1\Car\Detail;

use auto1\Car\Interface\ScratchableInterface;

class Door extends AbstractCarDetail implements ScratchableInterface
{
    private bool $isScratched;

    public function __construct(bool $isBroken, bool $isScratched)
    {
        $this->isBroken = $isBroken;
        $this->isScratched = $isScratched;
    }

    public function isScratched(): bool
    {
        return $this->isScratched;
    }
}
