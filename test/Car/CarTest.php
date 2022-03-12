<?php

namespace auto1\Test\Car;

use auto1\Car\Car;
use auto1\Car\Detail\DetailCollection;
use auto1\Car\Detail\Door;
use auto1\Car\Detail\Tyre;
use PHPUnit\Framework\TestCase;;

class CarTest extends TestCase
{
    public function testIsBroken(): void
    {
        $door = new Door(false, true);
        $tyre = new Tyre(false);
        $car = new Car(new DetailCollection([$door, $tyre]));

        $this->assertEquals(false, $car->isBroken());

        $car->addDetail(new Door(true, false));

        $this->assertEquals(true, $car->isBroken());
    }

    public function testIsPaintingDamaged(): void
    {
        $door = new Door(false, false);
        $tyre = new Tyre(false);
        $car = new Car(new DetailCollection([$door, $tyre]));

        $this->assertEquals(false, $car->isPaintingDamaged());

        $car->addDetail(new Door(false, true));

        $this->assertEquals(true, $car->isPaintingDamaged());
    }
}
