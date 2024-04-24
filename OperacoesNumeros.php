<?php

    class OperacoesNumeros {
        public $parede = 4;
        public $porta = "fechada";
        public $lampada = "desligada";

        public function abrirPorta() {
            if($this->porta == "fechada") {
                echo "aberta";
            } 
        }

        public function fecharPorta() {
            if($this->porta == "aberta") {
                echo "fechada";
            } 
        }

        public function lampada() {
            if($this->lampada == "desligada") {
                $this->lampada = "ligada";
                echo "A lampada está " . $this->lampada; 
            } else {
                $this->lampada = "desligada";
                echo "A lampada esta " . $this->lampada;
            }
        }

        public function getLampada() {
            echo "A lampada esta ";
        }
    }

    $quarto = new OperacoesNumeros;

    echo $quarto->lampada();;
