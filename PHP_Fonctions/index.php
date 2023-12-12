<<<<<<< HEAD
<?php 
include 'fonction.php';
$nbr1 = 21;
$nbr2 = 15;
$nombreDepart = 5;
$nombreElementsSouhaites = 8;
$phrase= "La réusite passe par une étude e un entraînement régulier et sérieux";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <header>
        <h1>Apprendre les fonctions en php</h1>
    </header>

    <h2>Testons les appels de fonctions</h2>

    <h4>Je veux de belles fonctions php (séparer analyse et affichage dans votre fichier)</h4>

    <h3>Première fonction </h3>
    <p>Voici une suite tout à fait farfelue (pour un nombre de départ de <?= $nombreDepart ?> et d'un nombre d'éléments de <?= $nombreElementsSouhaites ?>): <?= fonctionSpeciale($nombreDepart, $nombreElementsSouhaites)?></p>


    <h3>Calcul de PGCD</h3>
    <p> Le PGCD entre <?= $nbr1?> et <?=$nbr2?> vaut <?= algorithmeEuclide($nbr1, $nbr2)?></p>



    <h2>Affichez proprement du code</h2>

    <p>On ne crée pas de fonction mais on écrit proprement la boucle php dans l'html</p>
    <p>(On souhaite afficher la dernière lettre de chaque mot dans une liste de puce. On considère que chaque mot est suivi d'un espace sauf le dernier)</p>
    <p>Dans la variable $phrase "<?= $phrase ?>", la dernière lettre de chaque mot est </p>
    
    <?php $words = preg_split('/\s+/', $phrase) ?>

    <ul>
        <?php for($i = 0; $i < count($words); $i++) : ?>
            <?php $letters = str_split($words[$i])?>
            <li><?= end($letters)?></li>
        <?php endfor?>
    </ul>
    
    <!-- FONCTION -->
    
    <!--<?php $endingLetters = lastLetterOfEachWord($phrase) ?>
    
    <ul>
        <?php for($i = 0; $i < count($endingLetters); $i++) : ?>
            <li><?= $endingLetters[$i]?></li>
        <?php endfor ?>

    </ul>-->

</body>
=======
<?php 
include 'fonction.php';
$nbr1 = 21;
$nbr2 = 15;
$nombreDepart = 5;
$nombreElementsSouhaites = 8;
$phrase= "La réusite passe par une étude e un entraînement régulier et sérieux";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <header>
        <h1>Apprendre les fonctions en php</h1>
    </header>

    <h2>Testons les appels de fonctions</h2>

    <h4>Je veux de belles fonctions php (séparer analyse et affichage dans votre fichier)</h4>

    <h3>Première fonction </h3>
    <p>Voici une suite tout à fait farfelue (pour un nombre de départ de <?= $nombreDepart ?> et d'un nombre d'éléments de <?= $nombreElementsSouhaites ?>): <?= fonctionSpeciale($nombreDepart, $nombreElementsSouhaites)?></p>


    <h3>Calcul de PGCD</h3>
    <p> Le PGCD entre <?= $nbr1?> et <?=$nbr2?> vaut <?= algorithmeEuclide($nbr1, $nbr2)?></p>



    <h2>Affichez proprement du code</h2>

    <p>On ne crée pas de fonction mais on écrit proprement la boucle php dans l'html</p>
    <p>(On souhaite afficher la dernière lettre de chaque mot dans une liste de puce. On considère que chaque mot est suivi d'un espace sauf le dernier)</p>
    <p>Dans la variable $phrase "<?= $phrase ?>", la dernière lettre de chaque mot est </p>
    
    <?php $words = preg_split('/\s+/', $phrase) ?>

    <ul>
        <?php for($i = 0; $i < count($words); $i++) : ?>
            <?php $letters = str_split($words[$i])?>
            <li><?= end($letters)?></li>
        <?php endfor?>
    </ul>
    
    <!-- FONCTION -->
    
    <!--<?php $endingLetters = lastLetterOfEachWord($phrase) ?>
    
    <ul>
        <?php for($i = 0; $i < count($endingLetters); $i++) : ?>
            <li><?= $endingLetters[$i]?></li>
        <?php endfor ?>

    </ul>-->

</body>
>>>>>>> aa780836a2cc8d5e7e5bb9a08c09e3fb6c17b440
</html>