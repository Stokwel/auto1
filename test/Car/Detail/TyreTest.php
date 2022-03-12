<?php

namespace auto1\Test\Car\Detail;

use auto1\Car\Detail\Tyre;
use PHPUnit\Framework\TestCase;

class TyreTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTyre(
        bool $isBroken,
        bool $expectedIsBroken,
    ): void {
        $tyre = new Tyre($isBroken);

        $this->assertEquals($expectedIsBroken, $tyre->isBroken());
    }

    private function dataProvider(): array
    {
        return [
            'Detail is not broken' => [
                false,
                false,
            ],
            'Detail is broken' => [
                true,
                true,
            ],
        ];
    }
}
