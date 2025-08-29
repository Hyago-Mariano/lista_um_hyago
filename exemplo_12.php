<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo_12</title>
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
                $quantidade = 0;

                for ($i = 0; $i <= $string_len; $i++){
                    $letra = strtolower($string[$i]);
                    if ($letra === 'a' || $letra === 'e' || $letra === 'i' || $letra === 'o' || $letra === 'u'){
                        $quantidade++;
                    }
                }

                echo "Existem $quantidade vogais na palavra $string";

            }
        }
    ?>
</body>
</html>