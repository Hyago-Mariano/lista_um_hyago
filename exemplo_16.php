<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_16</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Nome:</label>
        <input type="text" id="nome" name="nome" required> <br>
        <label for="numero">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit" id="votar" name="votar">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['votar'])){
                $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
                $idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
                
                if ($idade >= 16){
                    echo "$nome ja pode votar";
                }
                else{
                    echo "$nome nao pode votar";
                }
            }
        }
    ?>
</body>
</html>