<?php
require_once 'fonctions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préparation Examen - Claude Maël</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&family=Roboto+Mono&display=swap" rel="stylesheet">
</head>



<body>

    <div class="navbar">
        <div class="left">
            <a href="#">Assurance Automobile</a>
        </div>
        <div class="right">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#" class="checked">Contracts</a></li>
                <li><a href="#">Informations</a></li>
                <button class="log">Connexion</button>
                <button class="reg">Inscription</button>
            </ul>
        </div>
    </div>

<div class="container">

    
    <form action="index.php" method="GET">
        
        <div>
            <label for="age">Quel âge avez-vous ? </label>
            <input type="number" name="age" min=18 max=95 required>
        </div>
        <div>
            <label for="annee">Depuis combien de temps avez-vous le permis ?</label>
            <input type="number" name="annee" id="" min=0 required>
        </div>
        <div>
            <label for="accidents">Combien d'accidents avez-vous déjà fait ?</label>
            <input type="number" name="accidents" id="" min=0 required>
        </div>
        <div>
            <label for="assurance">Depuis combien d'années êtes-vous assuré chez nous ?</label>
            <input type="number" name="assurance" id="" min=0 required>
        </div>
        
        <input type="submit" value="Envoyer">
        
        <?php if(isset($_GET['age']) && isset($_GET['annee']) && isset($_GET['accidents']) && isset($_GET['assurance'])) : ?>
            <?php $contrat = AssuranceAuto($_GET['age'], $_GET['annee'], $_GET['accidents'], $_GET['assurance']) ?>
            <p>Voici le contrat que nous vous proposons : <a style="color: <?= ColorContrat($contrat)?>"> <?=$contrat?></a></p>
            <?php endif ?>
        </form>
        
</div>
</body>
</html>