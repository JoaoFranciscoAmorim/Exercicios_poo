<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>
<body>
<pre>
    <?php
    require_once 'classes/classedesafio01.php';
    require_once 'classes/classedesafio01livro.php';

    $p[0] = new Pessoa("Pedro", 29, "Masculino");
    $p[1] = new Pessoa("Maria", 22, "Feminino");

    $l[0] = new Livro("PHP Básico", "João Ferreira", 300, $p[0]);
    $l[1] = new Livro("POO com PHP", "Mário Oliveira", 500, $p[1]);
    
    $l[0]->folhear(295);
    $l[0]->avancarPag();
    //print_r($l[0]);
    $l[0]->detalhes();
    ?>
    </pre>
</body>
</html>