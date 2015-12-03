<?php

namespace Jkan\Component\Garage;

class Car extends SafeCar
{
    protected function go()
    {
        echo 'I am starting the engine';
        echo 'brrm brrm brmm';
    }
}