<?php

    $query = "select * from modelo ";

    if(!empty($chave)){
        $query .= "where nome like '%$chave%' or fabricante like '%$chave%' or ano like '%$chave%' or combustivel like '%$chave%' ";
    }

    switch($ordem){
        case "fabricante":
            $query .= "order by fabricante";
            break;
        case "ano":
            $query .= "order by ano";
            break;
        case "combustivel":
            $query .= "order by combustivel";
            break;
        default:
            $query .= "order by nome";
            break;
    }

    $busca = $banco->query($query);
    echo "<div class='box'>";
    if(!$busca){
        echo "<p class='erro'>Erro na busca! Tente novamente...</p>";
    }
    else{
        if($busca->num_rows == 0){
            echo "<p class='erro'>Nenhum registro encontrado!</p>";
        }
        else{
            while($registro = $busca->fetch_object()){   
                echo "<div class='detalhes'>";                             
                    echo "<p><span class='destaque'>Modelo:</span> $registro->nome</p>";
                    echo "<p><span class='destaque'>Fabricante:</span> $registro->fabricante</p>";
                    echo "<p><span class='destaque'>Ano:</span> $registro->ano</p>";
                    echo "<p><span class='destaque'>Placa:</span> $registro->placa</p>";
                    echo "<p><span class='destaque'>Cor:</span> $registro->cor</p>";
                    echo "<p><span class='destaque'>Valor:</span> R$ $registro->valor</p>";
                    echo "<p><span class='destaque'>Nº de Portas:</span> $registro->portas</p>";
                    echo "<p><span class='destaque'>Combustível:</span> $registro->combustivel</p>";
                echo "</div>";
            }
        }
    }
    echo "</div>";