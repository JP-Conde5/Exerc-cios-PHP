<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="process_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input name="nome" id="nome" type="text">
        <br>
        <label for="login">Login:</label>
        <input name="login" id="login" type="text">
        <br>
        <label for="senha">Senha:</label>
        <input name="senha" id="senha" type="password">
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>