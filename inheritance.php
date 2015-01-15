
<?php 
// class Animal{
// 	public $firstName;
// 	public $lastName;
// 	public $scientificName;
// 	public $gender;
// 	public $weight;
// 	public $bark;
// 	public $meow;


// 	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow){
// 		$this->scientificName = $scientificName;
// 		$this->firstName = $firstName;
// 		$this->lastName = $lastName;
// 		$this->gender = $gender;
// 		$this->weight = $weight;
// 		$this->bark = $bark;
// 		$this->meow = $meow;
// 	}

// 	function getName(){
// 		return "this is my" . $this->firstName . 
// 		"and last " . $this->lastName;
// 	}

// }
// 	class Cat extends Animal{
// 		function greet()
// 		{
// 			return $this->meow;
// 		}
// 	}


// 	class Dog extends Animal
// 	{
		
// 		function hello()
// 		{
// 			return $this->bark;
// 		}
// 	}

// 	$cat = new Cat("Cat" , "Mellow" , "Yellow" , "male" , "990 pounds" , "ricki bobby" , "alsdfkja" );
// 	print "Animal 1 is a " . $cat->getName();
	// example 2
// 	class Car{
// 	public $brandName;
// 	public $color;
// 	public $type;
// 	public $miles;
// 	public $weight;
// 	public $vroom;
// 	public $vroom2;



// 	function __construct($brandName, $color, $type, $miles, $weight , $vroom , $vroom2){
// 		$this->brandName = $brandName;
// 		$this->color = $color;
// 		$this->type = $type;
// 		$this->miles = $miles;
// 		$this->weight = $weight;
// 		$this->vroom = $vroom;
// 		$this->vroom2 = $vroom2;


		
// 	}

// 	function enterShop(){
// 		return "Welcome to my automotive shop we have some used " . $this->brandName . 
// 		" in these colors: " . $this->color . ". The types we have are " . $this->type .
// 		 " the car has " . $this->miles . " on it";
// 	}

// }
// 	class  Bmw extends Car{
// 		function greet()
// 		{
// 			return $this->vroom;
// 		}
// 	}


// 	class Ford extends Car
// 	{
		
// 		function hello()
// 		{
// 			return $this->vroom2;
// 		}
// 	}

// 	$bmw = new Bmw("Bmws" , "black,red,blue and orange" , "sedan, suv , 4door" , "12000 miles" , "990 pounds" , "sad" , "alsdf" );
// 	print $bmw->enterShop();
// PART 2
// class Animal{
// 	public $firstName;
// 	public $lastName;
// 	public $scientificName;
// 	public $gender;
// 	public $weight;


// 	function __construct($scientificName, $firstName, $lastName, $gender, $weight){
// 		$this->scientificName = $scientificName;
// 		$this->firstName = $firstName;
// 		$this->lastName = $lastName;
// 		$this->gender = $gender;
// 		$this->weight = $weight;
	
// 	}

// 	function getName(){
// 		return "this is my " . $this->firstName . 
// 		" and last " . $this->lastName;
// 	}

// }

// 	class Cat extends Animal{
// 		function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
// 			parent:: __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow);
// 			$this->meow = $meow;
// 		}
// 		function greet()
// 		{
// 			return $this->meow;
// 		}
// 	}


// 	class Dog extends Animal
// 	{
// 		function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark){
// 			parent:: __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark);
// 			$this->bark = $bark;
// 		}
		
// 		function hello()
// 		{
// 			return $this->bark;
// 		}
// 	}

// 	$cat = new Cat("Cat" , "Mellow" , "Yellow" , "male" , "990 pounds" , "ricki bobby" , "alsdfkja" );
// 	print "Animal 1 is a " . $cat->getName();
// 	// example 2 
// 	class Car{
// 	public $brandName;
// 	public $color;
// 	public $type;
// 	public $miles;
// 	public $weight;

// 	function __construct($brandName, $color, $type, $miles, $weight){
// 		$this->brandName = $brandName;
// 		$this->color = $color;
// 		$this->type = $type;
// 		$this->miles = $miles;
// 		$this->weight = $weight;
		
// 	}

// 	function enterShop(){
// 		return "Welcome to my automotive shop we have some used " . $this->brandName . 
// 		" in these colors: " . $this->color . ". The types we have are " . $this->type .
// 		 " the car has " . $this->miles . " on it";
// 	}

// }
// 	class  Bmw extends Car{
// 			function __construct($brandName, $color, $type, $miles, $weight, $vroom){
// 				parent::__construct($brandName, $color, $type, $miles, $weight, $vroom);
// 				$this->vroom = $vroom;

// 		}
// 		function greet()
// 		{
// 			return $this->vroom;
// 		}
// 	}


// 	class Ford extends Car
// 	{
// 		function __construct($brandName, $color, $type, $miles, $weight, $vroom2){
// 				parent::__construct($brandName, $color, $type, $miles, $weight, $vroom2);
// 				$this->vroom2 = $vroom2;

// 		}
		
// 		function hello()
// 		{
// 			return $this->vroom2;
// 		}
// 	}

// 	$bmw = new Bmw("Bmws" , "black,red,blue and orange" , "sedan, suv , 4door" , "12000 miles" , "990 pounds" , "sad" , "alsdf" );
// 	print $bmw->enterShop();
	// example 3
			class Human{
	public $firstName;
	public $lastName;
	public $gender;
	public $type;
	public $weight;
	
	function __construct($firstName, $lastName, $gender , $type, $miles, $weight){
		$this->brandName = $brandName;
		$this->color = $color;
		$this->type = $type;
		$this->miles = $miles;
		$this->weight = $weight;
		
	}

	function socialMeet(){
		return 

}
	class  Boy extends Human
	{
	        function __construct($firstName, $lastName, $gender , $type, $miles, $weight){
				parent::__construct($firstName, $lastName, $gender , $type, $miles, $weight);
				

		     }
		function greet()
		{
			return $this->vroom;
		}
	}


	class Girl extends Human
	{
		 function __construct($firstName, $lastName, $gender , $type, $miles, $weight){
				parent::__construct($firstName, $lastName, $gender , $type, $miles, $weight);
				

		     }
		
		function hello()
		{
			return 
		}
	}

	$boy = new Boy("" );
	print $boy->socialMeet();