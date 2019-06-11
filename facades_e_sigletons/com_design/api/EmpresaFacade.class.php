<?php 

class EmpresaFacade {
    private static $instance;

    public static function getInstance()
    {
        if(is_null(self::instance)){
            self::instance = new EmpresaFacade;
        }

        return self::instance;
    }

    public function criarContrato($nome, $valor)
    {
        return new Contrato($nome, $valor);
    }

    public function criarItem($item, $valor)
    {
        return new Item($item, $valor);
    }

    public function criarPedido($nome, $valor)
    {
        return new Pedido($nome, $valor);
    }

    public function finalizaPedido(Pedido $pedido)
    {
        // Lógica aqui.
    }
}

?>