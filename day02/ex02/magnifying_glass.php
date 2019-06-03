#!/usr/bin/php
<?php

if ($argc < 2 || !file_exists("$argv[1]"))
	return 0;
$str = file_get_contents("$argv[1]");
if ($str == false)
	return 0;

$str = preg_replace_callback('#(<a.*>)(.+)(<.*>)?(</a>)#iU', function($matches) {
	$matches[2] = mb_strtoupper($matches[2]);
	return $matches[1].$matches[2].$matches[3].$matches[4];
}
, $str);

$str = preg_replace_callback('#(.*)(title=")(.*)(".*)#iU', function($title) {
	$title[3] = mb_strtoupper($title[3]);
	return $title[1].$title[2].$title[3].$title[4];
}
, $str);

echo "$str\n";

?>