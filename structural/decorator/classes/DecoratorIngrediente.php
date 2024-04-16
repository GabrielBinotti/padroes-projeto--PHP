<?php

namespace structural\decorator\classes;

use structural\decorator\interfaces\InterfaceComponentBebida;

abstract class DecoratorIngrediente implements InterfaceComponentBebida
{
    protected $bebida;

    public function __construct(InterfaceComponentBebida $bebida) {
        $this->bebida = $bebida;
    }

    abstract public function getCusto(): float;
    abstract public function getDescricao(): string;
}