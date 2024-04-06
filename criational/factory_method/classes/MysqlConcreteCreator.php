<?php

namespace criational\factory_method\classes;

use criational\factory_method\interfaces\InterfaceConnectorDatabase;

class MysqlConcreteCreator extends DatabaseCreator
{
    public function connectionDatabase() : InterfaceConnectorDatabase
    {
        return new MysqlConcreteProduct;
    }
}