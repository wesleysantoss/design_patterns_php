<?php 

interface Desconto {
    public function desconto(Orcamento $Orcamento);
    public function setProximo(Desconto $proximoDesconto);
}

?>