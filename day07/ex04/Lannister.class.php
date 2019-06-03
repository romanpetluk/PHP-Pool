<?php

class Lannister {
	public function sleepWith($who)
	{
		if ($who instanceof Lannister) {
			print("Not even if I'm drunk !". PHP_EOL);
		}
		elseif ($who instanceof Sansa) {
			print("Let's do this." . PHP_EOL);
		}
	}
}

?>