<?php 

require_once "Desconto.php";
require_once "Desconto5Itens.class.php";
require_once "Desconto500Reais.class.php";
require_once "Desconto300Reais.class.php";
require_once "DescontoNull.class.php";

class CalculadoraDeDescontos {
    public function desconto(Orcamento $Orcamento)
    {
        $Desconto5Itens = new Desconto5Itens;
        $Desconto500Reais = new Desconto500Reais;
        $Desconto300Reais = new Desconto300Reais;
        $DescontoNull = new DescontoNull;

        $Desconto5Itens->setProximo($Desconto500Reais);
        $Desconto500Reais->setProximo($Desconto300Reais);
        $Desconto300Reais->setProximo($DescontoNull);

        return $Desconto5Itens->desconto($Orcamento);
    }

}

?>