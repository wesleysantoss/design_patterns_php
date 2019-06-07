<?php

abstract class Imposto {
    protected $outroImposto;

    public function __construct($imposto = null){
        $this->outroImposto = $imposto;
    }

    public function calculaOutroImposto(Orcamento $Orcamento)
    {
        if(!empty($this->outroImposto))
            return $this->outroImposto->calcula($Orcamento);
    }

    public abstract function calcula(Orcamento $Orcamento);
}

?>