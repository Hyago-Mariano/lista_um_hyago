<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_15</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Peso:</label>
        <input type="number" id="peso" name="peso" required> <br>
        <label for="numero">Altura:</label>
        <input type="number" id="altura" name="altura" required>
        <button type="submit" id="numero" name="calcular_imc">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['calcular_imc'])){
                $peso = filter_var($_POST['peso'], FILTER_VALIDATE_INT);
                $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);
                
                $imc = $peso / ($altura * $altura);

                echo "O Imc e $imc";
            }
        }
    ?>
</body>
</html>