<?php

declare(strict_types=1);

namespace auto1;

use auto1\Car\Car;
use auto1\Car\Detail\DetailCollection;
use auto1\Car\Detail\Door;
use auto1\Car\Detail\Tyre;
use auto1\User\User;

require_once realpath(__DIR__) . '/vendor/autoload.php';

$user = new User();
echo 'Is broken: '.($car->isBroken() ? 'true' : 'false').PHP_EOL;
echo 'Is scratched: '.($car->isPaintingDamaged() ? 'true' : 'false').PHP_EOL;
$user->setFirstName('John')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com');

echo $user.PHP_EOL;

$door = new Door(false, true);
$tyre = new Tyre(false);
$car = new Car(new DetailCollection([$door, $tyre]));

echo 'Is broken: '.($car->isBroken() ? 'true' : 'false').PHP_EOL;
echo 'Is scratched: '.($car->isPaintingDamaged() ? 'true' : 'false').PHP_EOL;

$car->addDetail(new Tyre(true));

echo 'Is broken: ' . ($car->isBroken() ? 'true' : 'false') . PHP_EOL;
echo 'Is scratched: ' . ($car->isPaintingDamaged() ? 'true' : 'false') . PHP_EOL;
