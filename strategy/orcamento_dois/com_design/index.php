<?php

require_once "autoload.php";

use classes\produtos\Produto;
use classes\orcamento\Orcamento;
use classes\planos\PlanoAS;
use classes\planos\PlanoWE;
use classes\planos\Plano6;
use classes\planos\Plano12;

echo "Orçamento de produtos <br>";

$FinanceiroAS = new Produto("Financeiro", new PlanoAS, 250);
$ContabilidadeAS = new Produto("Contabilidade", new PlanoAS, 350);

$Orcamento = new Orcamento("Wesley");

$Orcamento->addProduto($FinanceiroAS);
$Orcamento->addProduto($ContabilidadeAS);

echo "<pre>";
print_r($Orcamento);

?>