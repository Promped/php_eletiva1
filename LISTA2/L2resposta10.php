<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
</head>
    <body>
        <h1>Resposta do exercício 10</h1>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                    $largura = $_POST["largura"];
                    $altura = $_POST["altura"];
                    $perimetro = 2* ( $largura + $altura);
                    echo "O perimetro do retângulo  é: $perimetro";

                } catch (Exception $e){
                    echo "Erro:" . $e->getMessage();
                }

            }

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>