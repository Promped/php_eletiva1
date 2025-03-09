<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body class="container mt-4">
    <h1>Resposta exercicio 4 </h1>
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        try {
            
            $dia = trim($_POST['dia']);
            $mes = trim($_POST['mes']);
            $ano = trim($_POST['ano']);

            
            if (!is_numeric($dia) || !is_numeric($mes) || !is_numeric($ano)) {
                throw new Exception("Insira números válidos.");
            }

            
            $dia = (int)$dia;
            $mes = (int)$mes;
            $ano = (int)$ano;

            // Verifica se a data é válida
            if (!checkdate($mes, $dia, $ano)) {
                throw new Exception("Data inválida.");
            }

           
            $data = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
            echo "<p class='text-success mt-3'><strong>Data válida: {$data}</strong></p>";

        } catch (Exception $e) {
            echo "<p class='text-danger mt-3'><strong>Erro: " . $e->getMessage() . "</strong></p>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>