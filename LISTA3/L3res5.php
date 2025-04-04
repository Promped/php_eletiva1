<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
  <body class="container mt-4">
    <h1>Resposta do exercicio 5</h1>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST') 
            {
                try
                {
                    $numero = $_POST['n_mes']; 
                    $mes= ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                    $nome_mes= "";                 

                    if($numero  > 12 || $numero < 1) 
                    {
                        throw new Exception("numero invalido");
                    }                    
                    
                    for ($i = 0; $i < count($mes); $i++) 
                    {
                        
                        if (($i + 1) == $numero) 
                        {
                            $nome_mes = $mes[$i];
                            break;
                        }
                    }                  
                 
                    
                    echo "<strong>Mes correspondente:</strong>";
                    echo "mes de $nome_mes"; 
                }
                catch(Exception $e)
                { 
                    echo  $e->getMessage();
                }
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>