<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Banco</title>
    <style>
    h1 {
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Meu banco</h1>
    <pre>
    <?php
        require_once 'Conta.php';

        $p1 = new Conta(1,"CC","Enryck");
        $p1->Depositar(1000);
        $p1->PagarMensal();
        $p1->Sacar(500);
        print_r($p1);
    ?>
    </pre>
</body>
</html>