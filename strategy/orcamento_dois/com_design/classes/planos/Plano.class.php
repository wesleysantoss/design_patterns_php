<?php 

namespace classes\planos;

abstract class Plano {
    protected $taxaAcrescimo;

    public function calcularValor($Produto)
    {
        return ($Produto->valorBase + ($Produto->valorBase * $this->taxaAcrescimo));
    }
}

?>