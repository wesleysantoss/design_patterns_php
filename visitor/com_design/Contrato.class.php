<?php 

class Contrato {
    private $nome;
    private $data;
    private $tipo;

    public function __construct($novoNome, $novoData, $novoTipo = null)
    {
        $this->nome = $novoNome;
        $this->data = $novoData;
        $this->tipo = $novoTipo === null ? new Novo : $novoTipo;
    }

    public function setTipo(TipoDeContrato $novoTipo)
    {
        $this->tipo = $novoTipo;
    }

    public function avancaEstado()
    {
        $this->tipo->avanca($this);
    }

    public function salvaEstado()
    {
        return new Estado(new Contrato($this->nome, $this->data, $this->tipo));
    }
}

?>