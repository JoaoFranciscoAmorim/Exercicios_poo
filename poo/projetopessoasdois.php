<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoas Dois</title>
</head>
<body>
<pre>
    <?php
    require_once 'classes/classepessoadois.php';
    require_once 'classes/classealunodois.php';
    require_once 'classes/classevisitante.php';
    require_once 'classes/classebolsista.php';

    //$p1 = new Pessoadois(); A classe abstrata pessoadois não pode instanciar objetos. Ela só pode ser utilizada para heranças, ou seja, para gerar sub-classes.
    $p1 = new Visitante();
    $p2 = new Alunodois();
    $p3 = new Bolsista();

    $p2->setMatricula(1111);
    $p2->setCurso("PHP Básico");
    $p2->setNome("Maria");
    $p2->setIdade(29);
    $p2->setSexo("F");
    //$p2->cancelarMatr();
    $p2->pagarMensalidade();

    $p3->setBolsa(12.5);
    $p3->setMatricula(1112);
    $p3->setCurso("Engenharia Elétrica");
    $p3->setNome("Renata");
    $p3->setIdade(26);
    $p3->setSexo("F");
    //$p3->cancelarMatr();
    $p3->pagarMensalidade();

    print_r($p1);
    print_r($p2);
    print_r($p3);
    ?>
    </pre>
</body>
</html>