<?php
// The function can only get array as an argument.
function calcNumMilesOnFullTank(array $models)
{
  foreach($models as $item)
  {
    echo $carModel = $item[0];
    echo " : ";
    echo $numberOfMiles = $item[1] * $item[2];
    echo "<br />";
   }
}
$models = array(
  array('Toyota', 12, 44),
  array('BMW', 13, 41)
);
 
calcNumMilesOnFullTank($models);

?>