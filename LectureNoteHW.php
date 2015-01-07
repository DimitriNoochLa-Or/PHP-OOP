
<?php 
class Book{
	public $firstName = "default name";
	public $lastName = "default last name";
	public $type = "paper";
	public $price = 0;

		function getName() {
			return "{$this->firstName}" . 
			"{$this->lastName}";
		}
}
	$book1 = new Book();
	$book1->firstName = "the tale of  ";
	$book1->lastName = " the great book of nothing";
	print "the Book's name is {$book1->getName()}.";
?>