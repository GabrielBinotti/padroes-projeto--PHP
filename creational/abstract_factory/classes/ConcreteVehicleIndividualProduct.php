<?php

namespace creational\abstract_factory\classes;

use creational\abstract_factory\interfaces\InterfaceCustomer;
use creational\abstract_factory\interfaces\InterfaceVehicle;

class ConcreteVehicleIndividualProduct implements InterfaceVehicle
{

    private $name;
    private $customer;

    public function __construct(String $name, InterfaceCustomer $customer)
    {
        $this->$name = $name;
        $this->customer = $customer;
    }

    public function pickUp(): void
    {
        echo "{$this->name} está buscando {$this->customer->name} <br>";
    }
}