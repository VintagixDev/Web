<?php

require_once 'fonctions.php';
if(isset($_GET['c1']) && isset($_GET['c2']) && isset($_GET['c3'])){
    $c1 = $_GET['c1'];
    $c3 = $_GET['c2'];
    $c2 = $_GET['c3'];
    $message = TriangleRectangle($c1, $c2, $c3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen UAA12 - Claude Maël</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/formulaireMath.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <header>
        <ul>
            <li><a href="#"></a>Home</li>
            <li><a href="formulaireMath.php" target="_blank">Tester l'application</a></li>
            <li><a href="#"></a>Contact</li>
        </ul>
    </header>
    <h1>Testez notre calculateur de triangle</h1>

    <div class="flexbox">

            <form action="formulaireMath.php" method="get">
                <fieldset>
                    <legend>Les côtés de votre triangle</legend>
                <div>
                    <label for="c1">Côté A</label>
                    <input type="number" name="c1" min=1 required placeholder="Côté A">
                </div>
                <div>
                    <label for="c2">Côté B</label>
                    <input type="number" name="c2" min=1 required placeholder="Côté B">
                </div>
                <div>
                    <label for="c3">Côté C</label>
                    <input type="number" name="c3" min=1 required placeholder="Côté C">
                </div>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>

        <?php if(isset($_GET['c1'])) : ?>
            <h1 class="result"><?= $message ?></h1>
        <?php endif?>
    </div>
    
    <footer>
        <ul>
            <li class="exam"><a>Examen décembre 2023</a><a>UAA12</a></li>
            <li>5TTI</li>
        </ul>
    </footer>
    
</body>
</html>