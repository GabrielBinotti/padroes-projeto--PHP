<?php

namespace creational\abstract_factory\classes;

use creational\abstract_factory\interfaces\InterfaceCustomer;
use creational\abstract_factory\interfaces\InterfaceVehicle;

class ConcreteVehicleEnterpriseProduct implements InterfaceVehicle
{

    private $nameVehicle;
    private $customer;

    public function __construct(String $name, InterfaceCustomer $customer)
    {
        $this->nameVehicle = $name;
        $this->customer = $customer;
    }

    public function pickUp(): void
    {
        //echo $this->nameVehicle;
        print_r("{$this->nameVehicle} está buscando {$this->customer->getName()} <br>");
    }
}