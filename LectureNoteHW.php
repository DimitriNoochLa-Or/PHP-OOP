
<?php 
class Fish{
	public $firstName = "default name";
	public $lastName = "default last name";
	public $type = "sushi";
	public $price = 0;

		function getName() {
			return "{$this->firstName}" . 
			"{$this->lastName}";
		}
}
	$fish1 = new Fish();
	$fish1->firstName = "bob";
	$fish1->lastName = "sushi";
	print "the fish's name is {$fish1->getName()}.";
?>