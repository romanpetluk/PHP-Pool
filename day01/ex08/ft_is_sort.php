<?php

function ft_is_sort($str)
{
    if ($str)
    {
        $temp = $str;

        sort($temp);
        $flag = true;
        foreach($temp as $key=>$value)
            if($value!=$str[$key])
                $flag = false;
        return ($flag);
    }
}

?>