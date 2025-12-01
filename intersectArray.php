<?php

function arrayIntersection($a, $b)
{
    $result = [];
    $k = 0;

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($b); $j++) {
            if ($a[$i] == $b[$j]) {  // non-strict match
                //if ($a[$i] === $b[$j]) {  // strict match
                $result[$k] = $a[$i];
                $k++;
                break; // avoid duplicates
            }
        }
    }

    return $result;
}

// Test
$a = [1, 2, "3", 4];
$b = ["2", 3, 4];

print_r(arrayIntersection($a, $b));
