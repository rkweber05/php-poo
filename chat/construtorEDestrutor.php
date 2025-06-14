<?php 
    class Produto {
        public $nome;

        public function __construct($nome)
        {
            $this->nome = $nome;
            echo "Produtor {$nome} criado ! <br>";
        }

        public function __destruct()
        {
            echo "Destruido produto {$this-> nome} <br>";
        }
    }
?>