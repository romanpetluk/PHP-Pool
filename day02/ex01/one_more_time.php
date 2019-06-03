#!/usr/bin/php
<?php

if ($argc < 2)
	return 0;
date_default_timezone_set('Europe/Paris');

$ft_day = array(
	"Lundi" => 1,
	"Mardi" => 2,
	"Mercredi" => 3,
	"Jeudi" => 4,
	"Vendredi" => 5,
	"Samedi" => 6,
	"Dimanche" => 7,
);

$ft_month = array (
	"Janvier" => 1,
	"Février" => 2,
	"Mars" => 3,
	"Avril" => 4,
	"Mai" => 5,
	"Juin" => 6,
	"Juillet" => 7,
	"Août" => 8,
	"Septembre" => 9,
	"Octobre" => 10,
	"Novembre" => 11,
	"Décembre" => 12,
);

if (preg_match("/^(?<day_name>[A-Z]?[a-z]+) (?<day_num>[0-3]{1}[0-9]{1}) (?<month>[A-Z]?[a-zéû]+) ".
		"(?<year>[0-9]{4}) (?<hour>[0-2]{1}[0-9]{1}):(?<min>[0-5]{1}[0-9]{1}):(?<sec>[0-5]{1}[0-9]{1})$/", $argv[1], $str) &&
	array_key_exists(ucfirst($str["day_name"]), $ft_day) &&
	array_key_exists(ucfirst($str["month"]), $ft_month))
{
	if ($str["hour"] > 23 || $str["day_num"] > 31)
	{
		echo 'Wrong Format'. "\n";
		exit(0);
	}
	echo mktime($str["hour"], $str["min"], $str["sec"], $ft_month[ucfirst($str["month"])], $str["day_num"], $str["year"]), "\n";
}
else
	echo 'Wrong Format'. "\n";
?>
