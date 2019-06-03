<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once('Fighter.class.php');

class UnholyFactory
{
	public $warrior = array();

	public function absorb($fighter)
	{
		if ($fighter instanceof Fighter) {
			if (isset($this->warrior[$fighter->name])) {
				foreach ($this->warrior as $key => $value) {
					if ($key == $fighter->name) {
						echo("(Factory already absorbed a fighter of type " . $fighter->name . ')' . PHP_EOL);
						return;
					}
				}
			}
			$this->warrior[$fighter->name] = $fighter;
			echo "(Factory absorbed a fighter of type $fighter->name)" . PHP_EOL;
		} else {
			echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
		}
	}


		public function fabricate($str)
	{
		if(array_key_exists($str, $this->warrior))
		{
			echo ("(Factory fabricates a fighter of type ".$str.')'.PHP_EOL);
			return ($this->warrior[$str]);
		}
		else
		{
			echo ("(Factory has't absorbed any fighter of type ".$str.')'.PHP_EOL);
			return NULL;
		}
	}
}


?>