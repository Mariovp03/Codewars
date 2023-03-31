<?php

//Link do kata: https://www.codewars.com/kata/579775203467db17b500037b

class Person{
    public $first_name;
    public $last_name;
    
    public function __construct($first_name, $last_name){
      $this->first_name = $first_name;
      $this->last_name = $last_name; 
    }
    
    public function get_full_name(){
      return "$this->first_name $this->last_name";
    }
}