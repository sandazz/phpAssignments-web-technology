<?php
interface sellable{
	public function addStock($num);
	public function sellItem();
	public function getStockCount();
}

class television{
	private $screenSize;
	private $stockCount;
	
	public function getScreenSize(){
		return $this->screenSize;
		
	}
	public function setScreenSize($s){
		$this-> screenSize = $s;
	}
	public function addStock($num){
		$this->stockCount += $num;
	}
	public function sellItem(){
		$this->stockCount -= 1;
	}
	public function getStockCount(){
		return $this->stockCount;
	}
}

class tennisBall{
	private $count;
	private $color;
	
	public function setColor($col){
		$this-> color = $col;
		
	}
	public function getColor(){
		return $this->color;
	}
}

$tv01 = new television();
$tv01-> setScreenSize("14");
$tv01-> addStock(50);
print($tv01->getStockCount()); echo "<br>";

$tv01->sellItem();
print($tv01->getStockCount());


?>