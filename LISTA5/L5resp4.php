
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
        <h1>Registro de Itens</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $itens = [];
            
            
            for($i = 1; $i <= 5; $i++) {
                $nome = $_POST["nome$i"];
                $preco = floatval($_POST["preco$i"]);
                $preco_com_imposto = $preco * 1.15; //  15% de imposto
                $itens[$nome] = $preco_com_imposto;
            }
            
           
            asort($itens);  // Ordenar pelo preço com imposto
            
        
            echo "<div class='result'>";
            echo "<h2>Resultados (ordenados por preço com imposto):</h2>";
            echo "<table>";
            echo "<tr><th>Nome do Item</th><th>Preço com Imposto (R$)</th></tr>";
            
            foreach($itens as $nome => $preco) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($nome) . "</td>";
                echo "<td>" . number_format($preco, 2, ',', '.') . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";
        }
        ?>

</body>
</html>