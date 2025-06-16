<?php 
    trait Log {
        public function registrar($msg) {
            echo "[LOG] $msg <br>";
        }
    }

    class Sistema {
        use Log;
    }
?>