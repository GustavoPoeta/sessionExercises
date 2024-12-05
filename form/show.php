<?php 
    session_start();

    if (empty($_SESSION['userData'])) {
        header('location: http://localhost/session/form/form.php');
        exit();
    }

    $userData = $_SESSION['userData'];
    $name = $userData['name'];
    $age = $userData['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Poeta</title>
</head>
<body>
    <h2>nome: <?= $name ?></h2>
    <h2>nome: <?= $age ?></h2>
</body>
</html>