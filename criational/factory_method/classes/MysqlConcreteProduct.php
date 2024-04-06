<?php

namespace criational\factory_method\classes;

use criational\factory_method\interfaces\InterfaceConnectorDatabase;

class MysqlConcreteProduct implements InterfaceConnectorDatabase
{
    public function getConnection()
    {

    }
    public function closeConnection(&$pdo)
    {
        
    }
}