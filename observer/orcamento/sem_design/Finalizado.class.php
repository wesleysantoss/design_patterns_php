<?php 

class Finalizado implements EstadoOrcamento {
    public function aplica(Orcamento $Orcamento)
    {
        throw new Exception('Oops, orçamento já está finalizado');
    }

    public function aprova(Orcamento $Orcamento) 
    {
        throw new Exception("Erro, ja está finalizado");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new Exception("Erro, ja está finalizado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new Exception("Erro, ja está finalizado");
    }
}

?>