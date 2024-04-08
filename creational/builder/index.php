<?php

use creational\builder\classes\MainMealBuilder;

require_once "../../vendor/autoload.php";


$dishBuilder = new MainMealBuilder;
$dishBuilder->makeMeal()->makeBeverage();

print_r($dishBuilder->getMeal());