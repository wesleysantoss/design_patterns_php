<?php

namespace classes\planos;
use classes\planos\Plano;

class PlanoWE extends Plano { 
    public function __construct()
    {
        $this->taxaAcrescimo = 0.05;
    }
}

?>