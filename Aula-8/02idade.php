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
        $nome = isset($_GET["nome"])? $_GET["nome"]:"Não informado";
        $ano  = isset($_GET["ano"])? $_GET["ano"]: 0;
        $sexo = isset($_GET["sexo"])? $_GET["sexo"]:"Não informado";
        $idade = date("Y") - $ano;
        echo " $nome é $sexo tem $idade anos. ";
    ?>
</section>
<footer>
    <a href="02exercicio.html">Voltar</a>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
