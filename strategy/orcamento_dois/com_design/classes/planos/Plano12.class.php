<?php 

namespace classes\planos;
use classes\planos\Plano;

class Plano12 extends Plano { 
    public function __construct()
    {
        $this->taxaAcrescimo = 0.3;
    }
}

?>