<?php 

//Link do kata: https://www.codewars.com/kata/579a09787cb7a14d0b000057

class Salesman extends Person{
  
    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
      $this->occupation = "Salesman";
    }
    
    public function introduce(){
     return parent::introduce() . ", don't forget to check out my products!";
    }
    
  }
  
  class ComputerProgrammer extends Person{
    
    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
      $this->occupation = "Computer Programmer";
    }
    
    public function describe_job(){
      return parent::describe_job() . ", don't forget to check out my Codewars account ;)";
    }
    
  }
  
  class WebDeveloper extends ComputerProgrammer{
    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
      $this->occupation = "Web Developer";
    }
    
    public function describe_job(){
      return parent::describe_job() . " And don't forget to check on my website :D";
    }
    
    public function describe_website(){
      return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
    }
  }