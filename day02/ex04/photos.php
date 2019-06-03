#!/usr/bin/php
<?php

if ($argc < 2)
    return 0;
if (!preg_match("/(http(s)?:\/\/)([^#?\/]*)(.*)?/i", $argv[1], $site))
    return 0;
if ($site[4])
    return 0;
$ch = curl_init("$argv[1]");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
preg_match('/<img[^>]+>/i',$html, $result);
curl_close($ch);

$links = preg_replace_callback('#(.*)(src=")(.*)(".*>)#iU', function($link) {
		return $link[3];
	}, $result);

$links = implode(", ", $links);
if(!preg_match('/^(https?:\/\/)(.+)$/', $links))
    $links = $site[1].$site[3].$links;
if ($links)
{
	$ch = curl_init("$links");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	if (!($fp = curl_exec($ch)))
	    return 0;
	preg_match("#(http(s)?:\/\/)(.*\/)(.*)#i", $links, $name);
	if (!file_exists("$site[3]"))
		mkdir("$site[3]");
	file_put_contents($site[3]."/".$name[4] ,"$fp");

    curl_close($ch);
}

?>