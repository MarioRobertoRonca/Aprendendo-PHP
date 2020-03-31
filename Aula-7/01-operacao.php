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
    <h1>Operação</h1>
</header>
<section>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s")? $n1+$n2 : $n1- $n2;
        echo "<br/> O resultado é: $r";
    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
