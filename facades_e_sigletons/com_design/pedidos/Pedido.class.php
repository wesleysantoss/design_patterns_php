<?php 

class Pedido {
    private $cliente;
    private $valor;
    private $status;

    public function __construct($novoCliente, $novoValor)
    {
        $this->cliente = $novoCliente;
        $this->valor = $novoValor;
        $this->status = new Novo;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function pagar()
    {
        $this->status = new Pago;
    }

    public function finalizar()
    {
        $this->status = new Finalizado;
    }
}

?>