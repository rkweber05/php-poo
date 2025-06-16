<?php 
    $obj1 = new stdClass();
    $obj2 = new stdClass();

    var_dump($obj1 == $obj2); // true (valores iguais)
    var_dump($obj1 === $obj2); // false (instâncias diferentes)
?>