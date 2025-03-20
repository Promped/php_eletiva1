<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
    <h1 class="text-center">Registro de Itens</h1>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome"]) && isset($_POST["preco"])) {
        $nomes = $_POST["nome"];
        $precos = $_POST["preco"];
        $itens = [];

        for ($i = 0; $i < count($nomes); $i++) {
            if (!empty($nomes[$i]) && is_numeric($precos[$i]) && $precos[$i] >= 0) {
                $nome = htmlspecialchars($nomes[$i]);
                $preco = floatval($precos[$i]);
                $preco_com_imposto = $preco * 1.15;
                $itens[$nome] = $preco_com_imposto;
            }
        }

        if (!empty($itens)) {
            asort($itens);
            echo "<div class='results-container'>";
            echo "<h2 class='text-center mb-4'>Resultados (Ordenados por Preço com Imposto)</h2>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='table-dark'><tr><th scope='col'>Nome do Item</th><th scope='col'>Preço com Imposto (R$)</th></tr></thead>";
            echo "<tbody>";

            foreach ($itens as $nome => $preco) {
                echo "<tr><td>$nome</td><td>" . number_format($preco, 2, ',', '.') . "</td></tr>";
            }

            echo "</tbody></table></div></div>";
        } else {
            echo "<p class='text-danger text-center message mt-4'>Nenhum item válido foi registrado.</p>";
        }
    }
    ?>
</body>
</html>