<?php

function arraysEqualStrict($a, $b)
{
    // Check length
    if (count($a) !== count($b)) {
        return false;
    }

    // Compare values strictly
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] !== $b[$i]) {   // strict comparison
            //if ($a[$i] != $b[$i]) {   // Non-strict comparison
            return false;
        }
    }

    return true;
}

// Test
$a = [1, 2, "3"];
$b = [1, 2, 3];

var_dump(arraysEqualStrict($a, $b));  // false (string "3" vs int 3)
