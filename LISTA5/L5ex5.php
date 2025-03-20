<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
        }
        .form-container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .results-container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .table {
            margin-bottom: 0;
        }
        .message {
            padding: 15px;
            border-radius: 4px;
            background: #f8d7da;
        }
    </style>
</head>

<body class="container mt-5">
    <h1 class="text-center mb-4">Registro de Itens</h1>

    <div class="form-container">
        <h2 class="mb-4">Insira os Itens</h2>
        <form method="POST" action="L5resp5.php">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="input-group">
                    <label class="form-label" for="nome<?php echo $i; ?>">Nome do Item:</label>
                    <input type="text" 
                           id="nome<?php echo $i; ?>" 
                           name="nome[]" 
                           class="form-control" 
                           required>

                    <label class="form-label" for="preco<?php echo $i; ?>">Preço (R$):</label>
                    <input type="number" 
                           id="preco<?php echo $i; ?>" 
                           name="preco[]" 
                           class="form-control" 
                           min="0" 
                           step="0.01" 
                           required>
                </div>
            <?php endfor; ?>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>