<?php
require_once 'Livro.php';
class Publicacao {
    public function abrir($livro) {
        if ($livro->getAberto()==false) {
            $livro->setAberto(true);
            $livro->setPagAtual(1);
            echo"<p>Livro aberto!</p>";
        }else {
            echo"<p>O livro já está aberto!</p>";
        }
    }
    public function fechar($livro) {
        if ($livro->getAberto()==true) {
            $livro->setAberto(false);
            echo"<p>Livro fechado!</p>";
        }else {
            echo"<p>O livro já está fechado!</p>";
        }
    }
    public function folhear($livro) {
        if ($livro->getAberto()==true) {
            $pagAle = rand(0, $livro->getTotPag());
            $livro->setPagAtual($pagAle);
            echo"O página aleatoria foi: ".$pagAle.".</br>";
        } else {
            echo"O livro está fechado!</br>";
        }
    }
    public function avanPag($pag) {
        if ($pag == null) {
            $pag->setPagAtual($pag->getPagAtual() + 1);
            echo"Avançou uma página.";
        } else {
            $pag->setPagAtual($pag->getPagAtual() + 1);
            echo"Avançou uma página.</br>";
        }
    }
    public function voltarPag($pag) {
        if ($pag == null) {
            $pag->setPagAtual($pag->getPagAtual() - 1);
            echo"Voltou uma página.";
        } else {
            $pag->setPagAtual($pag->getPagAtual() - 1);
            echo"Voltou uma página</br>.";
        }
    }
}
?>