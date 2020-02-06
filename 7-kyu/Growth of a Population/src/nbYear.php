<?php
function nbYear($p0, $percent, $aug, $p)
{
    $sum = 0;
    $year = 0;

    while ($sum < $p) {

        $sum = (($p0 + $p0 * ($percent / 100)) + $aug);
        $p0 = (int) $sum;
        $year++;
    }

    return $year;
}
