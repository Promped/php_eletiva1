
<?php

 declare (strict_types=1);// toda variavel tem que ter uma função ,tem que definir o retorno da função (não é obrigatorio ter retorno )



$numeros[] = floatval($_POST['num' . $i]);//conversão para float

// repetição para criar os dois campos de entrada, se modificar o 2 para qualquer outro numero, indicara a qtd de repetição, e i=1 significa indice partindo do 1 e nao 0
for ($i = 1; $i <= 2; $i++);


 //solucao para usar estrutura de repeticao ..vetor 
 $numero = $_POST['n_mes']; 
  $mes= ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
  $nome_mes= "";      


  echo "<p> Letra A substituida por 4:",str_replace("a","4",$palavra)."</p>";


  // Captura e remove espaços extras
  $dia = trim($_POST['dia']);

//php -S localhost:8000



            // Verifica se a data é válida
            if (!checkdate($mes, $dia, $ano)) {
                throw new Exception("Data inválida.");
            }






//SESSION
<body>
<? php 
    session_start();
 $_SESSION['usuario'] = "João";   //arreipre definido do servidor $_SESSION
?>
<h1> Bem vindo <?= $_SESSION['usuario']</h1>



 //recuperando a sessão 

<body>
 <?php
  session_start();
<h1> Seja bem vindo novamente <?= $_SESSION['usuario']</h1>
 


 session_start();
session_destroy();
unset($_SESSION['usuario']); // apagar uma sessao especifica

//sempre é necessario usar o start_session mesmo que for para apagar tudo 


// COOKIE
<body>
<?php
  session_start();
 $_SESSION['usuario'] = "João";
  setcookie('usuario','João', time() + 3600); //tem que definir o tempo
?>

<h1> Bem vindo <?= $_SESSION['usuario'] = "João"; </h1>;
 <h2> Bem vindo <?= $_COOKIE['usuario'] ?></h2>






