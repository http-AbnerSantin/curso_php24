<?php

    class Animais {
        public $nome = 'nome do animal';
        public $tipo = 'animal';

        public function __construct($nome, $tipo)
        {
            $this->nome = $nome;
            $this->tipo = $tipo;
        }

        public function getNome() {
            echo "{$this->tipo}: {$this->nome} <br>";
        }

        public function som() {
            echo "Som de algum animal";
        }
    }

    class Papagaio extends Animais {
        public $voar = "o papagaio voa";
        public $raca = "raca papagaio";

        public function som()
        {
            echo "$this->nome Fala<br>";
        }

    }
    
    class Cachorro extends Animais {
        public $latir = 'o cachorro late';
        public $correr = 'o cachorro corre';

        public function som()
        {
            echo "$this->nome late <br>";
        }
    }

    class Gato extends Animais {
        public $miar = 'o gato mia';
        public $lamber = 'o gato se lambe';

        public function som()
        {
            echo "$this->nome mia <br>";
        }
    }


    $gato = new Gato('Felix', 'Gato');
    $gato->getNome();
    $gato->som();

    $cachorro = new Cachorro('Doug', 'Cachorro');
    $cachorro->getNome();
    $cachorro->som();

    $papagaio = new Papagaio('Rogerio', 'papagaio');
    $papagaio->getNome();
    $papagaio->som();

