<?php 

class Novo implements TipoDeContrato {
    public function avanca(Contrato $Contrato)
    {
        $Contrato->setTipo(new EmAndamento);
    }
}

?>