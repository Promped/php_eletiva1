<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4 - </title>
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-4">
    <h1>Resposta 2 - Contar Caracteres</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            // Função para contar caracteres
            function manipularString(string $palavra): void {
                echo "<p>A palavra possui " . strlen($palavra) . " caracteres.</p>";
            }

            // Pegando o valor do formulário
            $palavra = $_POST['palavra'];

            // Chamando a função com o valor inserido
            manipularString($palavra);
        } catch (Exception $e) {
            echo "<p class='text-danger'>Erro: " . $e->getMessage() . "</p>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>