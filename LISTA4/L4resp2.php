<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-4">
    <h1>Resposta exercicio 2</h1>
    
    <?php
    // Função para manipular a string
    function manipularString(string $palavra): void {
        echo "<p>A palavra possui " . strlen($palavra) . " caracteres.</p>";
        echo "<p><strong>Maiúsculas:</strong> " . strtoupper($palavra) . "</p>";
        echo "<p><strong>Minúsculas:</strong> " . strtolower($palavra) . "</p>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $palavra = trim($_POST["palavra"]); // Remove espaços em branco

            if (!empty($palavra)) {
                manipularString($palavra); // Chama a função se a palavra não estiver vazia
            } else {
                throw new Exception("Insira uma palavra válida.");
            }
        } catch (Exception $e) {
            echo "<p class='text-danger'><strong>Erro:</strong> " . $e->getMessage() . "</p>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>