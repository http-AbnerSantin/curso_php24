<?php

Class Primos {
    public $primos = [];

    public function primos() {
        for($numero = 2; count($this->primos) < 5; $numero++) {
            $isPrimo = true;

            for($divisor = 2; $divisor < $numero; $divisor++) {
                $resto = $numero % $divisor;

				if ($resto == 0) {
					$isPrimo = false;
					break;
				}
            }

            if ($isPrimo) {
				$this->primos[] = $numero;
			}
        }

        echo "Os números primos são: <br>";

		for($i = 0; $i < count($this->primos); $i++) {
			echo $this->primos[$i] . " <br> " ;
		}
    }
}

$primosTeste = new Primos();
$primosTeste->primos();


Class Tabuada {

    public function tabuada($num) {

        $tabuada = 0;
        $i=0;

        while($i <= 10) {
            $tabuada = $num * $i;

            echo "$num X $i = $tabuada <br>";
            $i++;
        }
    }
}

$tabuada = new Tabuada();
$tabuada->tabuada(4);

Class Temperatura {
    public function temperatura($temp, $tipoTemperatura) {
        switch ($tipoTemperatura) {
            case 'c':
                $f = $temp * 1.8 + 32;
                $k = $temp + 273;
                echo "A temperatura em farenheit é: {$f} e, a temperatura em Kelvin é: {$k}.<br>";
                break;
            case 'k':
                $c = $temp * 1.8 - 32;
			    $k = $temp + 273;
			    echo "A temperatura em farenheit é: {$c} e, a temperatura em Kelvin é: {$k}.<br>" ;
                break;
            case 'f':
                $f = $temp * 1.8 + 32;
			    $c = $temp + 273;
			    echo "A temperatura em farenheit é: {$f} e, a temperatura em Kelvin é: {$c}.<br>" ;
                break;
        }
    }
}

$temperaturaTeste = new Temperatura();
$temperaturaTeste->temperatura(32, 'c');


class NumerosPerfeitos {
    		/*
			Calcular os 4 primeiros numeros perfeitos.
			Saída esperada: 6, 28, 496, 8128.
			Regra: São aqueles cujos divisores somados (excluindo o próprio número)
			são iguais a eles mesmos.
			Ex.:
			6 = 1 + 2 + 3
			28 = 1 + 2 + 4 + 7 + 14
			496 = 1 + 2 + 4 + 8 + 16 + 31 + 62 + 124 + 248
			8128 = ?
		*/
    public function numerosPerfeitos() {
		$perfeitos = [];

		for($numero = 2; count($perfeitos) < 4; $numero++) {
			$soma = 0;

			for($divisor = 1; $divisor < $numero; $divisor++) {
				$resto = $numero % $divisor;

				if ($resto == 0) {
					$soma += $divisor;
				}

				if ($soma > $numero) {
					break;
				}
			}

			if ($soma == $numero) {
				$perfeitos[] = $numero;
			}
		}

		echo "Os números perfeitso são: <br>";

		for($i = 0; $i < count($perfeitos); $i++) {
			echo $perfeitos[$i] . "<br> " ;
		}
	}
}

$nuemerosPerfeitosTeste = new NumerosPerfeitos();
$nuemerosPerfeitosTeste->numerosPerfeitos();

class IMC {
    public function calcularIMCclass ($peso, $altura) {
        $imc = $peso / ($altura * $altura);

        $imc = round($imc, 2);

        if($imc <= 18) {
            echo "O seu IMC é: $imc, é magro <br>";
        } else if ($imc > 18 && $imc <= 25) {
            echo "O seu IMC é: $imc, é normal <br>";

        } else if ($imc > 25 && $imc <= 30) {
            echo "O seu IMC é: $imc, é sobrepeso <br>";

        } else if ($imc > 30 && $imc <= 40) {
            echo "O seu IMC é: $imc, é obesidade <br>";

        }
    }
}

$imcTeste = new IMC();
$imcTeste->calcularIMCclass(53, 1.68);


Class Notas {
    public  $valor = 575;
    public $notas = [100,50,20,10,5,2,1];
    public $quantidadeNotas = [];

    public function calcular() {
        foreach($this->notas as $nota) {
            if($this->valor >= $nota) {
                $qtde = floor($this->valor / $nota);
                $valor_descontar = $qtde * $nota;
                $this->valor -= $valor_descontar;
                $this->quantidadeNotas[$nota] = $qtde;
            }
        }

        foreach($this->quantidadeNotas as $nota => $qtde) {
            echo "Tem {$qtde} de notas de {$nota}<br>";
        }
    }
}

$testeDasNotas = new Notas();

$testeDasNotas->calcular();

class Fatorial {
    public $numero = 5;

    public function calcularFatorial() {
        $resultado = 1;
        for($i = 0; $i < $this->numero; $i++) {
            $resultado = $resultado * $i;
        }

        echo "Resultado é $resultado";
    }
}

$fatorialTeste = new Fatorial();
$fatorialTeste->calcularFatorial();
