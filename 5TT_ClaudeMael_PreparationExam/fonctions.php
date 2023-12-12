<?php

function AssuranceAuto($age, $obtenuPermis, $nbAccident, $nbAnneeAnciennete){
    if ($age < 25 && $obtenuPermis < 2)
    {
        if ($nbAccident == 0)
        {
            $contrat = "Rouge";
        }
        else
        {
            $contrat = "Refus";
        }
    }

    else if (($age < 25 && $obtenuPermis >= 2) || ($age >= 25 && $obtenuPermis < 2))
    {
        if ($nbAccident == 0)
        {
            $contrat = "Orange";
        }
        else if ($nbAccident == 1)
        {
            $contrat = "Rouge";
        }
        else
        {
            $contrat = "Refus";
        }
    } 
    else
    {
        if ($nbAccident == 0)
        {
            $contrat = "Vert";
        }
        else if ($nbAccident == 1)
        {
            $contrat = "Orange";
        }
        else if ($nbAccident == 2)
        {
            $contrat = "Rouge";
        }
        else
        {
            $contrat = "Refus";
        }
    }
    if($nbAnneeAnciennete > 5){
        switch ($contrat)
        {
            case "Rouge":
                $contrat = "Orange";
                break;
            case "Orange":
                $contrat = "Vert";
                break;
            case "Vert":
                $contrat = "Bleu";
                break;
            default:
                break;
        }
    }
    return $contrat;
}

function ColorContrat($contrat){
    switch ($contrat)
    {
        case "Rouge":
            $color = "red";
            break;
        case "Refus":
            $color = "red";
            break;
        case "Orange":
            $color = "orange";
            break;
        case "Vert":
            $color = "green";
            break;
        case "Bleu":
            $color = "blue";
            break;
        default:
            $color = "red";
            break;
    }
    return $color;
}