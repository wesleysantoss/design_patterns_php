<?php 

require_once "autoload.php";

$Historico = new Historico;
$Contrato = new Contrato("Wesley", date('Y-m-d H:i:s'));

echo "<pre>";
print_r($Contrato);

$Historico->addEstado($Contrato->salvaEstado());
$Contrato->avancaEstado();

echo "<pre>";
print_r($Contrato);

$Historico->addEstado($Contrato->salvaEstado());
$Contrato->avancaEstado();

echo "<pre>";
print_r($Contrato);

echo "<pre>";
print_r($Historico->getEstado(0)->getContrato());

?>