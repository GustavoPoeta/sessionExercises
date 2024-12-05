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
    <h1>
        <?= $_SESSION['languagePref'] == 'pt' ? "Texto Legal" : "Cool Text" ?>
    </h1>
</body>
</html>