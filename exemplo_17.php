<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_17</title>
</head>
<body>

    <form method="POST" action="">
        <label for="dia">Dia:</label>
        <input type="number" id="dia" name="dia" required> <br>

        <label for="mes">Mês:</label>
        <input type="number" id="mes" name="mes" required> <br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required> <br>

        <button type="submit" name="validar">Validar Data</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['validar'])){
                $dia = filter_var($_POST['dia'], FILTER_VALIDATE_INT);
                $mes = filter_var($_POST['mes'], FILTER_VALIDATE_INT);
                $ano = filter_var($_POST['ano'], FILTER_VALIDATE_INT);
                
                if (checkdate($mes, $dia, $ano)){
                    echo "A data $dia/$mes/$ano e valida";
                }
                else{
                    echo "A data  $dia/$mes/$ano e invalida";
                }
            }
        }
    ?>

</body>
</html>