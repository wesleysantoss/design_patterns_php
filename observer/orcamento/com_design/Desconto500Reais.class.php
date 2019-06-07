<?php 

class Desconto500Reais implements Desconto {
    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() >= 500){
            return $Orcamento->getValor() * 0.05;
        }

        return $this->proximoDesconto->desconto($Orcamento);
    }

    public function setProximo(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}

?>