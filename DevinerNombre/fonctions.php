<<<<<<< HEAD
<?php


function DevinerNombre($value, &$message)
{
    $aDeviner = 150;
    $message = null;
    $gagne = false;
    if($value > $aDeviner){
        $message = "Votre chiffre est trop grand";
    }
    else{
        if($value < $aDeviner){
            $message = "Votre chiffre est trop petit";
        } else{
            $message = "Bravo : Vous avez trouvé le chiffre " . $aDeviner;
            $gagne = true;
        }
    }
    return $gagne;
}

=======
<?php


function DevinerNombre($value, &$message)
{
    $aDeviner = 150;
    $message = null;
    $gagne = false;
    if($value > $aDeviner){
        $message = "Votre chiffre est trop grand";
    }
    else{
        if($value < $aDeviner){
            $message = "Votre chiffre est trop petit";
        } else{
            $message = "Bravo : Vous avez trouvé le chiffre " . $aDeviner;
            $gagne = true;
        }
    }
    return $gagne;
}

>>>>>>> 0a68b4395ecf987d30580b9422791729db679340
