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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a"+ number_format($rq,2);
    ?>
</section>
<footer>
    <a href="01exercicio.html">Voltar</a>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
