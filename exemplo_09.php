<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_09</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" id="number" name="number">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['number'])){
                $pares = 0;
                $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);

                for ($i = 1; $i <= $numero; $i++){
                    if ($i % 2 == 0){
                        $pares++;
                    }     
                }

                echo "A quantidade de numeros pares entre 1 e $numero e $pares";

            }
        }
    ?>
</body>

</html>
