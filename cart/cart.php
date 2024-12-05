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
    <h1>carrinho</h1>
    <ul>
        <?php 
            if (!empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product):
                    echo "<li> $product </li>";
                endforeach;
                session_abort();
            } else {
                echo "Você não tem produtos adicionados!";
                session_abort();
            }
        ?>
    </ul>
</body>
</html>