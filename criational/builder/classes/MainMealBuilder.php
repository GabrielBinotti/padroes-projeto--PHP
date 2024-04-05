<?php

namespace criational\builder\classes;

use criational\builder\interfaces\InterfaceBuilder;

class MainMealBuilder implements InterfaceBuilder
{

    private $meal; // MealBox
    
    public function __construct()
    {
        $this->meal = new MealBox;
    }

    public function makeMeal() // return this
    {
        $rice = new Rice("Arroz", 10);
        $meat = new Meat("Carne", 10);

        $this->meal->add($rice);
        $this->meal->add($meat);

        return $this;
    }

    public function makeBeverage()
    {
        $beverage = new Beverage("Bebida", 10);

        $this->meal->add($beverage);

        return $this;
    }

    public function reser()
    {
        $this->meal = new MealBox;
        return $this;
    } 

    public function getMeal() : MealBox
    {
        return $this->meal;
    }

}
