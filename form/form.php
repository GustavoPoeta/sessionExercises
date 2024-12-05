<?php
    session_start();
    echo $_SESSION['userData']['name'];
    
    if (!empty($_SESSION['userData']['name']) && !empty($_SESSION['userData']['age'])) {
        header('location: http://localhost/session/form/show.php');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];


        $_SESSION['userData'] = ['name' => $name, 'age' => $age];
        header('location: http://localhost/session/form/show.php');
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
    <form action="" method='post'>
        <input type="text" name='name' placeholder='Nome'>
        <input type="number" name='age' placeholder='Idade'>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>