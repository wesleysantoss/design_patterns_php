<?php 

namespace classes\produtos;

class Produto {
    private $nome;
    private $plano;
    private $valorBase;

    public function __construct($novoNome, $novoPlano, $novovalorBase)
    {
        $this->nome = $novoNome;
        $this->plano = $novoPlano;
        $this->valorBase = $novovalorBase;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }
}

?>