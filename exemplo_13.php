<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_13</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Graus Celsius:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" id="numero" name="graus">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['graus'])){
               $numero = filter_var($_POST['number'], FILTER_VALIDATE_INT);

               $fahrenheit = ($numero * 1.8) + 32;

                echo "$numero celsius para fahrenheit: <br>";
                echo "$fahrenheit";

            }
        }
    ?>
</body>
</html>