<?php 

interface Expressao {
    public function avalia();
    public function aceita(Impressora $Impressora);
}

?>