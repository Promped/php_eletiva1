<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<h1>Exercício 4</h1>
<form method="post" action="L5resp4.php">
    <title>Itens com Imposto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .form-container {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .input-group {
            margin: 10px 0;
        }

        label {
            display: inline-block;
            width: 100px;
        }

        input {
            padding: 5px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .resultado {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f8f9fa;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Itens</h2>
        <form method="POST" action="">
            <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="input-group">
                <label>Item <?php echo $i; ?>:</label>
                <input type="text" name="nome[]" placeholder="Nome" required>
                <input type="number" name="preco[]" placeholder="Preço" step="0.01" min="0" required>
            </div>
            <?php endfor; ?>
            <button type="submit">Calcular </button>
        </form>
    </div>