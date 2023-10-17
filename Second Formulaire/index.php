<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ex 1</h2>
    <?php for($i = 1; $i <= 10; $i++) : ?>
        <p><?= $i ?></p>
    <?php endfor ?>


    <h2>Ex 2</h2>

    <?php for($i = 1; $i <= 10; $i++) : ?>
        <?php if($i != 3) :?>
            <p><?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>

    <h2>Ex 3 </h2>
    <?php for($i = 1; $i <= 10; $i++) : ?>
        <?php if($i != 4 && $i != 5 && $i != 6 && $i != 7) : ?>
            <p><?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>

    <h2>Ex 4</h2>
      <p>La valeur absolue de -5 vaut  <?=abs(-5)?> </p>
      <p> La valeur absolue de 10 vaut <?=abs(10)?> </p>
    
    

    
    <form action="">
        <div class="donnees-perso">

            <fieldset>
                <legend>Données personnelles</legend>    
                <div>
                    <label for="prenom">Votre Prénom </label>
                    <input type="text" name="prenom">
                </div>
                <div>
                    <label for="nom">Votre Nom </label>
                    <input type="text" name="nom">
                </div>
                <div>
                    <label for="birthday">Date de naissance : </label>
                    <input type="date" name="birthday">
                </div>
                
             
            </fieldset>
            
        </div>
        
        <div class="input">
            <fieldset>
                <legend>Les nouveaux input</legend>
                <div>
                    <label for="url">Votre URL </label>
                    <input type="url" name="url">
                </div>
                <div>
                    <label for="phone">Votre numéro de téléphone</label>
                    <input type="tel" name="phone">
                </div>
                <div>
                    <label for="appreciation">Votre appréciation (entre 10 et 20) </label>
                    <input type="range" name="appreciation" min="10" max="20"> 
                </div>
                <div>
                    <label for="couleur">Votre couleur préférée </label>
                    <input type="color" name="couleur">
                </div>
                <div>
                    <label for="recherche">Votre recherche </label>
                    <input type="search" name="recherche">
                </div>
                <div>
                    <label for="fichier">Choisis un fichier </label>
                    <input type="file" name="fichier">
                </div>
                <div>
                        <label for="heure">Choisis une heure </label>
                        <input type="hour" name="heure">
                </div>
                <div>

                    <label for="mois">Choisis un mois </label>
                    <input type="month" name="mois">
                </div>
                <div>

                    <label for="semaine">Choisis une semaine </label>
                    <input type="week" name="semaine">
                </div>
                <div>

                    <label for="explications">Vos explications </label>
                    <textarea type="textarea" name="explications" class="recherche"></textarea>
                </div>
                <div>
                    <label for="recherche"></label>
                    <input type="button" name="recherche" value="Réinitialiser">
                </div>

            
            </fieldset>

            <fieldset>
                <legend>Bouton envoi</legend>
                <input type="submit" value="Envoyer">
            </fieldset>
        </div>
    </form>

</body>
</html>