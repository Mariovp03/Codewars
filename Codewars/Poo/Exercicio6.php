<?php

//Link do kata: https://www.codewars.com/kata/57b3bf0ad241568f2b0000b7

class Person{
    protected $name;
    protected $age;
    protected $occupation;
  
    
    public function __construct($name, $age, $occupation){
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
      
     if(!is_string($name)){
        throw new InvalidArgumentException('Name must be a string!');
     }
  
     if($age < 0 || !is_int($age)){
        throw new InvalidArgumentException('Age must be a non-negative integer!');
     }
     
     if(!is_string($occupation)){
        throw new InvalidArgumentException('Occupation must be a string!');
     }
   }
    
    public function get_name(){
      return $this->name;
    }
   
    public function get_age(){
      return $this->age;
    }  
    
    public function get_occupation(){
      return $this->occupation;
    }
    
    public function set_name($name){
      if(!is_string($name)){
        throw new InvalidArgumentException('Name must be a string!');
      }else{
        $this->name = $name;
      }
    }
    
    public function set_age($age){
      if($age < 0 || !is_int($age)){
        throw new InvalidArgumentException('Age must be a non-negative integer!');
      }else{
        $this->age = $age;
      }
    }  
    
    public function set_occupation($occupation){
      if(!is_string($occupation)){
        throw new InvalidArgumentException('Occupation must be a string!');
      }else{
        $this->occupation = $occupation;
      }
    }
  }