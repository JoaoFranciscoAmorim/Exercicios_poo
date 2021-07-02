<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoas</title>
</head>
<body>
<pre>
    <?php
    require_once 'classes/classepessoa.php';
    require_once 'classes/classealuno.php';
    require_once 'classes/classeprofessor.php';
    require_once 'classes/classefuncionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Roberta");
    $p4->setNome("Caio");

    $p1->setSexo("M");
    $p2->setSexo("F");
    $p3->setSexo("F");
    $p4->setSexo("M");//Eu posso definir um sexo para um funcionário, mesmo não tendo a característica sexo na classe Funcionario, graças ao extends.

    $p2->setCurso("Informática");
    $p3->setSalario(2497.75);
    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);

    ?>
    </pre>
</body>
</html>