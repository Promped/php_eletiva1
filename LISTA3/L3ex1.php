<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Exercicio 1</h1>
   

    <form method="post" class="mb-3" action="L3res1.php">
        <div class="row">
        
            <?php 
            
                for ($i = 1; $i <= 7; $i++): ?>
            
                <div class="mb-3 col-1">
                    <label for="num<?= $i ?>" class="form-label">N°Pos <?= $i ?>:</label>
                    <input type="number" name="num<?= $i ?>" class="form-control" >
                </div>
                
            <?php endfor; ?>
        </div>

        <button type="submit" class="btn btn-primary">Ler</button>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          