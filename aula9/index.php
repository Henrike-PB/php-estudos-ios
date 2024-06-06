<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <!-- Estrutura For -->
    <h1>Contagem Regressiva</h1>

    <ul>
        <?php 
        // sempre começa For criando uma variavel e atribuindo um valor a ela, sempre sao 3 argumentos!
        for($i = 10; $i >= 1; $i--) {
            echo "<li> $i </li>";
        };

        // for ($i = 20; $i <= 1; $i -= 2) {
        //     echo "<li> $i </li>";
        // };
        
        
        ?>

    </ul>

    <h2>Tabuada</h2>

    <form action="#" method="post">
            <label for="number">Digite um número</label>

            <input type="number" name="number" id="number" placeholder="digite aqui">

            <input type="submit" value="Gerar Tabuada">
                <ul>
                    <?php 
                    $number = $_POST["number"];

                    for($i = 1; $i <=10; $i += 1) {
                        $resultado = $number * $i;
                        echo "<li> $number x $i = $resultado </li>";
                    }
                    
                    ?>
                </ul>


    </form>


    
</body>
</html>