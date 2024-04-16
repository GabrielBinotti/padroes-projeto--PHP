<?php

use structural\decorator\classes\ConcreteComponentCafe;
use structural\decorator\classes\ConcreteDecoratorLeite;

require_once "../../vendor/autoload.php";


$cafe = new ConcreteComponentCafe();
$cafeComLeite = new ConcreteDecoratorLeite($cafe);

echo $cafeComLeite->getDescricao() . " custa $" . $cafeComLeite->getCusto();
