<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>
<pre>
    <?php
    require_once 'classes/classemamifero.php';
    require_once 'classes/classereptil.php';
    require_once 'classes/classepeixe.php';
    require_once 'classes/classeave.php';
    require_once 'classes/classecanguru.php';
    require_once 'classes/classecachorro.php';
    //Não precisa dar o require_once na classe Animal, pois ela é abstrata.

    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();
    $canguru = new Canguru();
    $cachorro = new Cachorro();

    $m->setPeso(28.9);
    $cachorro->reagirDono("Dono");
    $cachorro->reagirIdadePeso(5, 12);
    $m->locomover();
    $r->locomover();
    $p->locomover();
    $a->locomover();
    $canguru->locomover();
    $canguru->emitirSom();
    $cachorro->locomover();
    $cachorro->emitirSom();
    //Quando eu mostrar o locomover e o emitirSom de todos, será diferente para cada um, mesmo sendo o mesmo método (mesma assinatura), criado de forma abstrata na classe Animal e implementado em todas as suas sub-classes. Isto é polimorfismo de sobreposição. Métodos com a mesma assinatura têm a mesma quantidade de parâmetros e do mesmo tipo.
    //Polimorfismo de Sobreposição: mesma assinatura, classes diferentes.
    //Polimorfismo de Sobrecarga: assinaturas diferentes, mesma classe.
    print_r($m);
    print_r($r);
    print_r($p);
    print_r($a);
    print_r($canguru);
    print_r($cachorro);

    ?>
    </pre>
</body>
</html>