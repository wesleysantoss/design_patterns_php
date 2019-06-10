<?php 

require_once "autoload.php";

$esquerdoSoma = new Soma(new Numero(5), new Numero(5));
$direitoSoma = new Numero(10);

$Soma = new Soma($esquerdoSoma, $direitoSoma);

$Soma->aceita(new Impressora);
echo "= {$Soma->avalia()} <br>";

// -----------

$esquerdoSubtracao = new Numero(20);
$direitoSubtracao = new Numero(10);

$Subtracao = new Subtracao($esquerdoSubtracao, $direitoSubtracao);

$Subtracao->aceita(new Impressora);
echo "= {$Subtracao->avalia()} <br>";

?>