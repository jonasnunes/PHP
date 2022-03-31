<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>

    <link rel="stylesheet" href="_estilos/estilo.css">

    <style>
        .lista{
            border: 1px solid #000;
            padding: 1rem;
            margin-bottom: .5rem;
        }
        .destaque{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        require_once "_includes/banco.php";
        require_once "_includes/funcoes.php";
    ?>
    <div id="corpo">
        <h1>Catálogo de carros</h1>
        <hr>

        <?php
            $buscaCarros = $banco->query("select * from modelo");
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
</body>
</html>