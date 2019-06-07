<?php 
date_default_timezone_set("America/Sao_Paulo");

require_once "NotaFiscal.class.php";
require_once "Item.class.php";

$itens[] = new Item("Pedra", 250);
$itens[] = new Item("Piso", 250);

$NotaFiscal = new NotaFiscal("Wesley LTDA", "123456", $itens, 500, 100, "Nova obs.", date('Y-m-d H:i:s'));

echo '<pre>';
var_dump($NotaFiscal);

?>