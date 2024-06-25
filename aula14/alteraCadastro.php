<?php
    $conexao = mysqli_connect('localhost', 'root',  '') or die('Falha ao conectar-se no SQL');
    mysqli_select_db($conexao, 'aula13') or die('Falha ao conectare-se no banco');

    $id = $_GET['id'] != null ? $_GET['id'] : '';

    $nome = $_POST['nome'] != null ? $_POST['nome'] : '';
    $login = $_POST['login'] != null ? $_POST['login'] : '';
    $senha = $_POST['senha'] != null ? $_POST['senha'] : '';

    $sql = "UPDATE usuarios SET nome='$nome', login='$login', senha='$senha' WHERE id = '$id'";
    $result = mysqli_query($conexao, $sql);

    echo "Dados alterados com sucesso!<br>";
    echo "<a href='editCad1.php'>VOLTAR</a>";