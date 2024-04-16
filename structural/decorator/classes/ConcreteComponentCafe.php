<?php
namespace structural\decorator\classes;

use structural\decorator\interfaces\InterfaceComponentBebida;

class ConcreteComponentCafe implements InterfaceComponentBebida
{
    public function getCusto(): float {
        return 2.00; 
    }

    public function getDescricao(): string {
        return "Café";
    }
}