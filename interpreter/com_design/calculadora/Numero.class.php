<?php 

class Numero implements Expressao {
    private $numero;

    public function __construct($novoNumero)
    {
        $this->numero = $novoNumero;
    }

    public function avalia()
    {
        return $this->numero;
    }
}

?>