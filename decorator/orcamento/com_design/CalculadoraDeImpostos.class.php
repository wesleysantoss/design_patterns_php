<?php 

class CalculadoraDeImpostos {
    public function calcula(Orcamento $Orcamento, Imposto $imposto){
        return $imposto->calcula($Orcamento);
    }
}

?>