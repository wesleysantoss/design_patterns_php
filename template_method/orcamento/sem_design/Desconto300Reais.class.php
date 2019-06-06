<?php 

class Desconto300Reais implements Desconto {
    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() >= 300){
            return $Orcamento->getValor() * 0.03;
        }

        return $this->proximoDesconto->desconto($Orcamento);
    }

    public function setProximo(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}

?>