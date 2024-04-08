<?php

namespace creational\abstract_factory\classes;

use creational\abstract_factory\interfaces\InterfaceCustomer;

class ConcreteCustomerIndividualProduct implements InterfaceCustomer
{
    private $name;

    public function setName(String $name)
    {
        $this->name = $name . "(INDIVIDUAL)";
    }

    public function getName(): String
    {
        return $this->name;
    }
}
