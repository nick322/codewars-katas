<?php
function multiplesOf3or5($number)
{
    $number = $number - 1;
    $sum = 0;
    for ($number; $number > 0; $number--) {
        if ($number % 3 == 0 || $number % 5 == 0) {
            $sum = $sum + $number;
        }
    }
    return $sum;
}
