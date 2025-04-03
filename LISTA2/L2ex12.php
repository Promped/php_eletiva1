
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
  </head>

    <body>
        <h1>Exercício 12</h1>
        <form method="post" action="L2resposta12.php">
                           
            <div class="mb-3">
                <label for="base" class="form-label">Insira o valor da base: </label>
                <input type="text" id="base" name="base" class="form-control" required="">
            </div>
        
            <div class="mb-3">
                <label for="expoente" class="form-label">Insira o valor do expoente: </label>
                <input type="text" id="expoente" name="expoente" class="form-control" required="">
            </div>
        
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
