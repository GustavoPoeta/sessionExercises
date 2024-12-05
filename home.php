<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['inputName'] ?? 'User';

        session_start();

        $_SESSION['userName'] = $name;
        echo $_SESSION['userName'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Poeta</title>
</head>
<body>
    <form action="" method="post">
        <h2>Qual é o seu nome?</h2>
        <input type="text" required name="inputName">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>