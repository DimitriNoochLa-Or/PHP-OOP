
<?php 
// Example 1
class Cat {
public $firstName;
public $lastName;
public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
	$this­>firstName = $firstName;
	$this­>lastName = $lastName;
	$this­>breed = $breed;
	}
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
class Tiger {
public $firstName;
public $lastName;
public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
	$this­>firstName = $firstName;
	$this­>lastName = $lastName;
	$this­>breed = $breed;
	}
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
class Icecream {
public $shape;
public $flavor;
public $place;
	function __construct($title, $shape, $flavor, $place) {
	$this­>shape = $shape;
	$this­>flavor = $flavor;
	$this­>place = $place;
	}
		function getName() {
		return "{$this­>shape}" .
		"{$this­>flavor}";
		}
}

 $cat1 = new Cat("billybob", "sherwood", "a cat");
 print "Cat 1:{$cat1->getName()}\n";

 $tiger1 = new Tiger("tiger", "stripes", "a cat");
 print "Tiger 1:{$tiger1->getName()}\n";

 $icecream1 = new Icecream("square", "chocolate", "baskin robins");
 print "Icecream 1:{$icecream1->getName()}\n";
