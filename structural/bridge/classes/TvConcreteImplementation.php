<?php
namespace structural\bridge\classes;

use structural\bridge\interfaces\interfaceImplementation;

class TvConcreteImplementation implements interfaceImplementation
{

    private $volume = 10;
    private $power = false;

    public function setPower(bool $powerStatus) : void
    {
        $this->power = $powerStatus;
    }

    public function getPower() : bool
    {
        return $this->power;
    }

    public function setVolume(int $volume) : void
    {
        $this->volume = $volume;
    }

    public function getVolume() : int
    {
        return $this->volume;
    }
}