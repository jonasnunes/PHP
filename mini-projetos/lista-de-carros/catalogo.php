<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>

    <link rel="stylesheet" href="_estilos/estilo.css">
</head>
<body>
    <?php
        require_once "_includes/banco.php";
        require_once "_includes/funcoes.php";
        $ordem = $_GET['o'] ?? "nome";
        $chave = $_GET['busca'] ?? "";
    ?>
    <div id="corpo">
        <?php include_once "topo.php"; ?>
        <h1>Catálogo de carros</h1>
        <hr>

        <form method="get" action="catalogo.php">
            <label for="busca">Ordenar por: 
                <a href="catalogo.php?o=nome&busca=<?php echo $chave;?>">Nome</a> | 
                <a href="catalogo.php?o=fabricante&busca=<?php echo $chave;?>">Fabricante</a> | 
                <a href="catalogo.php?o=ano&busca=<?php echo $chave;?>">Ano</a> | 
                <a href="catalogo.php?o=combustivel&busca=<?php echo $chave;?>">Combustível</a> | 
                <a href="catalogo.php">Mostrar Todos</a> |
            </label>
            <label for="busca">Buscar: </label>
            <input type="text" name="busca" size="10" maxlength="40">
            <input type="submit" value="Ok">
        </form>

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

            $buscaCarros = $banco->query($query);
            if(!$buscaCarros){
                echo "<tr><td>Erro na busca! Tente novamente...";
            }
            else{
                if($buscaCarros->num_rows == 0){
                    echo "<tr><td>Nenhum registro encontrado!";
                }
                else{
                    while($registro = $buscaCarros->fetch_object()){
                        echo "<div class='lista'>";
                            echo "<p><span class='destaque'>Nome:</span> $registro->nome</p>";
                            echo "<p><span class='destaque'>Fabricante:</span> $registro->fabricante</p>";
                            echo "<p><span class='destaque'>Ano:</span> $registro->ano</p>";
                            echo "<p><span class='destaque'>Placa:</span> $registro->placa</p>";
                            echo "<p><span class='destaque'>Cor:</span> $registro->cor</p>";
                            echo "<p><span class='destaque'>Valor:</span> R$ $registro->valor</p>";
                            echo "<p><span class='destaque'>Nº de portas:</span> $registro->portas</p>";
                            echo "<p><span class='destaque'>Combustível:</span> $registro->combustivel</p>";
                        echo "</div>";
                    }
                    
                }
            }
        ?>
        <a href="index.php"><img src="_icones/icoback.png"></a>
    </div>
    <?php
        include_once "rodape.php";
    ?>
</body>
</html>