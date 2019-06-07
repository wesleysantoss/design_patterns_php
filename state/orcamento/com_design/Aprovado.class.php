<?php 

class Aprovado implements EstadoOrcamento {
    public function aplica(Orcamento $Orcamento)
    {
        $valorDesconto = ($Orcamento->getValor() - ($Orcamento->getValor() * 0.5));
        $Orcamento->setValor($valorDesconto);
        return $valorDesconto;
    }

    public function aprova(Orcamento $Orcamento) 
    {
        throw new Exception("Orçamento já aprovado");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento aprovado não pode ser reprovado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new Finalizado);
    }
}

?>