<?php

namespace auto1\Car\Detail;

use auto1\Car\Interface\BrekableInterface;

abstract class AbstractCarDetail implements BrekableInterface
{
    protected bool $isBroken = false;

    public function isBroken(): bool
    {
        return $this->isBroken;
    }
}
