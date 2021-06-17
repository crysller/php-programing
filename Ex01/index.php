<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->cor = "preto";
        $c1->modelo = "BIC";
        //$c1->ponta = 0.7;
        //$c1->carga = 50;
        //$c1->tampada = true;

        echo"<p>";
        print_r($m1->cor);
        echo"</p>";
        
        echo"<p>";
        print_r($m1->modelo);
        echo"</p>";
    ?>
    </pre>
</body>
</html>