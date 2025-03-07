<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 15 - IMC</h1>
    <form method="post" action="L2resposta15.php">
      <div class="mb-3">
        <label for="peso" class="form-label">Digite seu peso (em kg):</label>
        <input type="number" step="0.01" id="peso" name="peso" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label for="altura" class="form-label">Digite sua altura (em metros):</label>
        <input type="number" step="0.01" id="altura" name="altura" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Calcular </button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>