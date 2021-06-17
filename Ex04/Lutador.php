<?php
class Lutador {
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura, $peso;
    private string $categoria;
    private int $vitorias, $derrotas, $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    public function apresentar() {
        echo"####################";
        echo"</br>";
        echo"Lutador: ". $this->getNome();
        echo"</br>";
        echo"Origem: ". $this->getNacionalidade();
        echo"</br>";
        echo"Idade: ". $this->getIdade();
        echo"</br>";
        echo"Altura: ". $this->getAltura()."m.";
        echo"</br>";
        echo"Pesando: ". $this->getPeso()."Kg.";
        echo"</br>";
        echo"Vitorias: ". $this->getVitorias();
        echo"</br>";
        echo"Derrotas: ". $this->getDerrotas();
        echo"</br>";
        echo"Empates: ". $this->getEmpates();
        echo"</br>";
    }
    public function status() {
        echo"Lutador: ". $this->getNome();
        echo"É um peso ". $this->getCategoria();
        echo"Vitorias: ". $this->getVitorias();
        echo"Derrotas: ". $this->getDerrotas();
        echo"Empates: ". $this->getEmpates();
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    //GET
    public function getNome(){
        return $this->nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    //SET
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function setCategoria(){
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
    }
}
?>