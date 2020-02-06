<?php
function findTheOddInt($seq): int
{
    $numberCount = [];
    foreach ($seq as $k => $v) {
        if (isset($numberCount[$v])) {
            $numberCount[$v]++;
        } else {
            $numberCount[$v] = 1;
        }
    }
    //     var_dump( $numberCount);
    foreach ($numberCount as $k => $v) {
        if ($numberCount[$k] % 2 != 0) return $k;
    }
}
