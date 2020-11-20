<?php

interface Vehicle {
  public function setHasWheels($bool); 
 
  public function getHasWheels();
}

interface Car { 
  public function setModel($name);
  
  public function getModel();
}

class miniCar implements Car, Vehicle {
  private $model; 
  private $hasWheels; 
  
  public function setModel($name)
  { 
    $this -> model = $name; 
  }
  
  public function getModel()
  {
    return $this -> model; 
  }
  
  public function setHasWheels($bool)
  { 
    $this -> hasWheels = $bool; 
  }
  
  public function getHasWheels()
  {
  return ($this -> hasWheels)? "has wheels" : "no wheels";
  }
}

?>