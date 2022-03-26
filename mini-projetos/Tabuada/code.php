<?php

    $n = isset($_GET["n"]) ? $_GET["n"] : 1;

    if(strlen($n) == 0){
        $n = 1;
    }

    for($i = 1; $i <= 10; $i++){
        $resultado = $n * $i;
        echo "<p>$n x $i = $resultado</p>";
    }

?>