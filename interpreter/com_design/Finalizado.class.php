<?php 

class Finalizado implements TipoDeContrato {
    public function avanca(Contrato $Contrato)
    {
        throw new Exception("Oops, contrato já finalizado, não é possível avançar seu estado");
    }
}

?>