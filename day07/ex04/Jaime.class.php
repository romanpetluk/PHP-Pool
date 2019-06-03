<?php

class Jaime extends Lannister {
	public function sleepWith($who)
	{
		if ($who instanceof Cersei) {
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		} elseif (is_a($who, Lannister)) {
			print("Not even if I'm drunk !" . PHP_EOL);
		} elseif (is_a($who, Sansa)) {
			print("Let's do this." . PHP_EOL);
		}
	}
}



?>