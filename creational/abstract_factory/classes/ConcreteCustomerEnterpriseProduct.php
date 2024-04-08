<?php

namespace creational\abstract_factory\classes;

use creational\abstract_factory\interfaces\InterfaceCustomer;

class ConcreteCustomerEnterpriseProduct implements InterfaceCustomer
{
    private $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function setName(String $name)
    {
        $this->name = $name . "(ENTERPRISE)";
    }

    public function getName(): String
    {
        return $this->name;
    }
}
