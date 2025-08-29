<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_14</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Graus Celsius:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" id="numero" name="ano_bissexto">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['ano_bissexto'])){
               $ano = filter_var($_POST['number'], FILTER_VALIDATE_INT);

               if ($ano % 4 == 0){
                echo "O ano $ano e bissexto";
               } 
               else {
                echo "O ano $ano nao e bissexto";
               }
            }
        }
    ?>
</body>
</html>