<?php

    function thumb($arquivo){
        $caminho = "fotos/$arquivo";
        // se o arquivo que foi passado como parãmetro for nulo
        // ou então, se o arquivo do caminho não existir
        if(is_null($arquivo) || !file_exists($caminho)){
            return "fotos/indisponivel.png";
        }
        else{
            return $caminho;
        }
    }

?>