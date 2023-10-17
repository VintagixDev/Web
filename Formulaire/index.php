<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">  
</head>
<body>
    <?php
        
    ?>

    
    <form action="">
        <div class="coordonnees">

            <fieldset>
                <legend>Vos coordonnées</legend>   
                <div>

                    <label for="nom">Nom : </label>
                    <input type="text" name="nom">
                </div>
                <div>

                    <label for="prenom">Prénom : </label>
                    <input type="text" name="prenom">
                </div>
                <div>

                    <label for="birthday">Date de naissance : </label>
                    <input type="date" name="birthday">
                </div>
                <div>

                    <label for="email">Email : </label>
                    <input type="email" name="email">
                </div> 
                <div>

                    <select>
                        
                        <optgroup label="Europe">
                            <option>Belgique</option>
                        </optgroup>
                        <optgroup label="Amérique du Nord">
                            <option>États-Unis</option>
                            <option>Canada</option>
                        </optgroup>
                        <optgroup label="Asie">
                            <option>Japon</option>
                            <option>Chine</option>
                        </optgroup>
                        
                    </select>
                </div>
                </fieldset>
                
            </div>
            
            <div class="period">
                <fieldset>
                    <legend>Périodicité</legend>
                    <div>

                        <input type="radio" id="hebdo" name="newsletter" value="Hebdo">
                        <label for="hebdo">Newsletter Hebdomadaire</label>
                    </div>
                    <div>

                        <input type="radio" id="mensuelle" name="newsletter" value="Mensuelle">
                        <label for="mensuelle">Newsletter Mensuelle</label>
                    </div>
                    <div>
                        
                        <input type="radio" id="trimestrielle" name="newsletter" value="Trimestrielle">
                        <label for="mensuelle">Newsletter Trimestrielle</label>
                    </div>
                </fieldset>
        </div>

        <div class="version">
            <fieldset>
                <legend>Version papier / informatique</legend>
                <div>

                    <input type="checkbox" id="papier" name="version" value="papier">
                    <label for="papier">Recevoir la version papier</label>
                </div>
                <div>

                    <input type="checkbox" id="informatique" name="version" value="informatique">
                    <label for="informatique">Recevoir la version informatique</label>
                </div>                
                
                <div>

                    <label for="copies">Nombre de copies souhaitées : </label>
                    <input type="number" name="copies" min="1" placeholder="1">
                </div>
            </fieldset>
        </div>
    </form>

</body>
</html>