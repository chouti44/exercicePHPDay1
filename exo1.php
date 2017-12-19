<?php
    $age = 13;

    if($age > 12) {
        echo 'Cadet';
    } elseif ($age == 12 || $age == 11 || $age == 10) {
        echo 'Minime';
    } elseif ($age == 9 || $age == 8) {
        echo 'Pupille';
    } elseif ($age == 7 || $age == 6) {
        echo 'Pousin';
    } elseif ($age < 5) {
        echo 'You are too young';
    }



?>