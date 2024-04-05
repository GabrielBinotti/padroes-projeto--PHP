<?php

namespace criational\builder\classes;

use criational\builder\interfaces\InterfaceMeal;


class MealBox implements InterfaceMeal
{
    private $children = []; // InterfaceMeal

    public function getPrice() : float
    {

        return array_reduce($this->children, function($total, $obj){
            return $total + $obj->getPrice();
        });
    }

    public function add(InterfaceMeal $meal)
    {
        array_push($this->children, $meal);
    }
}