<?php 

require_once "Orcamento.class.php";
require_once "CalculadoraDeImpostos.class.php";

$Orcamento = new Orcamento(500);
$CalculadoraDeImpostos = new CalculadoraDeImpostos;

echo "Valor orçamento R$ {$Orcamento->getValor()} <br><br>";
echo "Imposto de ICMS R$ {$CalculadoraDeImpostos->calcula($Orcamento, "ICMS")} <br>";
echo "Imposto de ISS R$ {$CalculadoraDeImpostos->calcula($Orcamento, "ISS")} <br>";

?>