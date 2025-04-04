<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

  <body class="container mt-4">
    <h1>Resposta exercicio 7 </h1>
    <?php

if($_SERVER['REQUEST_METHOD']=='POST')

try {
    // Captura e remove espaços extras
    $data1 = trim($_POST['data1']);
    $data2 = trim($_POST['data2']);

    // Expressão regular para validar o formato dd/mm/YYYY
    $padraoData = "/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/";

    // Verifica se as datas estão no formato correto
    if (!preg_match($padraoData, $data1) || !preg_match($padraoData, $data2)) {
        throw new Exception("Formato de data inválido! Use dd/mm/YYYY.");
    }

    // Converte as datas para o formato YYYY-mm-dd (necessário para o PHP)
    $data1Convertida = DateTime::createFromFormat("d/m/Y", $data1);
    $data2Convertida = DateTime::createFromFormat("d/m/Y", $data2);

    // Verifica se a conversão foi bem-sucedida
    if (!$data1Convertida || !$data2Convertida) {
        throw new Exception("Erro ao processar as datas.");
    }

    // Calcula a diferença entre as datas
    $diferenca = $data1Convertida->diff($data2Convertida);
    $diasDiferenca = $diferenca->days;

    // Exibe o resultado
    echo "<p class='text-success mt-3'><strong>A diferença entre {$data1} e {$data2} é de {$diasDiferenca} dias.</strong></p>";

} catch (Exception $e) {
    echo "<p class='text-danger mt-3'><strong>Erro: " . $e->getMessage() . "</strong></p>";
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>