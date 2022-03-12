<?php

namespace auto1\User;

use Stringable;

class User implements Stringable
{
    private string $firstName;
    private string $lastName;
    private string $email;

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s %s <%s>',
            $this->firstName,
            $this->lastName,
            $this->email
        );
    }
}
