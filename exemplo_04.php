<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_04</title>
</head>
<body>
    
    <form method= "POST" action= "">
        <label for= "numero">digite um numero: </label>
        <input type= "nunber" id= "numero" name= "numero" required>
        <button type= "submit" name="fatorial">Verificar </button>
    </form>

    <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(isset($_POST['fatorial'])){
                    $numero = $_POST['numero'];
                    
                    $fatorial = 1;

                    for ($i = 1; $i <= $numero; $i++){
                        $fatorial *=$i;
                    }
                    echo "$fatorial";
                }
            }

       
    ?>

</body>
</html>