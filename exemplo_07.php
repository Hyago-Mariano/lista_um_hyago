<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício07</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_perfeito">Digite o valor para verificar se é perfeito:</label>
        <input type="number" name="numero_perfeito" id="numero_perfeito">
        <button type="submit" name="verificar_perfeito">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar_perfeito'])){
            $numero = $_POST['numero_perfeito'];
            $valor = 0;
            for($i = 1; $i < $numero; $i++){
                if($numero % $i === 0){
                    $valor = $valor + $i;
                }
            }
            if($valor == $numero){
                echo "O número $numero é perfeito";
            } else{
                echo "O número $numero não é perfeito";
            }
        }
    }
    ?>
</body>
</html>