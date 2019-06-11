<?php 

class ComandoFinalizar implements Comando {
    private $pedido;

    public function __construct(Pedido $novoPedido)
    {
        $this->pedido = $novoPedido;
    }

    public function executa()
    {
        echo "Pedido de: {$this->pedido->getCliente()} finalizado <br>";
        $this->pedido->finalizar();
    }

}

?>