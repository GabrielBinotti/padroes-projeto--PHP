<?php

namespace creational\abstract_factory\factories;

use creational\abstract_factory\classes\ConcreteCustomerEnterpriseProduct;
use creational\abstract_factory\classes\ConcreteVehicleEnterpriseProduct;
use creational\abstract_factory\interfaces\InterfaceAbstractFactory;
use creational\abstract_factory\interfaces\InterfaceCustomer;
use creational\abstract_factory\interfaces\InterfaceVehicle;

class ConcreteCustomerVehicleEnterpriseFactory implements InterfaceAbstractFactory
{

    public function createCustomer(String $name) : InterfaceCustomer
    {
        return new ConcreteCustomerEnterpriseProduct($name);
    }
    public function createVehicle(String $name, InterfaceCustomer $customer) : InterfaceVehicle
    {
        return new ConcreteVehicleEnterpriseProduct($name, $customer);
    }
}