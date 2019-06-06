<?php 

class Item {
    private $nome;
    private $valor;

    public function __construct($novoNome, $novoValor)
    {
       $this->nome = $novoNome;
       $this->valor = $novoValor; 
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }
}

?>