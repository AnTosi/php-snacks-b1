<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$random_numbers = [];

while (count($random_numbers) < 15) { 
    $random_number = rand(0,100);
    // var_dump($random_number);
    // var_dump($random_numbers);

    if (!in_array($random_number, $random_numbers)) {
        $random_numbers[] = $random_number;
    }
}

var_dump($random_numbers);
?>