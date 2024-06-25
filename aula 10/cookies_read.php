<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo Cookie</title>
</head>
<body>
    <?php
        $var = $_COOKIE['teste'];
        echo $var;
        setcookie('teste', 0, time()-(60*60*24*7));
    ?>
</body>
</html>