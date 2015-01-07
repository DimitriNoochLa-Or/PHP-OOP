
<?php 
class Tiger{
	public $firstName = "default name";
	public $lastName = "default last name";
	public $type = "animal";
	public $price = 0;

		function getName() {
			return "{$this->firstName}" . 
			"{$this->lastName}";
		}
}
	$tiger1 = new Tiger();
	$tiger1->firstName = "MR.micman ";
	$tiger1->lastName = "liger";
	print "the tigers's name is {$tiger1->getName()}.";
?>