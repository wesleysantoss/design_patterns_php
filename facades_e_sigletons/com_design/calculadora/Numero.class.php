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

    public function getNumero()
    {
        return $this->numero;
    }

    public function aceita(Impressora $Impressora)
    {
        $Impressora->visitaNumero($this);
    }
}

?>