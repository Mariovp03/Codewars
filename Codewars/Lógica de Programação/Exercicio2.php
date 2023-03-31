<?php

//Link do kata: https://www.codewars.com/kata/59a8570b570190d313000037/train/php

function sumCubes($n) {
  $sumCube = 0;
  $cube = 0;
 
  for($x = 1;$x <= $n; $x++){
    $cube = $x * $x * $x;
    $sumCube = $sumCube + $cube;
    }
  
  return $sumCube;

}
/* APRENDI A LER MELHOR O QUE ESTÁ SENDO PEDIDO */