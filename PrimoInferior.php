<?php
function PrimoInferior($numero){
  $maiorPrimo =0;
  
  if($numero < 0){
     $maiorPrimo=0; 
  }
  else{
    for($i = 1; $i <= $numero; $i++)
    {
           $divisores = 0;
             
            for($j = $i; $j >= 1; $j--)
            {
                if (($i % $j) == 0) {
                    $divisores++;
                }
            }
        
            if ($divisores == 2)
            {
                $maiorPrimo = $i;
            }
    }
  }
  
  
  
  return $maiorPrimo;
}


$resultado = PrimoInferior(30);
echo $resultado;

?>