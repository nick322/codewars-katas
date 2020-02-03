<?php
function odd_or_even(array $a): string
{
    $sum = 0;
    foreach ($a as $v) {
        $sum = $v + $sum;
    }
    if ($sum % 2 == 1) {
        return 'odd';
    }
    return 'even';
}
