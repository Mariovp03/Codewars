<?php

//Link do kata: https://www.codewars.com/kata/569b5cec755dd3534d00000f

function newAvg($arr, $navg) {
    $sum = array_sum($arr);
    $new_donation = ceil(($navg * (count($arr) + 1) - $sum));
  
    if($new_donation <= 0){
    throw new InvalidArgumentException('Argumentos invalidos');
    return -1;
    }else{
    return $new_donation;
    }
     
}