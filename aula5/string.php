<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Funções de Texto</title>
</head>
<body>
    

    <h1>Funções de Texto</h1>

    <div class="container">

    <?php 
    
    $texto = "Instituto-da-Oportunidade-Social";
    $textoc = str_replace("-", " ", $texto);
    $nome = "henrike pajares braga";
    $frase = "Queria sair para comprar um café em uma cafeteria, mas me falta dinheiro e tempo, hoje tudo se resume a isso, não da para comprar tempo! E nem café...";

    echo "<br>Texto: Instituto-da-Oportunidade-Social";
    echo "<br>Textoc: " . $textoc;

    echo "<br>" . $textoc;
    echo "<br> Texto corrigido: " . str_replace("-", " ", $texto);
    echo "<br> Quantidade de Caracteres do Texto: " . strlen($texto);
    echo "<br> Quantidade de Caracteres do Textoc: " . strlen($textoc);
    echo "<br> Quantidade de Palavras do Texto: " . str_word_count($texto);
    echo "<br> Quantidade de Palavras do Textoc: " . str_word_count($textoc);
    echo "<br> Texto Minúsculo: " . strtolower($textoc);
    echo "<br> Texto Maiúscolo: " . strtoupper($textoc);
    echo "<br> Exemplo: " . ucfirst($nome);
    echo "<br> Exemplo: " . ucwords($nome);
    echo "<br> Exemplo: " . strpos($textoc, "Social");
    echo "<br> Exemplo: " . strrev($nome);
    echo "<br> Exemplo: " . substr($textoc, 2);
    echo "<br> Exemplo: " . str_repeat("Henrike", 10);
    echo "<br> Exemplo: " . strrev(strtoupper($textoc));
    echo "<br> Exemplo: Quantas vezes aparece a palavra 'Social' no Textoc: " . substr_count($textoc, "Social");
    
    //essa função deixa o primeiro caracterere minusculo 
    echo "<br> Exemplo: " . lcfirst($textoc);

    // essa função substitui alguma palavra na string
    echo "<br> Exemplo: " . str_replace("Social", "Mundial", $textoc);

    // essa função embaralha os caracteres de uma string
    echo "<br> Exemplo: " . str_shuffle($nome);

    // essa função compara duas strings, se a primeira for igual a segunda string, retorna 0, se a primeira for menor que a segunda string, um numero negativo, e se for maior, retorna um positivo
    echo "<br> Exemplo: " . strcmp($texto, $textoc);

    echo "<br> Exemplo: " . wordwrap($frase, 1);



    ?>


    </div>
   

    <footer>
        <ul>
            <ul><a href=""></a></ul>
            <ul><a href=""></a></ul>
            <ul><a href=""></a></ul>
        </ul>
    </footer>
</body>
</html>