<?php 

class Estado {
    private $contrato;

    public function __construct(Contrato $novoContrato)
    {
        $this->contrato = $novoContrato;
    }

    public function getContrato()
    {
        return $this->contrato;
    }
}

?>