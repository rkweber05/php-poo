<?php 
    class Usuario {
        private $senha;

        public function getSenha($senha) {
            if (strlen($senha) >= 6) {
                $this-> senha = $senha;
            }
        }
    }
?>