<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <?php 
    $texto = $_GET["texto"];
    $tamanho = $_GET["tamanho"];
    $cor = $_GET["cor"];
    $fonte = $_GET["fonte"];
    $fundo = $_GET["fundo"];
    ?>

    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
            font-family: <?php echo $fonte; ?>;
        }

        body{
            background: <?php echo $fundo; ?>;
        }
    </style>
</head>
<body>

<h1>Resultado</h1>
    <?php 
    echo "<span class = 'texto'> $texto </span>";
    ?>

    <br>
    <a href="cores.html">Voltar</a>

</body>
</html>