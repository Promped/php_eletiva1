<?php
    $idade = 20;
    if ($idade >= 18)
        echo "Maior de Idade";
    else{
        echo "Menor de Idade";
    }
    //operador ternario if e esle para operações simples
    echo $idade >= 18 ? "maior Idade" : "menor Idade";




    $nota = 6;
    if ($nota > 6)
        echo "acima media";
    elseif ($nota == 6)
        echo "namedia";
    else{
        echo "abaixo";
    }
 
    $mes = 1;
    switch ($mes) {
        case 'value':
            # code...
            break;
       
        default:
            # code...
            break;
    }
?>
 


$i = 1;
while ($i<10){
    echo "$i<br/>";
    $i++;

}


do{
    echo "$i<br/>";
    $i++;
} while ($i<=10);




for ($i=0; $i<10; $i++ ){
    echo "$i<br/>";
}







?>