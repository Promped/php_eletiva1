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
            // Verifica se os campos foram preenchidos corretamente
            if (!empty($nomes[$i]) && is_numeric($precos[$i])) {
                $nome = htmlspecialchars($nomes[$i]); // Previne XSS
                $preco = floatval($precos[$i]);
                $preco_com_imposto = $preco * 1.15; // Aplicando 15% de imposto
                $itens[$nome] = $preco_com_imposto;
            }
        }

        if (!empty($itens)) {
            asort($itens); // Ordena por preço com imposto (crescente)

            echo "<div class='mt-4'>";
            echo "<h2 class='text-center'>Resultados (Ordenados por Preço com Imposto)</h2>";
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='table-dark'><tr><th>Nome do Item</th><th>Preço com Imposto (R$)</th></tr></thead><tbody>";

            foreach ($itens as $nome => $preco) {
                echo "<tr><td>$nome</td><td>" . number_format($preco, 2, ',', '.') . "</td></tr>";
            }

            echo "</tbody></table>";
            echo "</div>";
        } else {
            echo "<p class='text-danger text-center'>Nenhum item válido foi registrado.</p>";
        }
    } else {
        echo "<p class='text-danger text-center'>Nenhum dado foi enviado.</p>";
    }
    ?>

</body>
</html>
