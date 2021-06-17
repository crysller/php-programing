<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luta UEC</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';

        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 85.9, 11, 2, 1);
        $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.9, 14, 2, 3);
        $l[2] = new Lutador("Snapbut", "EUA", 35, 1.65, 65.9, 12, 2, 1);
        $l[3] = new Lutador("Dead Code", "Suiça", 28, 1.93, 81.9, 13, 0, 1);
        $l[4] = new Lutador("UFCbol", "França", 37, 1.70, 119.9, 5, 3, 4);
        $l[5] = new Lutador("Nerdaat", "Brasil", 32, 1.80, 105.9, 12, 2, 4);


        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[1], $l[2]);
        $UEC01->lutar();
    ?>
    </pre>
</body>
</html>