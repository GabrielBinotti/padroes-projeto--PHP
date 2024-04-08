<?php

namespace creational\builder\classes;

use creational\builder\interfaces\InterfaceMeal;

abstract class AbstractMeal implements InterfaceMeal
{
    private $name;
    private $price;

    public function __construct(String $name, float $price)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function getPrice() : float
    {

        return $this->price;;
    }
}