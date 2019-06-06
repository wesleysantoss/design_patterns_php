<?php 

class CalculadoraDeDescontos {
    public function calcula(Orcamento $Orcamento)
    {
        if(count($Orcamento->getItens()) > 5){
            return $Orcamento->getValor() * 0.1;
        } 
        else if($Orcamento->getValor() >= 500){
            return $Orcamento->getValor() * 0.05;
        }
        else if($Orcamento->getValor() >= 300){
            return $Orcamento->getValor() * 0.02;
        }
        else{
            return 0;
        }
    }
}

?>