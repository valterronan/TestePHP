<?php

function Sorteia($rangeInferior, $rangeSuperior){
  $numeroSorteado = rand($rangeInferior,$rangeSuperior);
  return $numeroSorteado;
}


$numeros = array();
$qtd = array(0,0,0,0,0,0,0,0,0,0);

for($i = 1; $i <=20; $i++){
   array_push($numeros,Sorteia(1,10));
}
       
        

foreach ($numeros as &$numero) {
        echo $numero;
        echo "\n";
        $qtd[$numero-1]=$qtd[$numero-1]+1;
}

$maiorQuantidade = 0;
$contador = 1;
$numero = 0;

foreach ($qtd as &$q) {
    
    if ($q > $maiorQuantidade){
        $numero = $contador;
        $maiorQuantidade = $q;
    }
    
     $contador = $contador +1;   
}

echo "O numero que mais se repete eh $numero.";
echo "\nEle se repete $maiorQuantidade vezes.";



?>