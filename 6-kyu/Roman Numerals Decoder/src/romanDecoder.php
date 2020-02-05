<?php
function romanDecoder($roman)
{

    $roman_to_decimal = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    );

    $digits = str_split($roman);
    $lastIndex = count($digits) - 1;
    $sum = 0;

    foreach ($digits as $index => $digit) {

        if (!isset($digits[$index])) {
            continue;
        }

        if ($index < $lastIndex) {
            $left = $roman_to_decimal[$digits[$index]];
            $right = $roman_to_decimal[$digits[$index + 1]];
            if ($left < $right) {
                $sum += ($right - $left);
                unset($digits[$index + 1], $left, $right);
                continue;
            }
        }
        $sum += $roman_to_decimal[$digit];
    }

    return $sum;
}
