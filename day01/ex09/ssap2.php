<?php

function ft_prior($c)
{
	if (ctype_alpha($c))
		return 1;
	elseif (ctype_digit($c))
		return 2;
	else
		return 3;
}

function ft_cmp($s, $s2)
{
	$i = 0;
	if (!$s || !$s2)
		return (0);
	while ($s[$i] && $s2[$i])
	{
		if (strtolower($s[$i]) == strtolower($s2[$i]))
			$i++;
		else
		{
			$prior_a = ft_prior($s[$i]);
			$prior_b = ft_prior($s2[$i]);
			if ($prior_a == $prior_b)
				return (ord(strtolower($s[$i])) - ord(strtolower($s2[$i])));
			else if ($prior_a < $prior_b)
				return -1;
			else
				return 1;
		}
	}
	return 0;
}

$ret = array();

$sliced = array_slice($argv, 1);

foreach($sliced as $str) {
    $str = explode(' ', $str);
    foreach($str as $str) {
        $str = trim($str, " ");
        array_push($ret, $str);
    }
}
$ret = array_diff($ret, array(''));
usort($ret, "ft_cmp");
foreach($ret as $item) {
    echo "$item\n";
}

?>