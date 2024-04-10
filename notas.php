<?php

$valor = 572;

$arrayDeNotas = [100,50,20,10,5,2,1];

$quantidadeDeNotasArray = [];

foreach($arrayDeNotas as $nota) {
    
    if($valor >= $nota) {
        $quantidadeDeNotas = floor($valor / $nota);
        $descontar = $quantidadeDeNotas * $nota;

        $quantidadeDeNotasArray[$nota] = $quantidadeDeNotas;
        $valor = $valor - $descontar;
        
        if($quantidadeDeNotas > 1) {
            echo "$quantidadeDeNotas notas de $nota <br>";
        } else {
            echo "$quantidadeDeNotas nota de $nota <br>";

        }
    }
}
?>
