<?php
    class Math {
        const PI = 3.13;

        public static function somar ($a, $b) {
            return $a + $b;
        }
    }

    class Until {
        public static $contador = 0;
        
        public static function somar ($a, $b) {
            return $a + $b;
        }        
    }

    echo Until::somar(5, 3); // 8
?>