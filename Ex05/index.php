<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        require_once 'Publicacao.php';

        $pub = new Publicacao();
        $livro = new Livro("O guia definitivo do mochileiro das galáxias","DOUGLAS ADAMS",784,"Enryck");
        $p = new Pessoa("Enryck", 23, "M");
        $p->fazerAniver();
        $pub->abrir($livro);
        $pub->folhear($livro);
        $pub->avanPag($livro);
        print_r($livro);
        print_r($p);
    ?>
    </pre>
</body>
</html>