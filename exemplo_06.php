<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício06</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" id="divisor" name="divisor">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (isset($_POST['divisor']))
            {
                $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
        
                for ($i = 1; $i <= $numero; $i++)
                {
                    if ($numero % $i == 0)
                    {
                        echo "$i<br>";
                    }
                }
            }
        }
    ?>
</body>
</html>