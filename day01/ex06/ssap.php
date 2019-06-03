<?php

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
sort($ret);
foreach($ret as $item) {
    echo "$item\n";
}

?>