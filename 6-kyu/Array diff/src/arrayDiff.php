<?php
function arrayDiff($a, $b)
{
    $add = [];
    if (count($a) == 0) {
        return [];
    }
    if (count($b) == 0) {
        return $a;
    }
    foreach ($a as $va) {
        $find = false;
        foreach ($b as $vb) {
            if ($va == $vb) {

                $find = true;
            }
        }
        if (!$find) {
            $add[] = $va;
        }
    }

    return $add;
}
