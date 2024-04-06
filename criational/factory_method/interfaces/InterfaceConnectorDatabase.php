<?php

namespace criational\factory_method\interfaces;


/**
 * Métodos para estabelecer um contrato
 */
interface InterfaceConnectorDatabase
{
    public function getConnection();
    public function closeConnection(&$pdo);
}