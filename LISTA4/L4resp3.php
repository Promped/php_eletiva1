<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body class="container mt-4">
    <h1>Resposta exercicio 3 </h1>
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $palavra1 = trim($_POST['palavra1']);
        $palavra2 = trim($_POST['palavra2']);


        if (strpos($palavra1, $palavra2) !== false) {
            echo "<p <strong>A palavra '{$palavra2}' está contida na '{$palavra1}'.</strong></p>";
        } else {
            echo "<p <strong>A palavra '{$palavra2}' NÃO está contida na '{$palavra1}'.</strong></p>";
        }
    } catch (Exception $e) {
        echo "<p class='text-danger mt-3'><strong>Erro: " . $e->getMessage() . "</strong></p>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>