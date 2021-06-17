<?php
class Cep {
    public $cep;

    public function __construct($ce){
        $this->setCep($ce);
    }
    public function consultar(){
        ini_set('memory_limit', '-1'); //Libera memoria do servidor php.
        if (in_array($this->getCep(),range(1000,1999))) {
            echo"<p>Encontrado</p>";
        } elseif (in_array($this->getCep(),range(2000,2999))) {
            echo"<p>Encontrado</p>";
        } elseif (in_array($this->getCep(),range(3000,3999))) {
            echo"<p>Encontrado</p>";
        } else {
            echo"<p>Não encontrado</p>";
        }
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($c){
        $this->cep = $c;
    }
}
/*
('09000001', '09399999')
('09600001', '09899999')
('09500001', '09599999')
*/
?>

