<?php
    $numbers = [];
    while (count($numbers) < 15) {
        $numbers = rand(1, 99);
        if (!in_array($number, $numbers))
          $numbers[] = $number;
    };
    var_dump($numbers);
?>