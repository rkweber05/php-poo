<?php 
    class Animal {
        public function fazerSom() {
            return "Som genérico";
        }
    }

    class Cachorro extends Animal{
        public function fazerSom()
        {
            return "Latido";
        }
    }
?>