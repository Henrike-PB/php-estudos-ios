<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adivinha.css">
    <title>Adinha aí</title>
</head>
<body>
    <h1>Adivinha aí!</h1>
    <?php 
    // Verificar se o formulário foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $numeroAleatorio = rand(1, 10);
        $numeroJogador = $_POST["number"];

        if($numeroAleatorio == $numeroJogador){
            echo "<p>Acertou, miseravi! O valor gerado foi $numeroAleatorio</p>";     
        } else {
            echo "<p>Bah, errou hein! &#128540</p>";
        }

    }  
    ?>


<div class="back">

        <div class="divBack">

            <form action="" method="post">

                <label class="label" for="">Digite um número entre 1 e 10</label><br>

                <input class="number" type="number" name="number" min="1" max="10" required><br>

                <input class="submit" type="submit" value="Gerar">

            </form>

        </div>
</div>
  

<footer>
    <p>Desenvolvido por Henrike P.B. | 2024 &copy;</p>
</footer>
</body>
</html>