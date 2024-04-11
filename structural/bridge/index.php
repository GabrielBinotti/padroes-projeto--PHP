<?php

use structural\bridge\classes\HtmlRendererConcreteImplementation;
use structural\bridge\classes\PageAbstraction;
use structural\bridge\classes\SinglePageRefinedAbstraction;

require_once "../../vendor/autoload.php";


function clientCode(PageAbstraction $page)
{
    echo $page->view();
}


$HTMLRenderer = new HtmlRendererConcreteImplementation();

$page = new SinglePageRefinedAbstraction($HTMLRenderer, 'HOME', "Welcome");

clientCode($page);