<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5">Exercício 18</h1>
      <form method="post" action="L2resposta18.php">
        <div class="mb-3">
          <label for="capital" class="form-label">Capital R$:</label>
          <input type="text" id="capital" name="capital" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label for="taxa" class="form-label">Taxa de Juros :</label>
          <input type="text" id="taxa" name="taxa" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="periodo" class="form-label">Período (mes/ano):</label>
          <input type="date" id="periodo" name="periodo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Calcular </button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
