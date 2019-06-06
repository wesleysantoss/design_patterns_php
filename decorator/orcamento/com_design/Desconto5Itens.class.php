<?php 

class Desconto5Itens implements Desconto {
    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        if(count($Orcamento->getItens()) >= 5){
            return $Orcamento->getValor() * 0.1;
        } 

        return $this->proximoDesconto->desconto($Orcamento);
    }        

    public function setProximo(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}

?>