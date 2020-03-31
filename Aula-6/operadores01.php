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
    $preco  = $_GET["p"];
    echo "O preço do produto é: R$ ". number_format($preco,2,",",".");
    $preco -= $preco*0.1;
    echo "<br/>O Preço com deconto de 10% é igual: R$ ". number_format($preco, 2,",",".");

    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
