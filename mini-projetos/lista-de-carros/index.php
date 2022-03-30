<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Carros</title>

    <link rel="stylesheet" href="./_estilos/index.css">
</head>
<body>

    <?php
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    ?>

    <div id="corpo">
        <h1>Catálogo de Carros</h1>
        <table class="listagem">

            <?php
                $busca = $banco->query("select * from bd_carros order by nome");
                if(!$busca){
                    echo "<tr><td>Erro na busca! Tente novamente...</td></tr>";
                }
                else{
                    if(!$busca->num_rows == 0){
                        echo "<tr><td>Nenhum registro encontrado!</td></tr>";
                    }
                    else{
                        while($registro = $busca->fetch_object()){
                            $t = thumb($registro->logo);
                            echo "<tr><td><img src='$t' class='mini'/><td>$registro->modelo";
                            echo "<td>Adm";
                        }
                    }
                }
            ?>

        </table>
    </div>

    <?php
        $banco->close();
    ?>
</body>
</html>