#!/usr/bin/php
<?php

date_default_timezone_set('Europe/Riga');
$utmpx = "/var/run/utmpx";
if ($fd = fopen("$utmpx", "r")) {
	$users = [];
	while ($str = fread($fd, 628)) {
		$temp = unpack("a256user/a4id/a32line/ipid/itype/I2date/a256host/i16pad", $str);
		if ($temp['type'] == 7)
			$users[] = $temp;
	}
}
function myCmp($a, $b) {
	if ($a['line'] === $b['line'])
		return 0;
	return $a['line'] < $b['line'] ? -1 : 1;
}
uasort($users, 'myCmp');
foreach ($users as $user)
{
	echo "$user[user]  " . "$user[line]  ";
	echo (date("M  j H:i", $user['date1'])), "\n";
}
?>