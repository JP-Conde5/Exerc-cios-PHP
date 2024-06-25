<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>

<body>
    <?php
        $conexao = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexao, 'aula13');

        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($conexao, $sql);
    ?>
    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>LOGIN</th>
            <th>SENHA</th>
            <th>ACAO</th>
        </tr>
        <?php while($linha = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['login']; ?></td>
                <td><?php echo $linha['senha']; ?></td>
                <td><a href=<?php echo "editCad.php?id=" . $linha['id'];?>>Editar</a></td>
            </tr>  
        <?php endwhile;?>  
    </table>
</body>

</html>