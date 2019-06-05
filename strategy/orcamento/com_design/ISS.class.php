<?php 

class ISS implements Imposto{
    public function calcula(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.1;
    }
}

?>