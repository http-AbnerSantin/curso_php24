<?php

    class ContaBancaria {
        public $agencia;
        public $numeroDaConta;
        public $banco;
        public $saldo;

        public function __construct($agencia, $numeroDaConta, $banco) {
            $this->agencia = $agencia;
            $this->numeroDaConta = $numeroDaConta;
            $this->banco = $banco;
            
        }

        public function dadosDaConta() {
            echo "Agencia:$this->agencia <br> Numero da Conta: $this->numeroDaConta <br> Banco: $this->banco <br>";
        }

        public function saque($valor) {
            echo "Informe o valor a ser sacado <br>";
        }

        public function deposito($deposito) {
            echo "informe o valor a ser depositado <br>";
            $this->saldo = $deposito;
        }

        public function transferencia( $agencia, $numeroDaConta, $banco, $valor) {
            echo "Informe o valor da transferencia <br>";
        }

        public function saldo() {
            echo "Seu saldo é de R$$this->saldo <br>";
        }
        
    }

    class Abner extends ContaBancaria {
        public function saque($valor) {
            echo "Saque de R$$valor <br>";
            if($valor > $this->saldo) {
               echo "Saldo insuficiente ! <br> Saldo atual: R$$this->saldo"; 
            } else {
                $this->saldo-=$valor;
            }
        }

        public function deposito($deposito) {
            if($deposito <= 0 ) {
                echo "Deposito invalido";
            } else {
                echo "Foi depositado o valor de R$$deposito <br>";
                $this->saldo+=$deposito;
            }
        }

        public function transferencia($agencia, $numeroDaConta, $banco, $valor) {
            if($valor <= 0) {
                echo "Valor invalido";
            } else {
                if ($this->saldo < $valor) {
                    echo "Seu saldo é insuficiente";
                } else {
                    echo "Tranferencia feita para conta: $numeroDaConta <br> Agencia : $agencia <br>, Banco: $banco <br> No valor de : R$$valor";
                    $this->saldo -= $valor;
                }
            }
        }
    }

    $abner = new Abner('0001', 1234235246, "inter");
    $abner->deposito(100);
    $abner->saldo();
    $abner->deposito(100);
    $abner->saldo();
    $abner->saque(100);
    $abner->saldo();




