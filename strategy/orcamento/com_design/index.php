<?php 

require_once "Orcamento.class.php";
require_once "CalculadoraDeImpostos.class.php";
require_once "Imposto.php";
require_once "ICMS.class.php";
require_once "ISS.class.php";
require_once "KCV.class.php";

$Orcamento = new Orcamento(500);
$CalculadoraDeImpostos = new CalculadoraDeImpostos;

echo "Valor orçamento R$ {$Orcamento->getValor()} <br><br>";
echo "Imposto de ICMS R$ {$CalculadoraDeImpostos->calcula($Orcamento, new ICMS)} <br>";
echo "Imposto de ISS R$ {$CalculadoraDeImpostos->calcula($Orcamento, new ISS)} <br>";
echo "Imposto de KCV R$ {$CalculadoraDeImpostos->calcula($Orcamento, new KCV)} <br>";

?>