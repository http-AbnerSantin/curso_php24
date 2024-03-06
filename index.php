<?php


    // $_numero_tabuada = 5;

    // for($i = 0; $i <= 10; $i++) {
    //     $_valor_tabuada = $_numero_tabuada * $i;
    //     echo "<br>$_numero_tabuada x $i = $_valor_tabuada";
    // }

    // echo " <br>FOREACH";


    // $_array_de_numeros = [1,2,3,4,5,6,7,8,9,10];

    // foreach($_array_de_numeros as $_numero) {
    //     for($i = 0; $i <= count($_array_de_numeros); $i++) {
    //         $resultado = $_numero * $i;
    //         echo "<br>$_numero x $i = $resultado";
    //     }
    // }

    $_naosei = ["pedra", "papel", "tesoura"];

    $eu = ["pedra", "papel", "tesoura"];

    $numero_aleatorio = rand(0,2);
    $numero_aleatorio2 = rand(0,2);    
    $_naosei = $_naosei[$numero_aleatorio];
    $eu = $eu[$numero_aleatorio2]; 

    if($eu === "pedra" && $_naosei === "tesoura") {
        echo "eu sou $eu e ele é $_naosei, eu ganho";
    } elseif ($eu === "tesoura" && $_naosei === "papel") {
        echo "eu sou $eu e ele é $_naosei, eu ganho";
    } elseif ($eu === "papel" && $_naosei === "pedra") {
        echo "eu sou $eu e ele é $_naosei, eu ganho";
    } elseif($eu === "pedra" && $_naosei === "papel") {
        echo "eu sou $eu e ele é $_naosei, eu perco";
    } elseif ($eu === "tesoura" && $_naosei === "pedra") {
        echo "eu sou $eu e ele é $_naosei, eu perco";
    } elseif ($eu === "papel" && $_naosei === "tesoura") {
        echo "eu sou $eu e ele é $_naosei, eu perco";
    } elseif ($eu === "pedra" && $_naosei === "pedra") {
        echo "eu sou $eu e ele é $_naosei, EMPATE";
    } elseif ($eu === "papel" && $_naosei === "papel") {
        echo "eu sou $eu e ele é $_naosei, EMPATE";
    } elseif ($eu === "tesoura" && $_naosei === "tesoura") {
        echo "eu sou $eu e ele é $_naosei, EMPATE";
    }

