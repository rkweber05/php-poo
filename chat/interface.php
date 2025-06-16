<?php 
    interface Autenticacao {
        public function autenticar($senha);
    }

    class Usuario implements Autenticacao {
        public function autenticar($senha)
        {
            return $senha === '12345';
        }
    }
?>