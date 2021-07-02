<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutadores</title>
</head>
<body>
<pre>
    <?php
    require_once 'classes/classelutador.php';
    require_once 'classes/classeluta.php';
    $l = array();
    $l[0] = new Lutador("Pretty Boy", "França", 30, 90, 98.2, 12, 5, 3);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("SnapShadow", "Argentina", 35, 1.68, 57.8, 14, 2, 3);
    $l[3] = new Lutador("Shadow Moon", "Bulgária", 30, 1.68, 57.8, 14, 2, 3);
    $l[4] = new Lutador("Nerd Art", "Rússia", 27, 1.95, 109.1, 11, 4, 0);
    //$l[4]->status();
    //$l[4]->apresentar();
    $uec01 = new Luta();
    $uec01->marcarLuta($l[0],$l[4]);
    $uec01->lutar();
    $l[0]->status();
    ?>
    </pre>
</body>
</html>