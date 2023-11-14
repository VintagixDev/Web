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

