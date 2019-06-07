<?php 

class EmAprovacao implements EstadoOrcamento {
    public function aplica(Orcamento $Orcamento)
    {
        $valorDesconto = ($Orcamento->getValor() - ($Orcamento->getValor() * 0.2));
        $Orcamento->setValor($valorDesconto);
        return $valorDesconto;
    }

    public function aprova(Orcamento $Orcamento) 
    {
        $Orcamento->setEstado(new Aprovado);
    }

    public function reprova(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new Reprovado);
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new Exception("Erro ao finalizar, pois ainda está em aprovacao");
    }
}

?>