<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
        $conexao = mysqli_connect('localhost', 'root', '') or die('Falha ao conectar');
        mysqli_select_db($conexao, 'aula13') or die('Falha ao conectar no banco');
        
        $nome = $_POST['nome'] != null ? $_POST['nome'] : '';
        $login = $_POST['login'] != null ? $_POST['login'] : '';
        $senha = $_POST['senha'] != null ? $_POST['senha'] : '';

        $sql = "INSERT INTO usuarios VALUES ";
        $sql .= "(Default, '$nome', '$login', '$senha')";
        mysqli_query($conexao, $sql) or die("Erro ao tentar cadastrar registro");
        mysqli_close($conexao);
        echo "Cliente cadastrado com sucesso";
    ?>
</body>

</html>