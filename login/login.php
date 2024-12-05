<?php

    session_start();

    $correctPassword = hash('md5', '1234');
    
    $_SESSION['username'] = 'usuario';
    $_SESSION['password'] = $correctPassword;

    if (!empty($_SESSION)) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_GET['inputUserName'], $_GET['inputPassword'])) {
                $userName = $_GET['inputUserName'];
                $password = $_GET['inputPassword'];
    
                $hashedPassword = hash('md5', $password);
    
                if ($_SESSION['username'] == $userName && $_SESSION['password'] == $hashedPassword) {
                    echo 'login bem-sucedido!';
    
                    $_SESSION['isUserLogged'] = true;
    
                    header('Location: http://localhost/session/login/welcome.php');
                    session_abort();
                    exit();
                } else {
                    echo 'credenciais inválidas!';
                }
            }
        }
    } else {
        header('Location: http://localhost/session/login/welcome.php');
        session_abort();
        exit();
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
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="inputUserName" placeholder='digite seu nome de usuário'>
        <input type="password" name="inputPassword" placeholder='digite sua senha'>
        <input type="submit" value="enviar">
    </form>
</body>
</html>