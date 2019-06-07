<?php 

class Reprovado implements EstadoOrcamento {
    public function aplica(Orcamento $Orcamento)
    {
        throw new Exception('Oops, orçamento já está reprovado');
    }

    public function aprova(Orcamento $Orcamento) 
    {
        throw new Exception("Erro, ja está reprovado");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new Exception("Erro, ja está reprovado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new Exception("Erro, ja está reprovado");
    }
}

?>