<?php 

class ComandoPagar implements Comando {
    private $pedido;

    public function __construct(Pedido $novoPedido)
    {
        $this->pedido = $novoPedido;
    }

    public function executa()
    {
        echo "Pedido de: {$this->pedido->getCliente()} pago <br>";
        $this->pedido->pagar();
    }
}

?>