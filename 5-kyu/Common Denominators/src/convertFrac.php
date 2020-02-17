<?php
function convertFrac($lst)
{
    $gcd_item = [];
    foreach ($lst as $v) {
        //     if(isset($v[1]))
        //       $gcd_item[] = $v[1];
        if (gcd($v[0], $v[1]) == 1) {
            $gcd_item[] = $v[1];
        } else {
            $gcd_item[] = $v[1] /  gcd($v[0], $v[1]);
        }
    }
    if (count($gcd_item) > 0) {
        $lcm = findlcm($gcd_item, count($gcd_item));
    }
    // var_dump($lst, $gcd_item, '$lcm = ' .  $lcm);
    //   var_dump($lcm);

    $result  = '';

    foreach ($lst as $v) {
        $result =  $result . '(' . (($lcm / $v[1]) * $v[0]) . ',' . ($lcm) . ')';
    }
    return $result;
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
// https://www.geeksforgeeks.org/lcm-of-given-array-elements/
// Returns LCM of array elements 
function findlcm($arr, $n)
{

    // Initialize result 
    $ans = $arr[0];

    // ans contains LCM of  
    // arr[0], ..arr[i] 
    // after i'th iteration, 
    for ($i = 1; $i < $n; $i++)
        $ans = ((($arr[$i] * $ans)) / (gcd($arr[$i], $ans)));

    return $ans;
}
