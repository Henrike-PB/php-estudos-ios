<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    

    <?php 
    
    echo "<h2>Operadores</h2>";

    $n1 = 5;
    $n2 = 3;
    $n3 = 7;
    $n4 = 40;
    $n5 = 9;
    $n6 = 2;
    // $n7 = 5.7;

    echo "<br>A soma vale ".($n1+$n2); 
    // round arredonda um valor, adicionando um numero apos virgula do valor, adiciona uma casal decimal, no caso ali foi 2
    echo "<br>A divisão vale ". round($n1/$n2,2);
    echo "<br>A divisão vale ".($n5/$n2);
    echo "<br>A multiplicação vale ".($n5*$n2);
    echo "<br>A subtração vale ".($n6-$n2);
    // echo "<br> O módulo vale ".()
    
    // maneira correta de fazer média
    $nota1 = 5;
    $nota2 = 3;
    $media = $nota1 + $nota2/2;
    echo "<br><br> A media vale $media";

    // maneira "errada"
    $nota1 = 5;
    $nota2 = 3;
    $media = ($nota1 + $nota2)/2;
    echo "<br>A media vale $media";

    echo "<br><br>";

    echo "<h2>Funções</h2>";

    // a função abs retorna o valor absoluto sem seu valor negativo
    $n7 = -7;
    echo " Valor absoluto é " . abs($n7);

    echo "<br> $n1 <sup>$n2</sup> = " . pow($n1, $n2);
    
    // para arredondar usando raiz quadrada deve-se colocar sqrt dentre de um parenteses apos round
    echo "<br> A raiz de $n1 é: " .round(sqrt($n1),3);

    // Ceil arredonda para cima
    $n8 = 5.7;
    echo "<br> Função Ceil: ". ceil($n8);
    // Floor arredonda para baixo
    echo "<br> Função Floor: ". floor($n8);

    echo "<br> A parte inteira de $n8 é: ". intval($n8);

    // mudamos o separador de casa decimal e casa de milhar
    echo "<br> O valor $n8 em moeda é R$ " . number_format($n8, 2, ",", ".");
    
    ?>

</body>
</html>