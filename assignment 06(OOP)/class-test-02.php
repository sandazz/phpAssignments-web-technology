<?php
abstract class shape{
	private $color;
	private $isFilled;
	
	abstract public function getArea();
	
	public function __construct($col, $isFilled){
		$this-> color = $col;
		$this-> isFilled = $isFilled;
	}
	public function setColor($col){
		echo "<br> this from the parent shape		 <br>";
		$this -> color = $col;
	}
	public function getColor(){
		return $this -> color;
	}
	public function isFilled(){
		return $this -> isFilled;
	}
	public function makeHollow(){
		$this -> isFilled = false;
	}
	public function fill(){
		$this -> isFilled = true;
	}
}

class square extends shape{
	private $length;
	
	public function __construct($col, $isFilled, $l){
		parent:: __construct($col, $isFilled);
		$this-> length = $l;
		
	}
	public function setColor($col){
		echo "<br> this from the square <br>";
		$this -> color = $col;
	}
	public function setLength($l){
		$this -> length = $l;
	}
	public function getLength(){
		return $this->length;
	}
	public function getArea(){
		return ($this->length * $this->length);
	}
}

class circle extends shape{
	private $radious;
	
	public function __construct($col, $isFilled, $r){
		parent:: __construct($col, $isFilled);
		$this-> radious = $r;
		
	}
	public function getRadious(){
		return $this-> radious;
	}
	public function setRadious($r){
		$this-> radious = $r;
	}
	public function getArea(){
		return M_PI * pow($this->radious,2);
	}
}

//$shape01 = new shape("red", true);
//print_r($shape01);
//echo  "<br>".$shape01->getColor()."<br>";

$c01 = new circle("white", true,12);
$c01->setRadious(5);
print($c01->getArea());
$c01->setColor("blue");

$s01 = new square("green", true, 4);
$s01->setColor("pink");


?>


