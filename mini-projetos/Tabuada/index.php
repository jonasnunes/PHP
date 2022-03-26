<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div class="box">
        <h1>Tabuada</h1>

        <fieldset>
            <legend>Tabuada</legend>
            <div class="form">
                <form>
                    <label for="n">Digite um número: </label>
                    <input type="number" name="n" id="n" min=1>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </fieldset>

        <?php
            require_once 'code.php';
        ?>

    </div>

</body>
</html>