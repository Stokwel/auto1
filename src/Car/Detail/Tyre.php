<?php

namespace auto1\Car\Detail;

class Tyre extends AbstractCarDetail
{
    public function __construct(bool $isBroken)
    {
        $this->isBroken = $isBroken;
    }
}
