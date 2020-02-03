<?php
function odd_or_even(array $a): string
{
    $sum = 0;
    foreach ($a as $v) {
        $sum =  $sum +(int)$v ;
    }
    if ($sum % 2 == 0) {
        return 'even';
    }else{
        return 'odd';
    }
}
