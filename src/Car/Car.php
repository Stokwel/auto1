<?php

namespace auto1\Car;

use auto1\Car\Detail\DetailCollection;
use auto1\Car\Interface\BrokableInterface;
use auto1\Car\Interface\CarInterface;
use auto1\Car\Interface\ScratchableInterface;

class Car implements CarInterface
{
    private DetailCollection $details;

    public function __construct(DetailCollection $details)
    {
        $this->details = $details;
    }

    public function addDetail(BrokableInterface $detail): self
    {
        $this->details->add($detail);

        return $this;
    }

    public function isBroken(): bool
    {
        /** @var BrokableInterface $detail */
        foreach ($this->details as $detail) {
            if ($detail->isBroken()) {
                return true;
            }
        }

        return false;
    }

    public function isPaintingDamaged(): bool
    {
        foreach ($this->details as $detail) {
            if ($detail instanceof ScratchableInterface && $detail->isScratched()) {
                return true;
            }
        }

        return false;
    }
}
