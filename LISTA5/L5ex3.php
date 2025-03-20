<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .form-container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .btn-submit {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #0056b3;
        }
    </style>
</head>

<body class="container">
    <h1 class="text-center">Cadastro de Produtos</h1>

    <div class="form-container">
        <h2>Informe os Produtos</h2>
        <form method="POST" action="L5resp3.php">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="input-group">
                    <label class="form-label">Código:</label>
                    <input type="text" name="codigo[]" class="form-control" required>

                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome[]" class="form-control" required>

                    <label class="form-label">Preço (R$):</label>
                    <input type="number" name="preco[]" class="form-control" step="0.01" min="0" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn-submit">Enviar</button>
        </form>
    </div>
</body>
</html>