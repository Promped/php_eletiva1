<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Boa noite! hoje é 

        <?php
            echo date("d/m/Y");  // echo é usado para exibir as onformações para o user 
        
        ?>
    </h1>

    <p>
        <?php
            $nome = "Vanessa"; // essa é uma variavel
            echo " o nome é: $nome";
        ?>
    </p>

    <p>
        <?php
            $nome = "Vanessa"; 
            echo ' o nome é: $nome'; 


            //para "rodar" o cod php -S localhost:8080
        ?>


        
    </p >




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

