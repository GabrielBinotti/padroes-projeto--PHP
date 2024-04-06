<?php

use criational\factory_method\classes\MysqlConcreteCreator;

require_once "../../vendor/autoload.php";

$mysql = new MysqlConcreteCreator;
$conn = $mysql->connectionDatabase();
$pdo = $conn->getConnection();

/**
 * Realiza as transações bancarias
 */

 $conn->closeConnection($pdo);
