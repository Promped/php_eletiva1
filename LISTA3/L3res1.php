<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta do exercicio 1 </h1>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                try
                {
                    $numeros = [];
                
                   
                    for ($i = 1; $i <= 7; $i++) 
                    {
                        
                        $numeros[] =$_POST['num' . $i];
                    }
                  
                    $menor_valor = 1000000000;
                    $posicao = 0;
                    
                    for ($i = 1; $i < count($numeros); $i++) 
                    {
                        if ($_POST["nota$i"] < $menor_valor) {
                            $menor_valor = $_POST["nota$i"];
                            $posicao = $i; 
                        }
                    }
                         
                    echo "<strong>Resultado:</strong>";
                    echo "O menor valor é " . number_format($menor_valor, 2, ',', '.') . "<br>";
                    echo "Ele está na posição " . $posicao . " da sequência inserida.</div>";
                }
                catch(Exception $e)
                { 
                    echo $e->getMessage();
                }
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>