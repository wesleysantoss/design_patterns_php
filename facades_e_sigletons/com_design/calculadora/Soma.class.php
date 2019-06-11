<?php 

class Soma implements Expressao {
    private $esquerdo;
    private $direito;

    public function __construct(Expressao $ladoEsquerdo, Expressao $ladoDireito)
    {
        $this->esquerdo = $ladoEsquerdo;
        $this->direito = $ladoDireito;
    }

    public function getEsquerdo()
    {
        return $this->esquerdo;
    }

    public function getDireito()
    {
        return $this->direito;
    }

    public function avalia()
    {
        $valorEsquerdo = $this->esquerdo->avalia();
        $valorDireito = $this->direito->avalia();

        return $valorEsquerdo + $valorDireito;
    }

    public function aceita(Impressora $Impressora)
    {
        $Impressora->visitaSoma($this);
    }
}

?>