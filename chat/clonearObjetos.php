<?php 
    class Documento {
        public $titulo;
    }

    $doc1 = new Documento();
    $doc1-> titulo = "Original";

    $doc2 = clone $doc1;
    $doc2-> titulo = "Cópia";
?>