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
    <h1>Funções Aritiméticas</h1>
</header>
<section>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2> Valores recebidos: $v1 e $v2 </h2>";
        echo "O valor absoluto de $v2 e " . abs($v2);
        echo "<br/>O valor de $v1 <sup> $v2</sup> é: ". pow($v1, $v2);
        echo "<br/>A raiz de $v1 é ". sqrt($v1);
        echo "<br/> O valor de $v2 arrendondao é: ". round($v2); //ceil flor
        echo "<br/> A parte inteira de $v2 é: ". intval($v2);
        echo "<br/> O valor de $v1  em moeda é: ". number_format($v1,2,",", ".");
    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
