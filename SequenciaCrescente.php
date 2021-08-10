
<?php

function SequenciaCrescente($array){
  $erros = 0;
  $acertos = 0;
  $i=0;
  $tamanho  = count($array)-1;
  $pular = 'NAO';

  
  foreach ($array as &$numero) {
    if ($pular == 'SIM'){
        if ($i==$tamanho){
         echo $acertos;
         echo $erros;
         if ($erros <=1){
              return 'TRUE';
              
          } else{
              return 'FALSE';
          }  } 
        
    }  
    else{
     if ($i==$tamanho){
         echo $acertos;
         echo $erros;
         if ($erros <=1){
              return 'TRUE';
              
          } else{
              return 'FALSE';
          }   
     }elseif ($array[$i] < $array[$i+1]){
         $acertos = $acertos + 1;
         
     }else{
         $erros = $erros + 1;
         $pular = 'SIM';
        
     }
    }
    $i = $i + 1;
     
  }
  
  
   
  
}

$sequencia = array(1,2,1,2);

$x = SequenciaCrescente($sequencia);
echo $x;

 





?>