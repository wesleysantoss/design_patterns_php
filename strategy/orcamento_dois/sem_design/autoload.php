<?php 

spl_autoload_register(function($arquivo){
    if(file_exists("{$arquivo}.class.php")){
        require_once "{$arquivo}.class.php";
    }
    else if("{$arquivo}.php"){
        require_once "{$arquivo}.php";
    }
})

?>