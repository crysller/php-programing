<?php
require_once 'Pessoa.php';

class Livro {
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($ti, $au, $tp, $le){
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPag($tp);
        $this->setLeitor($le);
        $this->setAberto(false);
    }
    public function detalhes(){
        echo"O Titulo do livro é: ".$this->getTitulo().".</br>";
        echo"O Autor do livro é: ".$this->getAutor().".</br>";
        echo"O livro tem ".$this->getTotPag()." de páginas.</br>";
        if ($this->getAberto()) {
            echo"O livro se encontra ".$this->getAberto().".<br/>";
            echo"Quem está lendo se chama ".$this->getLeitor()." e está na página".$this->getPagAtual().".</br>";    
        } else {
            echo"O livro se encontra ".$this->getAberto().".<br/>";
        }
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getTotPag(){
        return $this->totPag;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }


    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setTotPag($totPag){
        $this->totPag = $totPag;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

}
?>