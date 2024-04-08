<?php

namespace creational\factory_method\classes;

use creational\factory_method\interfaces\InterfaceConnectorDatabase;

/**
 * Possui o método fabrica para construir um objeto
 */
abstract class DatabaseCreator
{
    abstract public function connectionDatabase() : InterfaceConnectorDatabase;
}