<?php

//Link do kata: 

function timeCorrect($timestring) {
  if(empty($timestring) || $timestring == "" ){
    return $timestring;
  } 

  if(preg_match("/[a-zA-Z]/", $timestring) || preg_match("/;/", $timestring) || is_numeric($timestring) ){
     return NULL;
  }

  $data_parts = explode(":", $timestring);
  
  list($hours, $minutes, $seconds) = array_map('intval', $data_parts);

    if ($seconds >= 60) {
        $minutes += 1;
        $seconds -= 60;
    }

    if ($minutes >= 60) {
        $hours += 1;
        $minutes -= 60;
    }

    if ($hours >= 24) {
        $hours = $hours % 24;
    }

  $data_correta = sprintf("%02d:%02d:%02d",$hours,$minutes,$seconds);
  
  return $data_correta;
}
/*
-Nesse foi bem interessante, acredito que exercitei bastante a lógica e pesquisar também algumas coisas, pois usei explode, algo
que já tinha visto antes mas nunca usado, e basicamente ele divide uma string em várias posições no array.
-O preg_match foi outro que tinha visto mas nunca usado, ele verifica se tem as determinadas string e retorna um valor de 0 ou 1.
-O list transforma posições do array em uma váriavel, mt agregador
*/