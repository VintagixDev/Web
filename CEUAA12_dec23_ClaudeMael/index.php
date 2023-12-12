<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen UAA12 - Claude Maël</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/component.css">
</head>
<body>
    
    <header>
        <ul>
            <li><a href="#"></a>Home</li>
            <li><a href="formulaireMath.php" target="_blank">Tester l'application</a></li>
            <li><a href="#"></a>Contact</li>
        </ul>
    </header>

    <h1>Commandez notre application AstyCalc</h1>

    <div class="flexbox">
        <div class="images">
            <h2>Galerie images</h2>
            <img src="img/calc.png" alt="calc">
            <img src="img/calc.png" alt="calc">
            <img src="img/calc.png" alt="calc">
            <img src="img/calc.png" alt="calc">

            <img src="img/ops.png" alt="ops">
            <img src="img/ops.png" alt="ops">
            <img src="img/ops.png" alt="ops">
            <img src="img/ops.png" alt="ops">
            
            <img src="img/pi.png" alt="pi">
            <img src="img/pi.png" alt="pi">
            <img src="img/pi.png" alt="pi">
            <img src="img/pi.png" alt="pi">

            <img src="img/log.png" alt="log">
            <img src="img/log.png" alt="log">
            <img src="img/log.png" alt="log">
            <img src="img/log.png" alt="log">
        </div>
        <div class="form">
                <form action="">
                    <div>
                        <fieldset>
                            <legend>Vos informations</legend>
                            <div>
                                <label for="nom">Votre nom</label>
                                <input type="text" placeholder="Nom" name="nom" required>
                            </div>
                            <div>
                                <label for="prenom">Votre prénom</label>
                                <input type="text" placeholder="Prénom" name="prenom" required>
                            </div>
                            <div>
                                <label for="email">Votre mail</label>
                                <input type="mail" placeholder="Email" name="email" required>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend>Paramétrez vorte commande</legend>
                            
                            <div>
                                <label for="plateforme">Choisissez parmi les possibilités</label>
                                <select name="plateforme">
                                    <optgroup label="Ordinateur">
                                        <option value="pc">Pc</option>
                                        <option value="mac">Mac</option>
                                    </optgroup>
                                    <optgroup label="Tablette">
                                        <option value="android">Androïd</option>
                                        <option value="apple">Apple</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div>
                                <label for="subscription_date">Date de début d'abonnement</label>
                            <input type="date" name="subscription_date" required>
                        </div>
                        
                        <div>
                            <label for="facture">Facture</label>
                            <div>
                                <input type="radio" name="facture" id="mail" checked required>
                                <label for="mail" class="notUnderline">Par mail</label>
                            </div>
                            <div>
                                <input type="radio" name="facture" id="papier">
                                <label for="papier" class="notUnderline">Par papier</label>
                            </div>
                            
                        </div>
                    </fieldset>
                    </div>
              
                        <input class="submit" type="submit" value="Envoyer">
                    
                </form>
                
            </div>
            
            <div class="images">

                <h2>Galerie images</h2>

                <img src="img/calc.png" alt="calc">
                <img src="img/calc.png" alt="calc">
                <img src="img/calc.png" alt="calc">
                <img src="img/calc.png" alt="calc">
                
                <img src="img/ops.png" alt="ops">
                <img src="img/ops.png" alt="ops">
                <img src="img/ops.png" alt="ops">
                <img src="img/ops.png" alt="ops">
                
                <img src="img/pi.png" alt="pi">
                <img src="img/pi.png" alt="pi">
                <img src="img/pi.png" alt="pi">
                <img src="img/pi.png" alt="pi">
                
                <img src="img/log.png" alt="log">
                <img src="img/log.png" alt="log">
                <img src="img/log.png" alt="log">
                <img src="img/log.png" alt="log">
            </div>
    </div>
        
    <footer>
        <ul>
            <li class="exam"><a>Examen décembre 2023</a><a>UAA12</a></li>
            <li>5TTI</li>
        </ul>
    </footer>
    </body>
    </html>