<?php

    $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 1;
    $fim = isset($_GET["fim"]) ? $_GET["fim"] : 1;
    $salto = isset($_GET["salto"]) ? $_GET["salto"] : 1;

    function contar($inicio, $fim, $salto){
        if($inicio < $fim){
            for($i = $inicio; $i <= $fim; $i += $salto){
                echo "$i... ";
            }
        }
        elseif($inicio > $fim){
            for($i = $inicio; $i >= $fim; $i -= $salto){
                echo "$i... ";
            }
        }
        elseif($inicio == $fim){
            echo "<p class='msgError'>Início e Fim não podem ser iguais!<?p>";
        }
    }

    contar($inicio, $fim, $salto);

?>