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
    <h1>Variáveis Identicas</h1>
</header>
<section>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)?"SIM":"NÃO";
        echo "As variaveis A e B são iguais? $r ";
    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
