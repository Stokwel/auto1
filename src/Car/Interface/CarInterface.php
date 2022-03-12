<?php

namespace auto1\Car\Interface;

interface CarInterface
{
    public function addDetail(BrokableInterface $detail): self;
    public function isBroken(): bool;
    public function isPaintingDamaged(): bool;
}
