<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
<pre>
    <?php
    require_once 'classes/classecontroleremoto.php';
    $c1 = new ControleRemoto();
    $c1->ligar();
    $c1->maisVolume();
    $c1->play();
    //$c1->ligarMudo();
    $c1->abrirMenu();
    ?>
    </pre>
</body>
</html>