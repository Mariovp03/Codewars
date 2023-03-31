<?php

//Link do kata: https://www.codewars.com/kata/580dda86c40fa6c45f00028a/train/php

function cube_odd($a) {

    $sumCubeOdd = 0;
    $cube = 0;
    
    foreach($a as $value){  
       
      if(!is_numeric($value)){
        return NULL;
      }
    
      $cube = pow($value, 3);
      if($value % 2 != 0){
        $sumCubeOdd += $cube;
      }    
  } 
    return $sumCubeOdd;
  }
  /* Primeira vez que usei a função is_numeric e a pow, */