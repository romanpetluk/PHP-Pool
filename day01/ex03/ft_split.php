<?php

function ft_split($str)
{
    if ($str)
    {
        $str = explode(' ', $str);
        trim($str) != ' ';
        $str = array_diff($str, array(''));
        $words = array_values($str);
        return ($words);
    }
    return (NULL);
}
?>
