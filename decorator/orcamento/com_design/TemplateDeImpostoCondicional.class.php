<?php 

abstract class TemplateDeImpostoCondicional extends Imposto {
    public function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }
    
    public function calcula(Orcamento $Orcamento) 
    {
        if($this->deveUsarOMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        }
        else{
            return $this->taxacaoMinima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        }
    }

    public abstract function deveUsarOMaximo(Orcamento $Orcamento);
    public abstract function taxacaoMaxima(Orcamento $Orcamento);
    public abstract function taxacaoMinima(Orcamento $Orcamento);
}

?>