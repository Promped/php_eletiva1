<?php
declare (strict_types=1);// toda variavel tem que ter uma função ,tem que definir o retorno da função (não é obrigatorio ter retorno )


// se precisar converter float $numeros[] = floatval($_POST['num' . $i]);//conversão para float

// repetição para criar os dois campos de entrada, se modificar o 2 para qualquer outro numero, indicara a qtd de repetição, e i=1 significa indice partindo do 1 e nao 0
for ($i = 1; $i <= 2; $i++): ?>


$numero = $_POST['n_mes']; 
                    //solucao para usar estrutura de repeticao ..vetor 
                    $mes= ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                    $nome_mes= "";      

?>

<?php
      function manipularString(string$palavra):void{
        echo "<p> a palavra possui ". strlen($palavra)."caracteres </p>";
        echo "<p> Letra A substituida por 4:",str_replace("a","4",$palavra)."</p>";
      }  

      function gerarValorAleatorio(int $inicial, $intfinal): int{
        return rand($inicial,$final);
      }
      
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $palavra = $_POST["palavra"];
                manipularString(strtolower($palavra));
                $valor = gerarValorAleatorio(1,20);
                echo "<p> O valor gerado foi $valor<\p>";
                $numero = 3.555555;
                echo "<p> Mostrando as casas decimais:".number_format($numero,2,",",".")."</p>";
               
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
?>
 
