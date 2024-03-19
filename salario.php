<?php

    /*Para ambor exercicios abaixo, considerar o desconto do INSS de 11% */


    // /*
    // Impementar um algoritmo que conceda um aumento de 10% ao empregado
    // */

    // $_empregado = "supervisor";
    // $_salario = 1412;
    // $_valor_porcentagem = 0;
    // $_porcentual_empregado = 10;
    // $_porcentual_supervisao = 12;
    // $_porcentual_gerente = 14;
    // $_porcentual_direcao = 16;

    // /*Reaproveitar o primeiro algoritmo e conceder o aumento conforme o cargo 10% - empregado normal
    // 12% - supervisor
    // 14% - gerente
    // 16% - direcao
    // */

    // if($_empregado == "empregado") {
    //     $_salario_final = $_salario + (($_salario * $_porcentual_empregado) / 100);
    //     $_inss = ($_salario_final * 11) / 100;
    //     $_salario_final = $_salario_final - $_inss;

    //     echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    // } elseif($_empregado == "supervisor") {
    //     $_salario_final = $_salario + (($_salario * $_porcentual_supervisao) / 100);
    //     $_inss = ($_salario_final * 11) / 100;
    //     $_salario_final = $_salario_final - $_inss;

    //     echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    // } elseif ($_empregado == "gerente") {
    //     $_salario_final = $_salario + (($_salario * $_porcentual_gerente) / 100);
    //     $_inss = ($_salario_final * 11) / 100;
    //     $_salario_final = $_salario_final - $_inss;

    //     echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    // } elseif ($_empregado == "direcao") {
    //     $_salario_final = $_salario + (($_salario * $_porcentual_direcao) / 100);
    //     $_inss = ($_salario_final * 11) / 100;
    //     $_salario_final = $_salario_final - $_inss;

    //     echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    // } else {
    //     echo "valor invalido";
    // }


    // $_porcentuais = [10,12,14,16];
    // $_empregados = ["empregado", "supervisor", "gerente", "diretor"];

    // $salario = 1412;

    // for($i = 0; $i < count($_empregados); $i++) {
    //     $funcionario = ($salario * $_porcentuais[$i]) / 100;
    //     $resultado = $salario + $funcionario;
    //     echo "<br>O salario do $_empregados[$i] é igual à $resultado <br>";
    // }
    const INSS_FGTS = 11;
    $_salario_com_aumento = [];
    $_porcentuais2 = [10,12,14,16];
    $_empregados2 = ["empregado", "supervisor", "gerente", "diretor"];

    $salario2 = 1412;

    for($i = 0; $i < count($_empregados2); $i++) {
        $_cargo = $_empregados[$i];
        $_porcentual = $_porcentuais2[$i];

        $funcionario2 = ($salario2 * $_porcentual) / 100;
        $resultado2 = $salario2 + $funcionario2;

        $_salario_com_aumento[] = $resultado2;


    }

    //efetuar o desconto do NSS_FGTS
    $salario_final = [];
    $desconto_salarial =[];
    for($i = 0; $i < count($_empregados2); $i++) {
        $desconto = $_salario_com_aumento[$i] * INSS_FGTS / 100;
        $desconto_salarial[] = round($desconto, 2);
        $salario_com_desconto = $_salario_com_aumento[$i] - $desconto;
        $salario_final[] = round($salario_com_desconto, 2);
    }


    //exibir todos os salarios
    for ($i = 0; $i < count($_empregados2); $i++) {
        echo "<br>O salario do <b>$_empregados2[$i]</b> <br> Teve seu salário de R$$_salario_com_aumento[$i] para <b>R$$salario_final[$i]</b> com o desconto de R$$desconto_salarial[$i] <br>";
    }


    $cargos = ["empregado" => 10, "supervisor" => 12, "gerente" => 14,"diretor" => 16,"CTO" => 16];
    $salario = 1412.00;

    foreach($cargos as $cargo => $porcentual) {
        $porcentagem_do_salario = ($salario * $porcentual) / 100;
        $salario_com_aumento = $salario + $porcentagem_do_salario;
        $desconto = ($salario_com_aumento * INSS_FGTS) / 100;
        $salario_com_desconto = round($salario_com_aumento - $desconto, 2);

        echo "<br>O salario do $cargo era de R$$salario_com_aumento e foi para R$$salario_com_desconto com o desconto de R$desconto <br> ";


    }