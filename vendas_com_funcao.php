<?php

$desconto_do_produto = 0;

function descontoDoProduto($valor) {
    if($valor >= 1000) {
        return $desconto_do_produto = 25;
    } else if ($valor < 1000 && $valor >= 800 ) {
        return $desconto_do_produto = 15;
    } else if ($valor < 800 && $valor >= 500) {
        return $desconto_do_produto = 10;
    } else if ($valor < 500 && $valor >= 300) {
        return $desconto_do_produto = 5;
    } else {
        return $desconto_do_produto = 0;
    }
}

function comissao($valor){
    return ($valor * 5) / 100;
}

function desconto($valor, $valor_desconto) {
    return ($valor * $valor_desconto) / 100;
}

function opcaoDePagamento($opcao_pagamento, $valor) {

    $comissao_vendedor = comissao($valor);

    if($opcao_pagamento == "dinheiro") {
        $valor_desconto = descontoDoProduto($valor);
        $desconto_do_produto = desconto($valor, $valor_desconto);
        $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    } else if($opcao_pagamento == "credito") {
        $valor_desconto = 0;
        $desconto_do_produto = desconto($valor, $valor_desconto);
        $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    
    } else if ($opcao_pagamento == "boleto") {
        $valor_desconto = 0;
        $desconto_do_produto = desconto($valor, $valor_desconto);
        $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    } else if ($opcao_pagamento == "debito") {
        $valor_desconto = descontoDoProduto($valor);
        $desconto_do_produto = desconto($valor, $valor_desconto);
        $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    } else if ($opcao_pagamento == "pix") {
        $valor_desconto = descontoDoProduto($valor);
        $desconto_do_produto = desconto($valor, $valor_desconto);
        $valor_final = $valor - $desconto_do_produto - $comissao_vendedor;
    }
    echo "Pagamento feito no $opcao_pagamento <br>O valor do produto é de R$$valor, com o desconto de $valor_desconto% que é R$$desconto_do_produto,e a comissão de R$$comissao_vendedor ficando por R$$valor_final \n";
}

for($i = 0; $i < 5; $i++) {
    $valor_aleatorio = rand(100, 1500);
    $tipo_pagamento_aleatorio = rand(0,3);
    $valores_de_pagamento = ["pix", "debito", "credito", "boleto"];
    $pagamento_aleatorio = $valores_de_pagamento[$tipo_pagamento_aleatorio];
    opcaoDePagamento($pagamento_aleatorio, $valor_aleatorio);
}


