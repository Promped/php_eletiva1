<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body class="container mt-4">
    <h1>Resposta exercicio 6 </h1>
    <?php

if($_SERVER['REQUEST_METHOD']=='POST') 
    try {
        if (!is_numeric($numero)) {
            throw new Exception("Por favor, insira um número válido.");
        }
        $numero = (float)$numero;

        // Arredonda o número
        $arredondar = round($numero);

        echo "<p <strong>O número {$numero} arredondado é {$arredondar}.</strong></p>";

    } catch (Exception $e) {
        echo "<p <strong>" . $e->getMessage() . "</strong></p>";
    }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>