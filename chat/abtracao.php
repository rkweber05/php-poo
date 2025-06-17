<?php 
    abstract class Funcionario {
        abstract public function calcularSalario();
    }

    class Desenvolvedor extends Funcionario {
        public function calcularSalario()
        {
            return 5000;
        }
    }

    abstract class Animal {
        abstract public function emitirSom();

        public function dormir() {
            echo "Dormindo...";
        }
    }

    class Cachoro extends Animal {
        public function emitirSom()
        {
            echo "Latindo !";
        }
    }

    $dog = new Cachoro();
    $dog-> emitirSom(); // Latindo !
?>