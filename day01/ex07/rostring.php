<?php

if ($argc < 2) {
    return;
}

$ret = array();


$str = $argv[1];

    $str = explode(' ', $str);
    foreach($str as $str) {
        $str = trim($str, " ");
        array_push($ret, $str);
    }

$ret = array_diff($ret, array(''));

$sliced = array_slice($ret, 1);
foreach($sliced as $item) {
    echo "$item ";
}
$first = current($ret);
echo "$first\n";

?>