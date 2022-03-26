<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="corpo">
        <h1>Calcule seu IMC</h1>
        <fieldset>
            <legend>IMC</legend>
            <form>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome..." required>
                <label for="peso">Peso: </label>
                <input type="number" name="peso" id="peso" placeholder="Informe seu peso..." required step="0.010">
                <label for="altura">Altura: </label>
                <input type="number" name="altura" id="altura" placeholder="Informe sua altura..." required step="0.010">
                <input type="submit" value="Enviar" class="button">
            </form>
        </fieldset>
    </div>

    <div class="code">
        <?php
            require_once 'code.php';
        ?>
    </div>

    <script>
        document.getElementById("peso", "altura").addEventListener("change", function(){
            this.value = parseFloat(this.value).toFixed(2);
        });
    </script>
</body>
</html>