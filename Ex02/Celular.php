<?php
class Celular {
    public $modelo;
    private $ram;
    private $carga;
    private $estado;


    public function __construct($modelo, $ram, $carga, $estado){
        $this->modelo = $modelo;
        $this->ram = $ram;
        $this->carga = $carga;
        $this->estado = $estado;
    }

    //function Set
    public function setModelo($m){
        return $this->modelo = $m;
    }
    public function setRam($r){
        return $this->ram = $r;
    }

    //function Get
    public function getModelo(){
        return $this->modelo;
    }
    public function getRam(){
        return $this->ram;
    }

    //function simple
    public function check(){
        if ($this->carga <= 0){
            $this->estado = false;
        }
    }
    public function app(){
        $this->carga -= 50;
    }
    public function carga(){
        $this->carga = 100;
    }
    public function ligar(){
        $this->estado = true;
    }
    public function desligar(){
        $this->estado = false;
    }
}
class Caneta {
    public $cor;
    public $modelo;
    public $ponta;

    //function Set
    public function setModelo($m){
        return $this->modelo = $m;
    }
    public function setCor($c){
        return $this->ram = $c;
    }
    public function setPonta($p){
        return $this->ponta = $p;
    }
    
    //function Get
    public function getModelo(){
        return $this->modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getPonta(){
        return $this->ponta;
    }
}
?>