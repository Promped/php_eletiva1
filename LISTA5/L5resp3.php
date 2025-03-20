<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .table-container {
            margin-top: 20px;
        }
    </style>
</head>

<body class="container">
    <h1 class="text-center">Resposta exercicio 3</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["codigo"]) && isset($_POST["nome"]) && isset($_POST["preco"])) {
        $codigos = $_POST["codigo"];
        $nomes = $_POST["nome"];
        $precos = $_POST["preco"];

        $produtos = [];

        for ($i = 0; $i < count($codigos); $i++) {
            if (!empty($codigos[$i]) && !empty($nomes[$i]) && is_numeric($precos[$i])) {
                $codigo = htmlspecialchars($codigos[$i]);
                $nome = htmlspecialchars($nomes[$i]);
                $preco = floatval($precos[$i]);

                
                if ($preco > 100) {
                    $preco *= 0.90;
                }

                // Adiciona ao array associativo (mapa ordenado)
                $produtos[$codigo] = ["nome" => $nome, "preco" => $preco];
            }
        }

        if (!empty($produtos)) {
            // Ordena os produtos 
            uasort($produtos, function ($a, $b) {
                return strcmp($a["nome"], $b["nome"]);
            });

            echo "<div class='table-container'>";
            echo "<h2 class='text-center'>Produtos Ordenados pelo Nome</h2>";
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='table-dark'><tr><th>Código</th><th>Nome</th><th>Preço Final (R$)</th></tr></thead><tbody>";

            foreach ($produtos as $codigo => $produto) {
                echo "<tr><td>$codigo</td><td>{$produto['nome']}</td><td>" . number_format($produto['preco'], 2, ',', '.') . "</td></tr>";
            }

            echo "</tbody></table>";
            echo "</div>";
        } else {
            echo "<p class='text-danger text-center'>Nenhum produto válido foi registrado.</p>";
        }
    } else {
        echo "<p class='text-danger text-center'>Nenhum dado foi enviado.</p>";
    }
    ?>

</body>
</html>
