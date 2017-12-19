<?php
    $numberPhotocopy = 15;
    $pricePhotocopy = ' ';

    for($i = 1; $i <= $numberPhotocopy; $i++) {
        if($i <= 10) {
            $pricePhotocopy += 0.10;
        }
        if($i > 10 && $i <= 30) {
            $pricePhotocopy += 0.08;
        }
        if($i > 30) {
            $pricePhotocopy += 0.05;
        }
    }

    echo 'The total price is '. $pricePhotocopy ;
?>