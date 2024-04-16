<?php

namespace structural\decorator\classes;

class ConcreteDecoratorLeite extends DecoratorIngrediente {
    
    public function getCusto(): float {
        return $this->bebida->getCusto() + 0.50; // 50 centavos para adicionar leite
    }

    public function getDescricao(): string {
        return $this->bebida->getDescricao() . ", com leite";
    }
}