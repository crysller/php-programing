<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta CEP</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Cep.php';

        $num1 = new Cep(3658);
        $num2 = new Cep(1479);
        $num3 = new Cep(2236);
        $num4 = new Cep(4500);
        $num1->consultar();
        $num2->consultar();
        $num3->consultar();
        $num4->consultar();
        print_r($num1);
        print_r($num2);
        print_r($num3);
        print_r($num4);
    ?>
    </pre>
</body>
</html>