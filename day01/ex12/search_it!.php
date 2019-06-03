<?php


$sliced = array_slice($argv, 2);

foreach ($sliced as $str)
{
	preg_match("/^(.+):(.+)$/", $str, $ar);
	if ($ar[1] == $argv[1])
		$data = $ar[2];
}
if ($data)
	echo "$data\n";

?>