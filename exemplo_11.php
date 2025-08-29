<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_11</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit" id="texto" name="texto">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['text'])){
                $string = filter_var($_POST['text'], FILTER_SANITIZE_SPECIAL_CHARS);
                $string_len = strlen($string);

                $string_dois = '';
                for ($i = 0; $i < $string_len; $i++){
                    $string_dois .= $string[$string_len - $i - 1]; 
                }

                if (strcmp($string, $string_dois) == 0){
                    echo "A palavra $string e um palindromo";
                }
                else {
                    echo "A palavra $string nao e um palindromo";
                }

            }
        }
    ?>
</body>

</html>