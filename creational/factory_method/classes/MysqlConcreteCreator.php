<?php

namespace creational\factory_method\classes;

use creational\factory_method\interfaces\InterfaceConnectorDatabase;

class MysqlConcreteCreator extends DatabaseCreator
{
    public function connectionDatabase() : InterfaceConnectorDatabase
    {
        return new MysqlConcreteProduct;
    }
}