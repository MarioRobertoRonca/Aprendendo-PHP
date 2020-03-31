<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Operadores</h1>
</header>
<section>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos são $n1  e $n2! </h2>";
        $m  = ($n1 + $n2) /2;
        echo "A soma vale: ". ($n1+$n2);
        echo "<br/> A subtração vale: " .($n1-$n2);
        echo "<br/> A Multiplicação vale: ".($n1*$n2);
        echo "<br/> A Divisão vale: ". ($n1/$n2);
        echo "<br/> O modulo é: ". ($n1%$n2);
        echo "<br/> A media entre $n1 e $n2 e igual: $m ";
    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
