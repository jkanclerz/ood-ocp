<?php

require __DIR__.'/vendor/autoload.php';

use Jkan\Component\Garage\SafeCar;
use Jkan\Component\Garage\Car;
use Jkan\Component\Garage\FlinstoneCar;

$car = new Car();
$flinstoneCar = new FlinstoneCar();

if ($car instanceof SafeCar) {
    $car->drive(200);
}
echo "\n";
if ($flinstoneCar instanceof SafeCar) {
    $flinstoneCar->drive(200);
}