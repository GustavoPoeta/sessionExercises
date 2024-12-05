
<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Poeta</title>
</head>
<body>
    <?php
        if (!empty($_SESSION['isUserLogged']) ) {
            echo '<a href="secret.php">Entrar na area secreta</a>';
        } else {
            echo '<h1>Apenas usuários podem entrar</h1>';
        }
    ?>
</body>
</html>