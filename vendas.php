<?php

$valor = 1500;
$comissao_vendedor = ($valor * 5) / 100;
$desconto_do_produto = 0;
$opcao_pagamento = "credito";

if($valor >= 1000) {
    $desconto_do_produto = 25;
} else if ($valor < 1000 && $valor >= 800 ) {
    $desconto_do_produto = 15;
} else if ($valor < 800 && $valor >= 500) {
    $desconto_do_produto = 10;
} else if ($valor < 500 && $valor>= 300) {
    $desconto_do_produto = 5;
} else {
    $desconto_do_produto = 0;
}

if($opcao_pagamento == "dinheiro") {
    $valor_desconto = $desconto_do_produto;
    $desconto_do_produto = ($valor * $valor_desconto) / 100;
    $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    echo "Pagamento feito no $opcao_pagamento <br>O valor do produto é de R$$valor, com o desconto de $valor_desconto% que é R$$desconto_do_produto,e a comissão de R$$comissao_vendedor ficando por R$$valor_final ";
} else if($opcao_pagamento == "credito") {
    $valor_desconto = 0;
    $desconto_do_produto = ($valor * $valor_desconto) / 100;
    $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    echo "Pagamento feito no $opcao_pagamento <br>O valor do produto é de R$$valor, com o desconto de $valor_desconto% que é R$$desconto_do_produto,e a comissão de R$$comissao_vendedor ficando por R$$valor_final ";

} else if ($opcao_pagamento == "boleto") {
    $valor_desconto = 0;
    $desconto_do_produto = ($valor * $valor_desconto) / 100;
    $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    echo "Pagamento feito no $opcao_pagamento <br>O valor do produto é de R$$valor, com o desconto de $valor_desconto% que é R$$desconto_do_produto,e a comissão de R$$comissao_vendedor ficando por R$$valor_final ";
} else if ($opcao_pagamento == "debito") {
    $valor_desconto = $desconto_do_produto;
    $desconto_do_produto = ($valor * $valor_desconto) / 100;
    $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    echo "Pagamento feito no $opcao_pagamento <br>O valor do produto é de R$$valor, com o desconto de $valor_desconto% que é R$$desconto_do_produto,e a comissão de R$$comissao_vendedor ficando por R$$valor_final ";
} else if ($opcao_pagamento == "pix") {
    $valor_desconto = $desconto_do_produto;
    $desconto_do_produto = ($valor * $valor_desconto) / 100;
    $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    echo "Pagamento feito no $opcao_pagamento <br>O valor do produto é de R$$valor, com o desconto de $valor_desconto% que é R$$desconto_do_produto,e a comissão de R$$comissao_vendedor ficando por R$$valor_final ";
}
