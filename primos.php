<?php

$numeros = [1,2,3,4,5,6,7,8,9,10,11];


for($i = 1; $i <= count($numeros); $i++) {
    $divisores = 0;
     
    for($j = $i; $j >= 1; $j--)
    {
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
     
    if ($divisores == 2)
    {
        echo $i . '<br>';
    }
}
