<?php

namespace auto1\Car\Detail;

use auto1\Car\Interface\BrekableInterface;
use Ramsey\Collection\AbstractCollection;

class DetailCollection extends AbstractCollection
{
    public function getType(): string
    {
        return BrekableInterface::class;
    }
}
