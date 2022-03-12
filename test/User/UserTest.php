<?php

namespace auto1\Test\User;

use auto1\User\User;
use PHPUnit\Framework\TestCase;;

class UserTest extends TestCase
{
    public function testToString(): void
    {
        $user = new User();
        $user->setFirstName('John')
            ->setLastName('Doe')
            ->setEmail('john.doe@example.com');

        $this->assertEquals('John Doe <john.doe@example.com>', (string) $user);
    }
}
