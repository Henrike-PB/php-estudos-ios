<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<h1>Resultado:</h1>

<?php 
// exemplo de variável, onde $_GET puxa o valor do atributo "name" do input do HTML
    $valor = $_GET["valor"];

    // echo para texto em php
    echo "O valor enviado foi o $valor";

    // raiz quadrada | sqrt função matemática
    $rq = sqrt($valor);

    echo "<p> A raiz de $valor é igual a $rq.</p>";
    ?>

    <p><a href="raiz.html">Voltar</a></p>
    
</body>
</html>