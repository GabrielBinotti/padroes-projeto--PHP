<?php

use creational\abstract_factory\factories\ConcreteCustomerVehicleEnterpriseFactory;

require_once "../../vendor/autoload.php";

$factory = new ConcreteCustomerVehicleEnterpriseFactory;
$customer = $factory->createCustomer('Gabriel');
$car = $factory->createVehicle("Fusca", $customer);


$car->pickUp();