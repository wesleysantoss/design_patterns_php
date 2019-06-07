<?php 

class NotaFiscal {
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    public function __construct($novoEmpresa, $novoCnpj, $novoItens, $novoValorBruto, $novoValorImposto, $novoObservacoes, $novoDataEmissao)
    {
        $this->empresa = $novoEmpresa;
        $this->cnpj = $novoCnpj;
        $this->itens = $novoItens;
        $this->valorBruto = $novoValorBruto;
        $this->valorImpostos = $novoValorImposto;
        $this->observacoes = $novoObservacoes;
        $this->dataEmissao = $novoDataEmissao;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
}

?>