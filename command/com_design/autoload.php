<?php 

spl_autoload_register(function($nomeArquivo){
    if(file_exists("{$nomeArquivo}.class.php")){
        require_once "{$nomeArquivo}.class.php";
    }
    else if(file_exists("{$nomeArquivo}.php")){
        require_once "{$nomeArquivo}.php";
    }
})

?>