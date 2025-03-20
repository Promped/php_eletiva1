<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<h1>Exercício 2</h1>
<form method="post" action="L5resp2.php">
    
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border: 2px solid black;
            border-radius: 10px; /* Bordas arredondadas */
            overflow: hidden;
            font-family: "Arial", Arial, serif;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .btn-submit {
            margin-top: 15px;
        }
    </style>
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

