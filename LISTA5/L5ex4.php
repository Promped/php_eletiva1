<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5 - Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            width: 120px;
        }

        input {
            padding: 5px;
            width: 250px;
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
    </style>
</head>

<body class="container mt-4">
    <h1 class="text-center">Cadastro de Itens</h1>

    <div class="form-container">
        <h2>Informe os Itens</h2>
        <form method="POST" action="L5resp4.php">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="input-group">
                    <label>Item <?php echo $i + 1; ?>:</label>
                    <input type="text" name="nome[]" placeholder="Nome do Item" required>
                    <input type="number" name="preco[]" placeholder="Preço (R$)" step="0.01" min="0" required>
                </div>
            <?php endfor; ?>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
