<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_08</title>
</head>
<body>
        <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" id="numPerfeito" name="numPerfeito">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['numPerfeito'])){
            $divisores = 0;
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);

            if ($numero % $i == 0){
                $divisores += $i;
            }     
                }if ($numero == $divisores){
                    echo "O $numero e perfeito"; 
                }else{
                    echo "O $numero nao e perfeito";
                }
        }
        
    ?>

</body>
</html>