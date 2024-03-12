<?php


    $_numero_tabuada = 5;

    for($i = 0; $i <= 10; $i++) {
        $_valor_tabuada = $_numero_tabuada * $i;
        echo "<br>$_numero_tabuada x $i = $_valor_tabuada";
    }

    echo " <br>FOREACH";


    $_array_de_numeros = [1,2,3,4,5,6,7,8,9,10];

    foreach($_array_de_numeros as $_numero) {
        for($i = 0; $i <= count($_array_de_numeros); $i++) {
            $resultado = $_numero * $i;
            echo "<br>$_numero x $i = $resultado";
        }
    }


