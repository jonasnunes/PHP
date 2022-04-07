<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>

    <link rel="stylesheet" href="_estilos/_index.css">
    <link rel="stylesheet" href="_estilos/_catalogo.css">
</head>
<body>
    <div id="corpo">
        <?php
            require_once "_includes/topo.php";
            require_once "_includes/banco.php";
            $ordem = $_GET['o'] ?? "nome";
            $chave = $_GET['busca'] ?? "";
        ?>
        <section id="catalogo">
            <form method="get" action="catalogo.php">
                <label for="busca">Ordernar por:
                    <a href="catalogo.php?o=nome&busca=<?php echo "$chave"; ?>">Nome</a> |
                    <a href="catalogo.php?o=fabricante&busca=<?php echo "$chave"; ?>">Fabricante</a> |
                    <a href="catalogo.php?o=ano&busca=<?php echo "$chave"; ?>">Ano</a> |
                    <a href="catalogo.php?o=combustivel&busca=<?php echo "$chave"; ?>">Combustível</a> |
                    <a href="catalogo.php">Mostrar Todos</a> |
                </label>
                <label for="busca">Buscar: </label>
                <input type="text" name="busca" size="10" maxlength="40">
                <input type="submit" value="Ok">
            </form>
            <h2><span class='title'></span></h2>
            <?php require_once "_includes/busca.php"; ?>
        </section>
        <?php require_once "_includes/rodape.php"; ?>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="_scripts/catalogo.js"></script>
    </div>
</body>
</html>