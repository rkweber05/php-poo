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
?>