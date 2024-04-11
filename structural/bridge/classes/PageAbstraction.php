<?php


namespace structural\bridge\classes;

use structural\bridge\classes\HtmlRendererConcreteImplementation;

abstract class PageAbstraction
{
    
    protected $renderer;

    
    public function __construct(HtmlRendererConcreteImplementation $renderer)
    {
        $this->renderer = $renderer;
    }

    
    public function changeRenderer(HtmlRendererConcreteImplementation $renderer): void
    {
        $this->renderer = $renderer;
    }

   
    abstract public function view(): string;
}