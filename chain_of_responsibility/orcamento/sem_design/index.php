<?php 

require_once "Orcamento.class.php";
require_once "Item.class.php";
require_once "CalculadoraDeImpostos.class.php";
require_once "CalculadoraDeDescontos.class.php";
require_once "Imposto.php";
require_once "ICMS.class.php";
require_once "ISS.class.php";
require_once "KCV.class.php";

$Orcamento = new Orcamento(400);
$Orcamento->addItem(new Item('Porta', 150));
$Orcamento->addItem(new Item('Janela', 150));
$Orcamento->addItem(new Item('Piso', 150));
$Orcamento->addItem(new Item('Pedra', 150));
$Orcamento->addItem(new Item('Torneira', 150));
$Orcamento->addItem(new Item('Pia de banheiro', 150));

$CalculadoraDeImpostos = new CalculadoraDeImpostos;

echo "Valor orçamento R$ {$Orcamento->getValor()} <br><br>";

// Impostos em cima do orçamento.
echo "Imposto de ICMS R$ {$CalculadoraDeImpostos->calcula($Orcamento, new ICMS)} <br>";
echo "Imposto de ISS R$ {$CalculadoraDeImpostos->calcula($Orcamento, new ISS)} <br>";
echo "Imposto de KCV R$ {$CalculadoraDeImpostos->calcula($Orcamento, new KCV)} <br>";

// Descontos para o orçamento.
$CalculadoraDeDescontos = new CalculadoraDeDescontos;

// Atualmente o desconto é aplicado caso o valor do orçamento seja maior que 500.
// Ou tenha mais que 5 itens.
echo "<br><br> Descontos aplicado: <br>";
echo "Desconto de R$ {$CalculadoraDeDescontos->calcula($Orcamento)}";
?>