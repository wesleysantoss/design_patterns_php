<?php 

class CalculadoraDeImpostos {
    public function calcula(Orcamento $Orcamento, $imposto){
        if($imposto == 'ICMS'){
            return $Orcamento->getValor() * 0.05;
        }else if($imposto == 'ISS'){
            return $Orcamento->getValor() * 0.1;
        }
    }
}

?>