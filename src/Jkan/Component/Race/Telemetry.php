<?php

namespace Jkan\Component\Race;

final class Telemetry
{
    private $v;
    private $acceleration;

    public function __construct($v = 0, $acceleration = 0)
    {
        $this->v = $v;
        $this->acceleration = $acceleration;
    }

    public function v()
    {
        return $this->v;
    }

    public function acceleration()
    {
        return $this->acceleration;
    }
}