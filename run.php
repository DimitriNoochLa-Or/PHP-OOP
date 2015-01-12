<?php  
// if (is_integer('908098')) echo "this is a number";
// else 
// echo "this is not a number";
// var_dump(is_integer(213048));
// var_dump(is_integer(1234));
// var_dump(is_integer(123));
// var_dump(is_integer(231));

// // example 2
// $a = false;

// // Since $a is a boolean, it will return true
// if (is_bool($a) === true) {
//     echo "Yes, this is a boolean";
// }

// // Since $b is not a boolean, it will return false
// else  {
//     echo "No, this is not a boolean";
// }

// // example 3 
// if (is_double('908098')) echo "this is a number";
// else 
// echo "this is not a number";
// var_dump(is_double(213048));
// var_dump(is_double(1234));
// var_dump(is_double(123));
// var_dump(is_double(231));
 class car
 {
  public $models;
  public $colors;

 	function __construct($models,$colors)
 	{
	 	$this->models = $models;
	 	$this->colors = $colors;
	 }
    function welcome()
    {
  		return "welcome to the dealership, we many " .
  		 $this->models . " in many " . $this->colors;
    }

 }
  

  $car = new Car(' honda civics', ' colors' );

  print $car->welcome();