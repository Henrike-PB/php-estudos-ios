<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcule</title>
</head>
<body>
    
    <?php 

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacao'])) {

    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $operacao = $_GET["operacao"];

  
    if ($operacao == 'soma') {
        $resultado = $n1 + $n2;
    } elseif ($operacao == 'subtracao') {
        $resultado = $n1 - $n2;
    } elseif ($operacao == 'multiplicacao') {
        $resultado = $n1 * $n2;
    } elseif ($operacao == 'divisao') {
        // Verifica se o segundo número é zero para evitar divisão por zero
        if ($n2 != 0) {
            $resultado = $n1 / $n2;
        } else {
            $resultado = "Erro: Divisão por zero";
        }
    } elseif ($operacao == 'potencia') {
        $resultado = round(pow($n1, $n2),3); // Função pow para calcular potência
    } elseif ($operacao == 'modulo') {
        $resultado = $n1 % $n2; // Operador % para calcular o módulo
    } else {
        $resultado = "Operação inválida";
    }

    // Exibe o resultado
    echo "Resultado: $resultado";
} else {
    echo "Por favor, preencha todos os campos.";
}


    
    
    ?>


<br>
<a href="index.html">Voltar</a>

</body>
</html>