<?php

    /*Para ambor exercicios abaixo, considerar o desconto do INSS de 11% */


    /*
    Impementar um algoritmo que conceda um aumento de 10% ao empregado
    */

    $_empregado = "supervisor";
    $_salario = 1412;
    $_valor_porcentagem = 0;
    $_porcentual_empregado = 10;
    $_porcentual_supervisao = 12;
    $_porcentual_gerente = 14;
    $_porcentual_direcao = 16;

    /*Reaproveitar o primeiro algoritmo e conceder o aumento conforme o cargo 10% - empregado normal
    12% - supervisor
    14% - gerente
    16% - direcao
    */

    if($_empregado == "empregado") {
        $_salario_final = $_salario + (($_salario * $_porcentual_empregado) / 100);
        $_inss = ($_salario_final * 11) / 100;
        $_salario_final = $_salario_final - $_inss;

        echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    } elseif($_empregado == "supervisor") {
        $_salario_final = $_salario + (($_salario * $_porcentual_supervisao) / 100);
        $_inss = ($_salario_final * 11) / 100;
        $_salario_final = $_salario_final - $_inss;

        echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    } elseif ($_empregado == "gerente") {
        $_salario_final = $_salario + (($_salario * $_porcentual_gerente) / 100);
        $_inss = ($_salario_final * 11) / 100;
        $_salario_final = $_salario_final - $_inss;

        echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    } elseif ($_empregado == "direcao") {
        $_salario_final = $_salario + (($_salario * $_porcentual_direcao) / 100);
        $_inss = ($_salario_final * 11) / 100;
        $_salario_final = $_salario_final - $_inss;

        echo "O salario do $_empregado é de $_salario_final com o desconto do INSS de $_inss";
    } else {
        echo "valor invalido";
    }
