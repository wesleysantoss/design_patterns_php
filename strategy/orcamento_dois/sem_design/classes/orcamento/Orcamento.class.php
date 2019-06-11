<?php 

namespace classes\orcamento;

class Orcamento {
    private $cliente;
    private $produtos;
    private $data;
    private $total;

    public function __construct($novoCliente)
    {
        $this->cliente = $novoCliente;
        $this->produtos = array();
        $this->data = date('Y-m-d H:i:s');
    }

    public function addProduto($Produto)
    {
        if($Produto->plano == "AS"){
            $this->total += ($Produto->valorBase + ($Produto->valorBase * 0.05));
        }
        else if($Produto->plano == "WE"){
            $this->total += ($Produto->valorBase + ($Produto->valorBase * 0.1));
        }
        else if($Produto->plano == "6"){
            $this->total += ($Produto->valorBase + ($Produto->valorBase * 0.2));
        }
        else if($Produto->plano == "12"){
            $this->total += ($Produto->valorBase + ($Produto->valorBase * 0.3));
        }
        
        $this->produtos[] = $Produto;
    }
    
}

?>