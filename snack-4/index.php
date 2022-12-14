<?php
    $numRandom = [];

    while (count($numRandom) < 15) {
        $number = rand(0, 100);
        if (!in_array($number, $numRandom)){
            $numRandom[] = $number;
        }
    }
    var_dump($numRandom)
    ?>
