<?php

function TriangleRectangle($c1, $c2, $c3){
    
    $message = "";
    if($c1 == $c2 && $c2 == $c3){
        $message = "Le triangle est équilatéral";
    } else {
        if($c1 >= $c2 && $c1 >= $c3){
            $pg = $c1;
            $cote2 = $c2;
            $cote3 = $c3;
        } else{
            if($c2 >= $c1 && $c2 >= $c3){
                $pg = $c2;
                $cote2 = $c1;
                $cote3 = $c3;
            } else {
                $pg = $c3;
                $cote2 = $c1;
                $cote3 = $c2;
            }
        } 
        if($pg < ($cote2 + $cote3)){
            if(round(pow($pg, 2)) == round(pow($cote2, 2)) + round(pow($cote3, 2))){
                if($cote2 = $cote3){
                    $message = "Le triangle est isocèle et rectangle";
                } else{
                    $message = "Le triangle est rectangle";
                }
            } else{
                if($c1 == $c2 || $c2 == $c3 || $c1 == $c3){
                    $message = "Le triangle est isocèle";
                } else{
                    $message = "Le triangle est quelconque";
                }
            }
        } else {
            $message = "Ces dimensions ne peuvent pas être celles d'un triangle";
        }
    }
    
    return $message;
}