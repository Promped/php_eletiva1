
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Alunos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class="container mt-4">       
        <h1>Resposta exercicio 2 </h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            $alunos = $_POST['alunos'];
            $medias = [];

            foreach ($alunos as $dados) {
                $nome = $dados["nome"];
                $media = (floatval($dados["nota1"]) + floatval($dados["nota2"]) + floatval($dados["nota3"])) / 3;
                $medias[$nome] = $media;
            }

            // Ordena as médias do maior para o menor
            arsort($medias);

            echo "<h2 class='text-center'>Lista de Alunos e suas Médias</h2>";
            echo "<table class='table'>";
            echo "<tr><th>Nome</th><th>Média</th></tr>";

            foreach ($medias as $nome => $media) {
                echo "<tr><td>$nome</td><td>" . number_format($media, 2) . "</td></tr>";
            }

            echo "</table>";
        }
        ?>
    </body>
</html>