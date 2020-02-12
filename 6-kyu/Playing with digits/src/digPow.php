<?php
function digPow($n, $p)
{
    $n_split = str_split((string) $n);
    $sum = 0;
    for ($i = 0; $i < count($n_split); $i++) {
        $sum = $sum + pow($n_split[$i], $i + $p);
    }

    if ($sum % $n == 0) {
        return $sum / $n;
    }
    return -1;
}
