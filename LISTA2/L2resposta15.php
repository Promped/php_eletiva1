<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado  Exercício 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
  </head>
  <body>
    <h1>Resultado IMC</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        try {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];

            $imc = $peso / pow($altura, 2); //O comando pow() em PHP é utilizado para calcular a potência de um número.

            echo "Seu IMC é: " . $imc;  

        } catch (Exception $e) {

            echo "Erro: " . $e->getMessage(); 
        }
    }
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>