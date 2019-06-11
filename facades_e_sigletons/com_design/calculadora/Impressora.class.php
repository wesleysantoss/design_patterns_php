<?php 

class Impressora {
    public function visitaNumero(Numero $Numero)
    {
        echo "{$Numero->getNumero()}";
    }

    public function visitaSoma(Soma $Soma)
    {
        echo "({$Soma->getEsquerdo()->aceita($this)} + {$Soma->getDireito()->aceita($this)})";
    }

    public function visitaSubtracao(Subtracao $Subtracao)
    {
        echo "({$Subtracao->getEsquerdo()->aceita($this)} - {$Subtracao->getDireito()->aceita($this)})";
    }
}

?>