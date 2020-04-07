<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/estilo.css">
    <?php
        $txt = isset($_GET["t"])? $_GET["t"]: " Não tem informações";
        $tam = isset($_GET["tam"])? $_GET["tam"]: "12pt";
        $cor = isset($_GET["cor"])? $_GET["cor"]: "#000000";
        echo "$tam e $cor"
    ?>
    <style>
        span.texto{
           font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <title>Document</title>
</head>
<body>
<header>

</header>
<section>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>

</section>
<footer>
    <p> &copy; Mário Roberto</p>
    <a href="03exercicio.html">Voltar</a>
</footer>


</body>
</html>
