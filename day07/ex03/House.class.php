<?php

class House
{
	public function introduce() {
		print("House ");
		print($this->getHouseName() . " of ");
		print($this->getHouseSeat() . " : ");
		print('"');
		print($this->getHouseMotto());
		print('"' . PHP_EOL);
	}
}

?>