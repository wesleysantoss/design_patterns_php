<?php 

namespace classes\produtos;

class Produto {
    private $nome;
    private $plano;
    private $valorBase;

    public function __construct($novoNome, $novoPlano, $novoValorBase)
    {
        $this->nome = $novoNome;
        $this->plano = $novoPlano;
        $this->valorBase = $novoValorBase;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function valorReal()
    {
        return $this->plano->calcularValor($this);
    }
}

?>