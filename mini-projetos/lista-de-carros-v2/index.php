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
    <header>
        <div>
            <p>Catálogo de Carros</p>
        </div>

        <input type="checkbox" id="menu-hamburguer" class="input">

        <label for="menu-hamburguer">
            <div class="menu">
                <span class="hamburguer"></span>
            </div>
        </label>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Catálogo</a></li>
            <li><a href="https://jonasnunes.github.io" target="_blank">Contato</a></li>
        </ul>
    </header>
    <main>
        <p>Aqui você encontra - <span class="name"></span></p>
        <section class="imagens">
            <img src="_imagens/logo-chevrolet.png" alt="logo chevrolet">
            <img src="_imagens/logo-fiat.png" alt="logo fiat">
            <img src="_imagens/logo-ford.png" alt="logo ford">
            <img src="_imagens/logo-volks.png" alt="logo volkswagen">
        </section>
    </main>
    <footer>
        <p>Desenvolvido por <a href="https://github.com/jonasnunes" target="_blank">Jonas Nunes &copy;</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="_scripts/index.js"></script>
</body>
</html>