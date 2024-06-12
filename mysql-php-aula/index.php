<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="icon" rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/5973/5973881.png">
    <link rel="stylesheet" href="style.css">
    <title>Registro de Usuários</title>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "site";

    // Criar conexão

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

    ?>

    <main>

        <h1>Registro de Usuários</h1>

        <div class="container">

            <div class="formulario">

                <form action="" method="post">

                    Nome: <input type="text" name="nome" id="" required autocomplete="off"><br>

                    E-mail: <input type="email" name="email" id="" required autocomplete="off"><br>

                    Senha: <input type="password" name="senha" id="" required><br>

                    <input class="btn" type="submit" value="Cadastrar">

                </form>

            </div>


        </div>


    </main>


<footer>
&copy; 2024 Henrike Pajares Braga | Todos os direitos reservados.
</footer>
</body>

</html>