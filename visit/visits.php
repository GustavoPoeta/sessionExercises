
<?php
    session_start();

    isset($_SESSION['visit_count']) ? $_SESSION['visit_count']++ : $_SESSION['visit_count'] = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Poeta</title>
</head>
<body>
    <h1>Número de visitas: <?= $_SESSION['visit_count'] ?></h1>
</body>
</html>