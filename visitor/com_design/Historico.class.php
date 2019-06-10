<?php 

class Historico {
    private $estadosContrato;

    public function __construct()
    {
        $this->estadosContrato = array();
    }

    public function getEstado($indice)
    {
        return $this->estadosContrato[$indice];
    }

    public function addEstado(Estado $Estado)
    {
        $this->estadosContrato[] = $Estado;
    }
}

?>