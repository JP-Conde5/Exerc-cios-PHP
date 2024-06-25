<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>

<body>
    <?php
        $conexao = mysqli_connect('localhost', 'root', '') or die("Falaha ao conectar no SQL");
        mysqli_select_db($conexao, 'aula13') or die("Falaha ao conectar no Banco de Dados");
        
        $id = $_GET['id'] != null ? $_GET['id'] : '';

        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $result = mysqli_query($conexao, $sql);

        $dados = mysqli_fetch_assoc($result);
    ?>

    <h1>Alterando Dados</h1>
    <br>
    <form action="alteraCadastro.php?id=<?php echo $id; ?>" method="post">
        <label for="nome">Nome: </label>
        <input name='nome' id='name' value=<?php echo $dados['nome'];?> type="text">
        <br>
        <label for="login">Login: </label>
        <input name='login' id='login' value=<?php echo $dados['login'];?> type="text">
        <br>
        <label for="senha">Senha: </label>
        <input name='senha' id='senha' value=<?php echo $dados['senha'];?> type="password">        
        <button type="submit">Alterar</button><button type="reset">Cancelar</button>
    </form>
</body>

</html>