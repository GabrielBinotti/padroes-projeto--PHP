<?php

namespace creational\abstract_factory\interfaces;

interface InterfaceAbstractFactory
{
    public function createCustomer(String $name) : InterfaceCustomer;
    public function createVehicle(String $name, InterfaceCustomer $customer) : InterfaceVehicle;
}