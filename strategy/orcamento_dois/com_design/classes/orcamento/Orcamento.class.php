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
        $this->total += $Produto->valorReal();
        $this->produtos[] = $Produto;
    }
    
}

?>