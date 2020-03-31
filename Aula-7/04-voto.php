<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>
<body>
<header>

</header>
<section>
    <?php
        $ano = $_GET["an"];
        $idade =  2020-$ano;
        echo "Quem nasceu em $ano tem idade de $idade anos. ";
        $tipo = ($idade>=18 && $idade<65)?"Obrigatório": "Não Obrigatório";
        echo "E dessa forma seu voto é $tipo";
    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
