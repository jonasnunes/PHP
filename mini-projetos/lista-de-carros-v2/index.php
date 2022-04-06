<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>

    <link rel="stylesheet" href="_estilos/index.css">
</head>
<body>
    
    <?php require_once "_includes/topo.php"; ?>

    <main>
        <p>Aqui você encontra - <span class="name"></span></p>
        <section class="imagens">
            <img src="_imagens/logo-chevrolet.png" alt="logo chevrolet">
            <img src="_imagens/logo-fiat.png" alt="logo fiat">
            <img src="_imagens/logo-ford.png" alt="logo ford">
            <img src="_imagens/logo-volks.png" alt="logo volkswagen">
        </section>
    </main>
    
    <?php require_once "_includes/rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="_scripts/index.js"></script>
</body>
</html>