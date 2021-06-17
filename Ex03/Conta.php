<?php
class Conta {
    public $nunConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($numeroconta, $tipo, $nomedono){
        $this->nunConta = $numeroconta;
        $this->tipo = $tipo;
        $this->dono = $nomedono;
        $this->saldo = 0;
        $this->status = false;
        if ($this->getTipo() == "CC"){
            $this->setSaldo($this->getSaldo() + 50);
        }elseif ($this->getTipo() == "CP") {
            $this->setSaldo($this->getSaldo() + 150);
        }
        $this->AbrirConta();
    }
    //METODOS
    public function AbrirConta(){
        $this->setStatus(true);
    }
    public function FecharConta(){
        if ($this->getSaldo() != 0) {
            echo"<p>Seu saldo deve ser igual a 0 para fechar a conta</p>";
        }else{
        $this->setStatus(false);
        }
    }
    public function Depositar($dep){
        if ($this->getStatus() != 0) {
            $this->setSaldo($this->getSaldo() + $dep);
        }
    }
    public function Sacar($saq){
        if ($this->getStatus()) {
            if ($this->getSaldo() <= 0 or $this->getSaldo() > $saq) {
                $this->setSaldo($this->getSaldo() - $saq);
            }else{
                echo"<p>Saque invalido!</p>";    
            }
        }else{
            echo"<p>Conta desativada!</p>";
        }
    }
    public function PagarMensal(){
        if ($this->getTipo() == "CC"){
            $this->setSaldo($this->getSaldo() - 12);
        }elseif ($this->getTipo() == "CP") {
            $this->setSaldo($this->getSaldo() - 20);
        }
    }

    //GET E SET DOS ATRIBUTOS
    //GET
    public function getnunConta(){
        return $this->nunConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getStatus(){
        return $this->status;
    }

    //SET
    public function setnunConta($nun){
        return $this->nunConta = $nun;
    }
    public function setTipo($t){
        return $this->tipo = $t;
    }
    public function setDono($d){
        return $this->dono = $d;
    }
    public function setSaldo($s){
        return $this->saldo = $s;
    }
    public function setStatus($st){
        return $this->status = $st;
    }
}
?>