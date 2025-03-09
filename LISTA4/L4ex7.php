<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1>Exercício 6</h1>
    <form method="post" action="L4resp7.php">

        <label for="data1" class="form-label">Digite a primeira data (dd/mm/YYYY):</label>
        <input type="text" name="data1" id="data1" class="form-control" placeholder="dd/mm/YYYY" required>

        <label for="data2" class="form-label mt-2">Digite a segunda data (dd/mm/YYYY):</label>
        <input type="text" name="data2" id="data2" class="form-control" placeholder="dd/mm/YYYY" required>

        <button type="submit" class="btn btn-primary mt-3">Mostrar  Diferença</button>
    </form>