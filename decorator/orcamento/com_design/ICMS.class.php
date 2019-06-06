<?php 

class ICMS extends TemplateDeImpostoCondicional {
    public function deveUsarOMaximo(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() >= 500;
    }

    public function taxacaoMaxima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.15;
    }

    public function taxacaoMinima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.05;
    }
}

?>