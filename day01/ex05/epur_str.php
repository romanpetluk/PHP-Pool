<?php

if ($argc != 2) {
    return ;
}

$str = $argv[1];

$str = trim($str, " ");
echo $str =  preg_replace('|[\s]+|s', ' ', $str);
echo "\n"

?>