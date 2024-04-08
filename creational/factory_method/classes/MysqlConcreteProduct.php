<?php

namespace creational\factory_method\classes;

use creational\factory_method\interfaces\InterfaceConnectorDatabase;

class MysqlConcreteProduct implements InterfaceConnectorDatabase
{
    public function getConnection()
    {

    }
    public function closeConnection(&$pdo)
    {
        
    }
}