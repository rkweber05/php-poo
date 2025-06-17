<?php 
    final class Conexao {
        public function conectar() {
            return "Conectado !";
        }
    }

    // Isso irá causar um erro:
    // class NovaConexao extends Conexao{}

    class Pai {
        final public function metodo() {
            echo "Não posso ser sobrescrito";
        }
    }

    class Filho extends Pai {
        // public function metodo(){} // ERRO !
    }
?>