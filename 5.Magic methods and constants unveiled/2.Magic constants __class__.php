<?php

class Car {
  private $model = '';
  
  //__construct
  public function __construct($model = null)
  {
    if($model) 
    { 
      $this -> model = $model;
    }
  }
   
  public function getCarModel()
  {
    //We use the __CLASS__ magic constant in order to get the class name
  
    return " The <b>" . __CLASS__ . "</b> model is: " . $this -> model;
  }
}
  
$car1 = new Car('Mercedes');
  
echo $car1 -> getCarModel();
/*
Also may help:
__LINE__ to get the line number in which the constant is used.
__FILE__ to get the full path or the filename in which the constant is used.
__METHOD__ to get the name of the method in which the constant is used.
*/

?>