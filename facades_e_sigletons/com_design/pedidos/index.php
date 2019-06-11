<?php 

spl_autoload_register(function($arquivo){
    if(file_exists("{$arquivo}.class.php")){
        require_once "{$arquivo}.class.php";
    }
    else if(file_exists("{$arquivo}.php")){
        require_once "{$arquivo}.php";
    }
});

$pedido1 = new Pedido("Wesley", 250);
$pedido2 = new Pedido("Wesley2", 50);
$pedido3 = new Pedido("Wesley3", 950);

$FilaDeExecucao = new FilaDeExecucao;

$FilaDeExecucao->add(new ComandoPagar($pedido1));
$FilaDeExecucao->add(new ComandoPagar($pedido2));
$FilaDeExecucao->add(new ComandoPagar($pedido3));

$FilaDeExecucao->add(new ComandoFinalizar($pedido1));
$FilaDeExecucao->add(new ComandoFinalizar($pedido2));
$FilaDeExecucao->add(new ComandoFinalizar($pedido3));

$FilaDeExecucao->processa();

echo "<pre>";
print_r($pedido1);

?>