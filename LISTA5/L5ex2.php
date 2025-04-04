<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-4">
<h1>Exercício 2</h1>
<form method="post" action="L5resp2.php">
    
    
</head>
<body class="container">
    <h1 class="text-center">Cadastro de Alunos</h1>

    <form method="POST">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <h3>Aluno <?= $i ?></h3>
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="alunos[<?= $i ?>][nome]" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nota 1:</label>
                <input type="number" step="0.01" name="alunos[<?= $i ?>][nota1]" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nota 2:</label>
                <input type="number" step="0.01" name="alunos[<?= $i ?>][nota2]" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nota 3:</label>
                <input type="number" step="0.01" name="alunos[<?= $i ?>][nota3]" class="form-control" required>
            </div>
        <?php endfor; ?>

        <button type="submit" name="submit" class="btn btn-primary btn-submit">Calcular </button>
        <br>
    </form>

