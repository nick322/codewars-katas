<?php
function XO($s)
{
    $str = mb_strtolower($s);
    $str = str_split($str);
    $o_count = 0;
    $x_count = 0;

    foreach ($str as $v) {
        if ($v == 'o') {
            $o_count++;
        }
        if ($v == 'x') {
            $x_count++;
        }
    }
    if ($o_count == $x_count) {
        return true;
    }
    return false;
}
