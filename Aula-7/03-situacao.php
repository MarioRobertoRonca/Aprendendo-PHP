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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
        echo"A Média entre $nota1 e $nota2 é $m <br/>";
        //$sit  = ($m>6)?"Aproado":"reprovado";
        echo "A situação do aluno é: ". (($m>6)?"Aprovado": "Reprovado");

    ?>
</section>
<footer>
    <p> &copy; Mário Roberto</p>
</footer>


</body>
</html>
