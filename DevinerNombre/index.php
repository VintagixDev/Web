<<<<<<< HEAD
<?php
require_once 'fonctions.php';
if(isset($_GET['value'])){
    $value = (int)$_GET['value'];
    $gagne=DevinerNombre($value, $msg);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="main">

        <h1>Devinez un nombre entre 1 et 1000 ! </h1>

        <form action="index.php" method="$_GET">
            <input type="number" name="value" value="<?= $value ?>" min=1 max=1000 required>

            <div class="submit">

                <button type="submit" value="Deviner">
                    <p>Deviner
                <span class="material-symbols-outlined">arrow_forward_ios</span>
            </button>
            </div>
        </form>
        <?php if(isset($_GET['value'])) : ?>
            <p class="error"><?= $msg ?></p>
        <?php endif?>
            
    </div>
</body>
=======
<?php
require_once 'fonctions.php';
if(isset($_GET['value'])){
    $value = (int)$_GET['value'];
    $gagne=DevinerNombre($value, $msg);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="main">

        <h1>Devinez un nombre entre 1 et 1000 ! </h1>

        <form action="index.php" method="$_GET">
            <input type="number" name="value" value="<?= $value ?>" min=1 max=1000 required>

            <div class="submit">

                <button type="submit" value="Deviner">
                    <p>Deviner
                <span class="material-symbols-outlined">arrow_forward_ios</span>
            </button>
            </div>
        </form>
        <?php if(isset($_GET['value'])) : ?>
            <p class="error"><?= $msg ?></p>
        <?php endif?>
            
    </div>
</body>
>>>>>>> 0a68b4395ecf987d30580b9422791729db679340
</html>