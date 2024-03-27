<?php

    function porcentagem($valor, $porcentagem) {
        $resultado = ($valor * $porcentagem) / 100;
        return $resultado;
    }

    function aumento($valor,$aumento) {
        $resultado = $valor + porcentagem($valor, $aumento);
        return $resultado;
    }

    function desconto($valor, $desconto) {
        $resultado = $valor - porcentagem($valor, $desconto);
        return $resultado;
    }

    function salario_final($valor, $porcentagem, $desconto) {
        $salario_com_aumento = aumento($valor, $porcentagem);

        $desconto_final = desconto($salario_com_aumento, $desconto);

        return "O salario de R$$valor, com aumento de $porcentagem% foi para R$$salario_com_aumento, e com o desconto de $desconto% foi para R$$desconto_final";
    }

    echo salario_final(1412, 10, 5);
