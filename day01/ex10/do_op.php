<?php

if ($argc != 4)
{
	echo "Incorrect Parameters";
	return 0;
}

$sliced = array_slice($argv, 1);

$ret = array();

foreach($sliced as $str) {
		$str = preg_replace('/[ \t]*/','',$str);
		array_push($ret, $str);
}
if ($ret[1] == '+')
{
		echo ($num = $ret[0] + $ret[2]), "\n";
}
elseif ($ret[1] == '-')
{
		echo ($num = $ret[0] - $ret[2]), "\n";
}

elseif ($ret[1] == '*')
{
		echo ($num = $ret[0] * $ret[2]), "\n";
}

elseif ($ret[1] == '/')
{
		echo ($num = $ret[0] / $ret[2]), "\n";
}

elseif ($ret[1] == '%')
{
		echo ($num = $ret[0] % $ret[2]), "\n";
}

?>