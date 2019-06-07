<?php 

class Orcamento {
    private $valor;
    private $itens;
    private $estado;

    public function __construct($novoValor)
    {
        $this->valor = $novoValor;
        $this->itens = array();
        $this->estado = new EmAprovacao;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(EstadoOrcamento $novoEstado)
    {
        $this->estado = $novoEstado;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($novoValor)
    {
        $this->valor = $novoValor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function addItem(Item $item)
    {
        $this->itens[] = $item;
    }

    public function aplicaDesconto()
    {
        $this->estado->aplica($this);
    }

    public function aprova()
    {
        $this->estado->aprova($this);
    }

    public function reprova()
    {
        $this->estado->reprova($this);
    }

    public function finaliza()
    {
        $this->estado->finaliza($this);
    }
}

?>