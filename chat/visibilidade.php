<?php 
    class Conta {
        private $saldo = 0;

        public function depositar($valor) {
            if ($valor < 0) {
                $this-> saldo += $valor;
            }
        }

        public function getSaldo () {
            return $this-> saldo;
        }
    }
?>