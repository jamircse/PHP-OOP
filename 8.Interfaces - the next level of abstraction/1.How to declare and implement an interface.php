<?php

interface Car { 
  public function setModel($name);
  
  public function getModel();
}
class miniCar implements Car {
  private $model; 
   
  public function setModel($name)
  { 
    $this -> model = $name; 
  }
  
  public function getModel()
  {
    return $this -> model; 
  }
}



?>