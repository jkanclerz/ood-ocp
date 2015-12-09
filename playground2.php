<?php

require __DIR__.'/vendor/autoload.php';

use Jkan\Component\Race\RaceCar;
use Jkan\Component\Race\StockEngine;
use Jkan\Component\Race\TurboEngine;

$stockEngine = new StockEngine();
$raceCar = new RaceCar($stockEngine);
var_dump($raceCar->telemetry());

$turboEngine = new TurboEngine();
$raceCar = new RaceCar($turboEngine);
var_dump($raceCar->telemetry());


