<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(!empty($_GET['yes'])) {
            session_start();
            session_destroy();
            header('location: http://localhost/session/login/login.php');
            exit();
        }
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
    <form action="" method='get'>
        <input type="checkbox" name='yes' id='yes'> <label for="yes">are you sure?</label>
        <input type="submit" value="log-out">
    </form>
</body>
</html>