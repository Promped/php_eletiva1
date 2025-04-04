<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="container mt-4 mb-3">
    <h1 class=" mt-4 mb-3">Exercicio 5</h1>
    

    <form method="post" class="mb-3" action="L3res5.php">   
        <div class="row">        
            <div class="mb-3 mt-4 col-4">
                <label for="n_mes" class="form-label">Digite um número correspondente a um mes: </label>
            </div>
            <div class="mb-3 mt-4 col-2">
                <input type="number" id="n_mes" name="n_mes" class="form-control" required="" placeholder="(1 - 12)">
            </div>
            <div class="mb-3 mt-4 col-2">
                <button type="submit" class="btn btn-primary">Enviar</button>  
            </div>
        </div>
    
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          