<?php 
date_default_timezone_set("America/Sao_Paulo");

require_once "AcoesAoGerarNota.class.php";
require_once "Impressora.class.php";
require_once "NotaFiscalDao.php";
require_once "NotaFiscal.class.php";
require_once "NotaFiscalBuilder.class.php";
require_once "Item.class.php";

$NotaFiscalBuilder = new NotaFiscalBuilder;

$NotaFiscalBuilder->comEmpresa("Wesley LTDA");
$NotaFiscalBuilder->comCnpj("123456");
$NotaFiscalBuilder->addItem(new Item("Pedra", 250));
$NotaFiscalBuilder->addItem(new Item("Piso", 850));
$NotaFiscalBuilder->comObservacao("Isto é uma observação");
$NotaFiscalBuilder->comDataEmissao();

$NotaFiscalBuilder->addAcao(new Impressora);
$NotaFiscalBuilder->addAcao(new NotaFiscalDao);

echo '<pre>';
print_r($NotaFiscalBuilder->build());

?>