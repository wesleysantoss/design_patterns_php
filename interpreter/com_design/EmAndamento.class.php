<?php 

class EmAndamento implements TipoDeContrato {
    public function avanca(Contrato $Contrato)
    {
        $Contrato->setTipo(new Finalizado);
    }
}

?>