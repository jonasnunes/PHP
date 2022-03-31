<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Carros</title>

    <link rel="stylesheet" href="_estilos/estilo.css">
</head>
<body>

    <?php
        // se houver algum erro, exibe uma mensagem e não executa o programa
        require_once "_includes/banco.php";
        require_once "_includes/funcoes.php";
    ?>

    <div id="corpo">
        <h1>Catálogo de Carros</h1>
        <h3>Marcas parceiras</h3>
        <hr>
        <table class="listagem">

            <?php
                // criando o objeto $busca com a query necessária
                $busca = $banco->query("select * from fabricante");
                // se a busca não acontecer, retorne uma mensagem de erro
                if(!$busca){
                    echo "<tr><td>Erro na busca! Tente novamente...</td></tr>";
                }
                else{
                    // se a busca não retornar nenhuma linha, exiba a mensagem
                    if($busca->num_rows == 0){
                        echo "<tr><td>Nenhum registro encontrado!</td></tr>";
                    }
                    // se a busca for realizada com sucesso
                    else{
                        // use o laço de repetição para exibir tudo que foi encontrado
                        while($registro = $busca->fetch_object()){
                            $t = thumb($registro->logo);
                            echo "<tr><td><img src='$t' width=50/><td>$registro->nome";
                            echo "<td>Adm";
                        }
                    }
                }
            ?>

        </table>
        <p><a class="button" href="catalogo.php">Exibir catálogo</a></p>
    </div>

    <?php
        // fechando o banco após o término da execução
        $banco->close();
    ?>
</body>
</html>