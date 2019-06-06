<?php 

class Orcamento {
    private $valor;
    private $itens;

    public function __construct($novoValor){
        $this->valor = $novoValor;
        $this->itens = array();
    }

    public function getValor(){
        return $this->valor;
    }

    public function getItens(){
        return $this->itens;
    }

    public function addItem(Item $item){
        $this->itens[] = $item;
    }
}

?>