<?php 

class ISS implements Imposto{
    public function calcula(Orcamento $Orcamento){
        if($Orcamento->getValor() >= 300){
            return $Orcamento->getValor() * 0.1;
        }

        return $Orcamento->getValor() * 0.1;
    }
}

?>