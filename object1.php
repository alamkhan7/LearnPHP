<?php 
/*

class MyClass {
private $greeting = "Hello, World!";
	public function set($a) {
		$this->greeting=$a;
	}
	public function get(){
		print_r($this);
		echo $this->greeting ;
	}
}

$a = new MyClass ;
$b = new MyClass ;

$a->set("Snail") ;
$b->set("Khan") ;

$a->get();
echo "<br><br>";
$b->get();
*/

/*

class MyClass {
private $greeting = "Hello, World!";
	
	public function __construct($a="Nothing Passed"){
		$this->greeting = $a ; 
	}
	public function show (){
		echo $this->greeting;
	}
}

$a = new MyClass;
$a->show();
*/

print_r($GLOBALS);
?>