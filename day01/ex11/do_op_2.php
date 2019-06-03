<?php

if ($argc != 2)
{
	echo "Incorrect Parameters";
	return 0;
}
$ar = array();
preg_match("/^[ \t]*([\+\-]?[0-9]+)[ \t]*([\+\-\*\%\/])[ \t]*([\+\-]?[0-9]+)[ \t]*$/", $argv[1], $ar);
if (count($ar) != 4)
{
	echo "Syntax Error\n";
	return 0;
}
elseif ($ar[2] == '+')
{
	echo ($ar[1] + $ar[3]), "\n";
}
elseif ($ar[2] == '-')
{
		echo ($ar[1] - $ar[3]), "\n";
}
elseif ($ar[2] == '*')
{
	echo ($ar[1] * $ar[3]), "\n";
}
elseif ($ar[2] == '/' && $ar[3])
{
	echo ($ar[1] / $ar[3]), "\n";
}
elseif ($ar[2] == '%' && $ar[3])
{
	echo ($ar[1] % $ar[3]), "\n";
}
else
	echo "Syntax Error\n";
?>