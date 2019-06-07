<?php 

class Orcamento {
    private $valor;
    private $itens;
    private $estado;

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

    // 1 - Aprovado
    // 2 - Reprovado
    // 3 - Em aprovação
    // 4 - Finalizado
    public function aplicaDesconto()
    {
        if($this->estado == 1){
            $this->valor -= $this->valor * 0.05;
        }
        else if($this->estado == 2){
            $this->valor -= $this->valor * 0.02;
        }
        else if($this->estado == 3){
            $this->valor -= $this->valor * 0.01;
        }
        else if($this->estado == 4){
            // Não recebe desconto.
        }
    }
}

?>