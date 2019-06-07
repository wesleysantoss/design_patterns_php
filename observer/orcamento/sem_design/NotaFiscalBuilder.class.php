<?php 

class NotaFiscalBuilder {
    private $empresa;
    private $cnpj;
    private $itens = array();
    private $valorBruto = 0;
    private $valorImpostos = 0;
    private $observacoes;
    private $dataEmissao;

    public function comEmpresa($novoEmpresa)
    {
        $this->empresa = $novoEmpresa;
    }

    public function comCnpj($novoCnpj)
    {
        $this->cnpj = $novoCnpj;
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getValor();
        $this->valorImpostos += $novoItem->getValor() * 0.2;
    }

    public function comObservacao($novoObservacao)
    {
        $this->observacoes = $novoObservacao;
    }

    public function comDataEmissao($novoData = null)
    {
        if(is_null($novoData)){
            $this->dataEmissao = date('Y-m-d H:i:s');
        }
        else{
            $this->dataEmissao = $novoData;
        }
    }

    public function build()
    {
        $NotaFiscal = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacoes, $this->dataEmissao);

        // Antes de retornar a nota fiscal gerada, precisa mandar p/ impressora.
        $this->imprimir($NotaFiscal);
        $this->salvaBanco($NotaFiscal);

        return $NotaFiscal;
    }

    public function imprimir(NotaFiscal $NotaFiscal)
    {
        echo "<br>Mandei para a impressora<br>";
    }

    public function salvaBanco(NotaFiscal $NotaFiscal)
    {
        echo "<br>Salvei no BD<br>";
    }
}

?>