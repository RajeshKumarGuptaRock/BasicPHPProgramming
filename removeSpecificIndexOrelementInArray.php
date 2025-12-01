<?php

function removeFirstOccurrence($arr, $value)
{
    $result = [];
    $j = 0;
    $removed = false;

    for ($i = 0; $i < count($arr); $i++) {
        if (!$removed && $arr[$i] == $value) { // remove based on value
            //if ($i == $value) { // remove based on index

            $removed = true; // skip only first match
            continue;
        }
        $result[$j] = $arr[$i];
        $j++;
    }

    return $result;
}

// Test
$arr = [10, 20, 30, 20, 40];
$new = removeFirstOccurrence($arr, 20);

print_r($new);
