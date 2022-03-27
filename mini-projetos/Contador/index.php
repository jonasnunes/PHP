<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="box">
        <h1>Contador</h1>
        <fieldset>
            <legend>Contador</legend>
            <form method='GET' action="index.php">
                <label for="i">Início: </label>
                <input type="number" name="inicio" id="i" required>
                <label for="f">Fim: </label>
                <input type="number" name="fim" id="f" required>
                <label for="s">Salto: </label>
                <input type="number" name="salto" id="s" min=1 required>
                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </div>

    <div class="code">
        <?php
            require_once 'code.php';
        ?>
    </div>

</body>
</html>