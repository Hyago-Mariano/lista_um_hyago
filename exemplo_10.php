<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_10</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" id="numeroUm" name="numeroUm" required>
        <input type="number" id="numeroDois" name="numeroDois" required>
        <button type="submit" id="number" name="number">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['number'])){
                $soma = 0;
                $numeroUm = filter_var($_POST['numeroUm'], FILTER_VALIDATE_INT);
                $numeroDois = filter_var($_POST['numeroDois'], FILTER_VALIDATE_INT);

                if ($numeroUm === false || $numeroDois === false){
                    echo "Numeros invalidos"; 
                }

                if ($numeroDois < $numeroUm){
                    $temp = $numeroUm;
                    $numeroUm = $numeroDois;
                    $numeroDois = $temp;
                }

                for ($i = $numeroUm; $i <= $numeroDois; $i++){
                    $soma += $i;
                }

                echo "A soma dos numeros entre $numeroUm e $numeroDois e $soma";

            }
        }
    ?>
</body>

</html>