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
        require_once 'Celular.php';

        $c1 = new Celular("Moto", "4GB", 85, true);
        print_r($c1);
        echo"<p>Carregando...</p>";
        $c1->carga();
        echo"<p>Carregado</p>";
        $c1->app();
        $c1->app();
        $c1->check();
        print_r($c1);

        //Objeto Caneta!
        $cel1 = new Caneta;
        $cel1->setModelo("BIC");
        $cel1->setPonta(0.7);
        $cel1->setCor("Azul");
        print_r($cel1);

    ?>
    </pre>
</body>
</html>