<<<<<<< HEAD
<?php

function algorithmeEuclide($nbr1, $nbr2){
    $reste = $nbr2;
    while($reste != 0){
        $reste = $nbr1 % $nbr2;
        $nbr1 = $nbr2;
        $nbr2 = $reste;
    }
    return $nbr1;
}

function fonctionSpeciale($nombreDepart, $nombreElementsSouhaites){
    $suite = "" . $nombreDepart . " ";
    for($i = 1; $i <= $nombreElementsSouhaites; $i++){
        if(($nombreDepart < 5) && ($nombreDepart % 3 != 0)){
            $nombreDepart = $nombreDepart*5;
        }
        else{
            if(($nombreDepart > 5) && ($nombreDepart < 10)){
                $nombreDepart = $nombreDepart / 6;
            }
            else{
                $nombreDepart = $nombreDepart * $nombreDepart;
            }
        }
        $suite = $suite . $nombreDepart . " ";
    }
    return $suite;
}

function lastLetterOfEachWord($phrase){

    $words = preg_split('/\s+/', $phrase);
    $endingLetter = array();

    for($i = 0; $i < count($words); $i++){
        $letters = str_split($words[$i]);
        array_push($endingLetter, end($letters));
    }

    return $endingLetter;

=======
<?php

function algorithmeEuclide($nbr1, $nbr2){
    $reste = $nbr2;
    while($reste != 0){
        $reste = $nbr1 % $nbr2;
        $nbr1 = $nbr2;
        $nbr2 = $reste;
    }
    return $nbr1;
}

function fonctionSpeciale($nombreDepart, $nombreElementsSouhaites){
    $suite = "" . $nombreDepart . " ";
    for($i = 1; $i <= $nombreElementsSouhaites; $i++){
        if(($nombreDepart < 5) && ($nombreDepart % 3 != 0)){
            $nombreDepart = $nombreDepart*5;
        }
        else{
            if(($nombreDepart > 5) && ($nombreDepart < 10)){
                $nombreDepart = $nombreDepart / 6;
            }
            else{
                $nombreDepart = $nombreDepart * $nombreDepart;
            }
        }
        $suite = $suite . $nombreDepart . " ";
    }
    return $suite;
}

function lastLetterOfEachWord($phrase){

    $words = preg_split('/\s+/', $phrase);
    $endingLetter = array();

    for($i = 0; $i < count($words); $i++){
        $letters = str_split($words[$i]);
        array_push($endingLetter, end($letters));
    }

    return $endingLetter;

>>>>>>> aa780836a2cc8d5e7e5bb9a08c09e3fb6c17b440
}