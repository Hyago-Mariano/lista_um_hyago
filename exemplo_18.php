<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_18</title>
</head>
<body>

    <form method="POST" action="">
        <label for="dia">Numero um:</label>
        <input type="number" id="num_um" name="num_um" required> <br>

        <label for="mes">Numero dois:</label>
        <input type="number" id="num_dois" name="num_dois" required> <br>

        <label for="ano">Numero tres:</label>
        <input type="number" id="num_tres" name="num_tres" required> <br>

        <button type="submit" name="validar">Validar numero</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['validar'])){
                $num_um = filter_var($_POST['num_um'], FILTER_VALIDATE_INT);
                $num_dois = filter_var($_POST['num_dois'], FILTER_VALIDATE_INT);
                $num_tres = filter_var($_POST['num_tres'], FILTER_VALIDATE_INT);
                
                if ($num_um > $num_dois && $num_um > $num_tres){
                    echo "O $num_um e maior";
                }
                else if ($num_dois > $num_um && $num_dois > $num_tres){
                    echo "O $num_dois e maior";
                }
                else{
                    echo "O $num_tres e maior";
                }
            }
        }
    ?>
</body>

</html>