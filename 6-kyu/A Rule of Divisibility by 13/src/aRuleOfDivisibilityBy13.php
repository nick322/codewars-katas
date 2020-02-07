<?php
function aRuleOfDivisibilityBy13($n)
{
    $pattern = [1, 10, 9, 12, 3, 4];
    $sum = 0;
    $current_sum = 0;

    while (true) {
        $n = str_split(strrev((string)($n)));

        $sum = 0;
        foreach ($n as $k => $v) {
            $sum += $v * $pattern[$k % 6];
        }

        $n = $sum;
        if ($current_sum == $sum) {
            return $sum;
        } else {
            $current_sum = $sum;
        }
    }
}
