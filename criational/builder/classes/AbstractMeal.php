<?php

namespace criational\builder\classes;

use criational\builder\interfaces\InterfaceMeal;

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