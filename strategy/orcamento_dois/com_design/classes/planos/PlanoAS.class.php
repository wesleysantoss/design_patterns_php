<?php 

namespace classes\planos;
use classes\planos\Plano;

class PlanoAS extends Plano {
    public function __construct()
    {
        $this->taxaAcrescimo = 0.1;
    }
}

?>