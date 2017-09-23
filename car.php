<?php 

/**
* Car simulator
*/
class Car
{
	public $color ;
	public $model;
	public $manufacturer ;
	private $speed = 0;
	
	public function accelerate ()
	{
		if ($this->speed >= 100)
			return false;
		
		$this->speed += 10;
		return true;
	}
	public function brake()
	{
		if ($this->speed <= 0)
			return false;
		
		$this->speed -= 10;
		return true;
	}

	public function getSpeed()
	{
		return $this->speed;
	}
}

$myCar = new Car();
$myCar- >color = "red";
$myCar- >manufacturer = "Volkswagen";
$myCar- >model = "Beetle";


?>