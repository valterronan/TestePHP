<?php
function SeculoAno($ano){

  $seculoCalculado = $ano;
  
  if (strlen($seculoCalculado) <=2) {
    $seculoCalculado=1;
  }
  elseif (strlen($seculoCalculado) ==3){
    if(substr($seculoCalculado, -1, 2)==0){
       $seculoCalculado=substr($seculoCalculado, 0, 1);
    }else{
       $seculoCalculado=substr($seculoCalculado, 0, 1) + 1;
    }  
  }
  else {
    if(substr($seculoCalculado, -1, 2)==0){
       $seculoCalculado=substr($seculoCalculado, 0, 2);
    }else{
       $seculoCalculado=substr($seculoCalculado, 0, 2) + 1;
    }
  }
  return $seculoCalculado;
}


$seculo = SeculoAno(2021);
echo $seculo;

?>