<?php

require_once "autoload.php";

use classes\produtos\Produto;
use classes\orcamento\Orcamento;

echo "Orçamento de produtos <br>";

$FinanceiroAS = new Produto("Financeiro", "AS", 250);
$ContabilidadeAS = new Produto("Contabilidade", "AS", 350);

$Orcamento = new Orcamento("Wesley");

$Orcamento->addProduto($FinanceiroAS);
$Orcamento->addProduto($ContabilidadeAS);

echo "<pre>";
print_r($Orcamento);

?>