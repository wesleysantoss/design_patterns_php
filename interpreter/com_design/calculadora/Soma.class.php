<?php 

class Soma implements Expressao {
    private $esquerdo;
    private $direito;

    public function __construct(Expressao $ladoEsquerdo, Expressao $ladoDireito)
    {
        $this->esquerdo = $ladoEsquerdo;
        $this->direito = $ladoDireito;
    }

    public function avalia()
    {
        $valorEsquerdo = $this->esquerdo->avalia();
        $valorDireito = $this->direito->avalia();

        return $valorEsquerdo + $valorDireito;
    }
}

?>