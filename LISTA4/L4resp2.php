<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body class="container mt-4">
    <h1>Resposta exercicio 2 </h1>
    <?php

    echo "<p>A palavra possui " . strlen($palavra) . " caracteres.</p>";
    echo "<p><strong>Maiúsculas:</strong> " . strtoupper($palavra) . "</p>";
    echo "<p><strong>Minúsculas:</strong> " . strtolower($palavra) . "</p>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $palavra = trim($_POST["palavra"]); 

        if (!empty($palavra)) {
            manipularString($palavra);
        } else {
            throw new Exception("Insira uma palavra válida.");
        }
    } catch (Exception $e) {
        echo "<p <strong> " . $e->getMessage() . "</strong></p>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>