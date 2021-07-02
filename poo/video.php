
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeo</title>
</head>
<body>
<pre>
    <?php
        require_once 'classes/classevideo.php';
        require_once 'classes/classeusuario.php';
        require_once 'classes/classegafanhoto.php';
        require_once 'classes/classevisualizacao.php';

        $v[0] = new Video("Aula 01 de PHP");
        $v[1] = new Video("Aula 02 de Java");
        $v[2] = new Video("Aula 03 de Python");

        $u[0] = new Gafanhoto("Maria", 24, "F", "marizinha");
        $u[1] = new Gafanhoto("Roberta", 28, "F", "bebetinha69");

        $z[0] = new Visualizacao($u[0], $v[2]);
        $z[1] = new Visualizacao($u[1], $v[1]);
        $z[2] = new Visualizacao($u[1], $v[2]);//o mesmo gafanhoto, assistindo outro vídeo

        $z[0]->avaliarPorc(90);

        $v[2]->play();
        //$v[2]->pause();
        $v[1]->like();
        $v[2]->like();
        print_r($v);
        print_r($u);
        print_r($z);
    ?>
    </pre>
</body>
</html>