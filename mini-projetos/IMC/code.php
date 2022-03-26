<?php

    $nome = isset($_GET["nome"]) ? $_GET["nome"] : !empty($nome);
    $peso = isset($_GET["peso"]) ? $_GET["peso"] : 1;
    $altura = isset($_GET["altura"]) ? $_GET["altura"] : 1;
    
    $imc = $peso / ($altura * $altura);

    if(empty($nome)){
        echo "<p>Informe os dados acima!</p>";
    }
    else{
        if($imc < 18.5){
            echo "<p class='msgPerigo'>$nome, você está abaixo do peso!</p>";
        }
        elseif($imc <= 24.9){
            echo "<p class='pesoNormal'>$nome, seu peso está normal.</p>";
        }
        elseif($imc <= 29.9){
            echo "<p class='msgPerigo'>$nome, você está acima do peso!</p>";
        }
        elseif($imc <= 34.9){
            echo "<p class='msgPerigo'>$nome, você está no nível 1 de obesidade!</p>";
        }
        elseif($imc <= 39.9){
            echo "<p class='msgPerigo'>$nome, você está no nível 2 de obsesidade!</p>";
        }
        elseif($imc >= 40){
            echo "<p class='msgPerigo'>$nome, você está no nível 3 de obesidade!</p>";
        }
    }

?>