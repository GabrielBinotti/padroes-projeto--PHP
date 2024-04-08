<?php

namespace creational\abstract_factory\interfaces;

interface InterfaceCustomer
{
    public function setName(String $name);
    public function getName() : String;
}