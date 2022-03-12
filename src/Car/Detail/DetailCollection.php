<?php

namespace auto1\Car\Detail;

use auto1\Car\Interface\BrokableInterface;
use Ramsey\Collection\AbstractCollection;

class DetailCollection extends AbstractCollection
{
    public function getType(): string
    {
        return BrokableInterface::class;
    }
}
