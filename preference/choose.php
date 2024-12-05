<?php
session_start();
$_SESSION['languagePref'] = $_SESSION['languagePref'] ?? 'pt';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['languagePref'])) {
    $_SESSION['languagePref'] = $_GET['languagePref'];
}
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['languagePref'] == 'pt' ? 'pt' : 'en'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Poeta</title>
</head>
<body>
    <h1>
        <?php echo $_SESSION['languagePref'] == 'pt' 
            ? "Escolha sua preferência de idioma" 
            : "Choose your language of preference"; ?>
    </h1>
    <form action="" method="get">
        <select name="languagePref">
            <option value="pt" 
                <?php echo $_SESSION['languagePref'] == 'pt' ? "selected" : ""; ?>>
                <?php echo $_SESSION['languagePref'] == 'pt' ? "Português" : "Portuguese"; ?>
            </option>
            <option value="en" 
                <?php echo $_SESSION['languagePref'] == 'en' ? "selected" : ""; ?>>
                <?php echo $_SESSION['languagePref'] == 'pt' ? "Inglês" : "English"; ?>
            </option>
        </select>
        <input type="submit" value="<?php echo $_SESSION['languagePref'] == 'pt' ? "Escolha" : "Choose"; ?>">
    </form>
    <a href="preview.php">
        <?php echo $_SESSION['languagePref'] == 'pt' ? "Vá para outra página" : "Go to another page"; ?>
    </a>
</body>
</html>
