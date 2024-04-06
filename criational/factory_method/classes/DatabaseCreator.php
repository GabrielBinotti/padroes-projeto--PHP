<?php

namespace criational\factory_method\classes;

use criational\factory_method\interfaces\InterfaceConnectorDatabase;

/**
 * Possui o método fabrica para construir um objeto
 */
abstract class DatabaseCreator
{
    abstract public function connectionDatabase() : InterfaceConnectorDatabase;
}