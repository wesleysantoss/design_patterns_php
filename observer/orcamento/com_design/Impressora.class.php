<?php 

class Impressora implements AcoesAoGerarNota {
    public function executa(NotaFiscal $NotaFiscal)
    {
        echo "<br>Mandei para a impressora<br>";
    }
}

?>