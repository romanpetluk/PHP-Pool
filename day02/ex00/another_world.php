#!/usr/bin/php
<?php

$str = $argv[1];
$str = trim($str, " \t");
echo $str =  preg_replace('|[\s]+|s', ' ', $str);
echo "\n"

?>
