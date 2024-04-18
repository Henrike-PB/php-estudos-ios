<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- estudo de while -->

<h1>Tabuada</h1>

<form action="" method="post">

    <label for="number">Digite um número</label>

            <input type="number" name="number" id="number" required>

            <input type="submit" value="Gerar tabuada">

</form>

<div class="capBack">
        <img class="cap" src="https://www.icegif.com/wp-content/uploads/2023/10/icegif-924.gif" alt="capivara heroica" >
</div>

<?php 

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    // sempre vinculado a name
    $number = $_POST ["number"];
    $i = 1;
    echo "<h3> Tabuada de: $number </h3>";
    echo "<ul>";
    // enquanto a variavel de incremento for menor ou igual a 10...
    while ($i <= 10){
        $resultado = $number * $i;
        echo "<li>$number x $i = $resultado</li>";
        $i++;
    } 
    echo "</ul>";
        
}

?>






<footer class="footer">
    
    
    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L40,122.7C80,149,160,203,240,229.3C320,256,400,256,480,261.3C560,267,640,277,720,272C800,267,880,245,960,213.3C1040,181,1120,139,1200,106.7C1280,75,1360,53,1400,42.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</footer>
</body>
</html>