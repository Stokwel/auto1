<?php

namespace auto1\Test\Car\Detail;

use auto1\Car\Detail\Door;
use PHPUnit\Framework\TestCase;

class DoorTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDoor(
        bool $isBroken,
        bool $isScratched,
        bool $expectedIsBroken,
        bool $expectedIsScratched,
    ): void {
        $door = new Door($isBroken, $isScratched);

        $this->assertEquals($expectedIsBroken, $door->isBroken());
        $this->assertEquals($expectedIsScratched, $door->isScratched());
    }

    private function dataProvider(): array
    {
        return [
            'Detail is not broken and not scratched' => [
                false,
                false,
                false,
                false,
            ],
            'Detail is broken' => [
                true,
                false,
                true,
                false,
            ],
            'Detail is scratched' => [
                false,
                true,
                false,
                true,
            ],
            'Detail is broken and scratched' => [
                true,
                true,
                true,
                true,
            ]
        ];
    }
}
