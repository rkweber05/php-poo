<?php 
    class Pessoa {
        public $nome;
        public $idade;

        public function apresentar() {
            return "Olá, meu nome é {$this-> nome} e tenho {$this-> idade} anos.";
        }
    }

    $rodrigo = new Pessoa();
    $rodrigo-> nome = "Rodrigo";
    $rodrigo-> idade = 20;

    echo $rodrigo-> apresentar();
?>