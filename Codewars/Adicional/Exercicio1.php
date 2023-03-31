<?php

//Link do kata: https://www.codewars.com/kata/632408defa1507004aa4f2b5/train/php

class A
{ 
  public static $valor = 1;
  
  public static $contador = 1;
  
  public static function getNumber(): int
  {
    if(self::$contador == 1){
      self::$contador++;
      return 1;
    }
    return self::$valor *= 2;
  }
}

//Desenvolvi um pouco de lógica