<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_03</title>
</head>
<body>
    
    <form method= "POST" action= "">
        <label for= "numero">digite um numer: </label>
        <input type= "nunber" id= "numero" name= "numero" required>
        <button type= "submit" name="sinal">Verificar </button>
    </form>

    <?php
    
       if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['sinal'])){
            $numero = $_POST['numero'];

            if ($numero == 0){
                echo "O número informado é <strong>0</strong>.";
            } 
            else if ($numero < 0){
                echo "O número $numero é <strong>negativo</strong>."; 
            }  
            else  {
                echo "O número $numero é <strong>positivo</strong>.";
                }
            }
        }
    ?>

</body>
</html>