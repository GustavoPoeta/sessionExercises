<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        session_start();

        $product = isset($_POST['productName']) ? $_POST['productName'] : '';

        if ($product != '') {
            isset($_SESSION['cart']) ? array_push($_SESSION['cart'], $product) : $_SESSION['cart'] = array($product);
        } else {
            echo 'produto inválido!';
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
    <h1>Adicione os produtos que você irá comprar</h1>
    <form action="" method="post">
        <input type="text" name="productName">
        <input type="submit" value="adicionar">
    </form>
    <a href="cart.php">Ver Carrinho</a>
</body>
</html>